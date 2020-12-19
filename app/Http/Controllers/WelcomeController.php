<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ExpressWish;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){

        // Category wise Product
        $mainRes = $this->productByCategory(['kids', 'men', 'women', 'electronics']);


        //Category Query
        $category = Category::orderBy('category_name','asc')->GetActive()->get();

        //BestSell from Product
        $product = Product::orderBy('sold','desc')->GetActive()->limit(10)->get();


        //dd($mainRes);
        return view('welcome',['results' => $mainRes,'categories' => $category, 'products' =>$product ]);
    }

    public function show($id)
    {
        $mainRes = $this->productByCategory(['kids', 'men']);

        $product = Product::with(['productImages', 'productVideos'])->where('id', $id)->GetActive()->get();

        return view('pages.product-details',['results' => $mainRes,'products' =>$product]);

    }

    // Show Category
    public function category($id){
        $category = SubCategory::with(['category','productWithStatus'])->where('category_id',$id)->GetActive()->paginate(12);
        //dd($category);
        return view('pages.categories',['categories' =>$category]);
    }

    private function productByCategory($catArray){
        $mainRes = [];
        foreach ($catArray as $val){
            $category_result = [];
            $subCategories = Category::with('products')->where([
                ['category_name' , '=', $val],
                ['status', '=', 1],
            ])->get();

            foreach ($subCategories as $sub) {
                if ( count($sub->products) ){
                    $category_result['category'] = [
                        'category_name' => $sub->category_name,
                        'category_image' => $sub->category_image
                    ];

                    foreach ($sub->products as $product){
                            //dd($product->status);
                            if ($product->status == 1){
                                $category_result['category']['products'][] = [
                                    'id' => $product->id,
                                    'unique_id' => $product->unique_id,
                                    'brand_id' => $product->brand_id,
                                    'product_name' => $product->product_name,
                                    'feature_image' => $product->feature_image,
                                    'stock' => $product->stock,
                                    'product_price' => $product->product_price
                                ];
                            }

                    }
                    $mainRes[] = $category_result;
                }
            }
        }
        return $mainRes;
    }


    public function addWishList($id)
    {
        $data['product_id'] = $id;
        $data['user_id'] = Auth::user()->id;

        return ( WishList::create($data) ) ? response([
            'message' => 'Wishlist Created'
        ], 200) : response([
            'message' => 'Something went wrong'
        ], 404);
    }


    public function  addExpressList($id){
        $data['product_id'] = $id;
        if (Auth::check())
            $data['user_id'] = Auth::user()->id;

        return ( ExpressWish::create($data) ) ? response([
            'message' => 'Wishlist Created'
        ], 200) : response([
            'message' => 'Something went wrong'
        ], 404);
    }
}
