<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategorySlider;
use App\Models\ContactUsSlider;
use App\Models\Event;
use App\Models\EventProduct;
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
        $mainRes = Category::with('products')->where('featured', 1)->GetActive()->get();

        //Category Query
        $category = Category::orderBy('category_name','asc')->GetActive()->get();

        //BestSell from Product
        $product = Product::orderBy('sold','desc')->GetActive()->limit(10)->get();

        $sliders = ContactUsSlider::GetActive()->where('for', 1)->get();


        return view('welcome',['results' => $mainRes,'categories' => $category, 'products' =>$product, 'sliders' => $sliders ]);
    }

    public function show($slug)
    {
        $product = Product::with(['productImages', 'productVideos','admin', 'category', 'subcategory', 'brand', 'secondsub', 'coupon'])->where('product_slug', $slug)->GetActive()->get();
        $mainRes = Category::with('products')
            ->where('id', $product[0]->category_id)
            ->first();
//dd($mainRes);
        return view('pages.product-details',['results' => $mainRes,'products' =>$product]);

    }

    // Show Category
    public function category($slug){
        $id = Category::where('category_slug', $slug)->first()->id;
        $category = SubCategory::with(['category','productWithStatus'])->where('category_id',$id)->GetActive()->paginate(20);
        $slider = CategorySlider::where('category_id', $id)->GetActive()->get();
        //dd($categorySliders);
        return view('pages.categories',['categories' =>$category,'sliders' =>$slider]);
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

    //  promotion
    public function promotion(){
        //dd( \Carbon\Carbon::today()->format('Y-m-d'));
        $count_date = \Carbon\Carbon::today()->format('Y-m-d');
        $event = Event::with('eventProducts')->where('start_date', '>=', $count_date)->get();

        $eventProduct =EventProduct::with('category')
            ->where([
                'event_id' => $event[0]->id
            ])
            ->select('category_id','event_id')->distinct()->get();
        return view('pages.promotion',['events' =>$event,'eventProducts' => $eventProduct]);

    }

    // promotion products
    public function promotionProduct($event_id,$category_id){

    }

}
