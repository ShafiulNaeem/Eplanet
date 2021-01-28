<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ContactUsSlider;
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
        $mainRes = $this->productByCategory(['Electronic Gadget', 'Gadget Accessories', 'Industrial items', 'Mens Fashion', 'women']);


        //Category Query
        $category = Category::orderBy('category_name','asc')->GetActive()->get();

        //BestSell from Product
        $product = Product::orderBy('sold','desc')->GetActive()->limit(10)->get();

        $sliders = ContactUsSlider::GetActive()->where('for', 1)->get();


        return view('welcome',['results' => $mainRes,'categories' => $category, 'products' =>$product, 'sliders' => $sliders, 'totalVideo' => $totalVideo ]);
    }

    public function show($id)
    {
        $mainRes = $this->productByCategory(['kids', 'men']);

        $product = Product::with(['productImages', 'productVideos','admin'])->where('id', $id)->GetActive()->get();
        //dd($product);

        return view('pages.product-details',['results' => $mainRes,'products' =>$product]);

    }

    // Show Category
    public function category($id){
        $category = SubCategory::with(['category','productWithStatus'])->where('category_id',$id)->GetActive()->paginate(20);
        //dd($category);
        return view('pages.categories',['categories' =>$category]);
    }

    private function productByCategory($catArray){
        $mainRes = [];
        foreach ($catArray as $val){
            $category_result = [];
            $subCategories = Category::with('products')->where(
                'category_name' , '=', $val
            )->GetActive()->get();

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

        $check = WishList::where('product_id', $id)->first();

        if( empty($check) ){
            return ( WishList::create($data) ) ? response([
                'message' => 'Wishlist Created'
            ], 200) : response([
                'message' => 'Something went wrong'
            ], 404);
        }

        return  response([
            'message' => 'Wishlist Created'
        ]);
    }

    public function userWishList()
    {
        $data = [
            'wishLists' => WishList::where('user_id', Auth::id())->with('product')->get()
        ];

        return view('pages.wishlist', $data);
    }


    public function deleteWishList(WishList $wishList)
    {
        $wishList->delete();
        return redirect()->back();
    }


    public function  addExpressList($id){
        $data['product_id'] = $id;
        if (Auth::check()) $data['user_id'] = Auth::user()->id;

        $check = ExpressWish::wher('product_id', $id)->first();

        if( empty($check) ){
            return ( ExpressWish::create($data) ) ? response([
                'message' => 'Express wish Created'
            ], 200) : response([
                'message' => 'Something went wrong'
            ], 404);
        }

        return response([
            'message' => 'Express wish Created'
        ], 200);
    }
}
