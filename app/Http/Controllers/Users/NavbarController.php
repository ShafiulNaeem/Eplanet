<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\SecondarySubCategory;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{
    public function store(Request $request)
    {
        if ($request->product_name != null ){
//            $mainRes = $this->productByCategory(['kids', 'men']);
            $mainRes = [];

            $product = Product::with(['productImages', 'productVideos'])->where('product_name', 'LIKE','%'.$request->product_name.'%')->GetActive()->get();

            return view('pages.product-details',['results' => $mainRes,'products' =>$product]);
        } else {
            $category = SubCategory::with(['category','productWithStatus'])->where('category_id',$request->category_name)->GetActive()->paginate(20);

            return view('pages.categories',['categories' =>$category]);
        }
    }


    //subcategory
    public function show($slug)
    {
        $catArray = ['kids', 'men'];
        $mainRes = $this->productByCategory($catArray);

        $category = SubCategory::where('subcategory_slug',$slug)->GetActive()->get();

        $product = Product::where([
            ['sub_categories_id' , '=', $category[0]->id],
            ['status', '=', 1],
        ])->paginate(16);


        return view('pages.one_category',['results' => $mainRes,'categories' =>$category,'products' => $product]);
    }

    // 2nd subcategory
    public function secondary_subcategory($slug)
    {
        $catArray = ['kids', 'men'];
        $mainRes = $this->productByCategory($catArray);

        //$category = SubCategory::with('productWithStatus')->where('id',$id)->GetActive()->paginate(1);
        $category = SecondarySubCategory::where('secondary_subcategory_slug',$slug)->GetActive()->get();
        $product = Product::where([
            ['secondary_sub_categories_id' , '=', $category[0]->id],
            ['status', '=', 1],
        ])->paginate(16);

        //dd($product);

        return view('pages.one_category',['results' => $mainRes,'categories' =>$category,'products' => $product]);
    }

    // BrandProducts
    public function brandProduct($slug)
    {
        $catArray = ['kids', 'men'];
        $mainRes = $this->productByCategory($catArray);

        $brand = Brand::where('brand_slug',$slug)->GetActive()->get();
        $product = Product::where([
            ['brand_id' , '=', $brand[0]->id],
            ['status', '=', 1],
        ])->paginate(16);

        //dd($product);

        return view('pages.brand_products',['results' => $mainRes,'brands' =>$brand,'products' => $product]);
    }

    public  function profile(){

        //dd(Auth::user()->id);
        $users = User::where('id',Auth::user()->id)->get();
        $orders = Order::with('products')->where(['user_id' => Auth::user()->id])->get();
        $userPBlogs = Blog::where('user_id', Auth::user()->id) ->get();

        //dd($orders);
        return view('pages.user_profile',compact('users','orders','userPBlogs'));
    }

    public function profileEdit(User $user)
    {
        //dd($user);
        return view('pages.profile_update',compact('user'));
    }

    public function profileUpdate(Request $request,User $user)
    {
        $validate = $request->validate([
            'fname'=> 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        return ( $user->update($validate) )?
            redirect()->route('profile.show')->with('success', 'Your Information Updated Successfully'):
            redirect()->route('profile.edit')->with('error', 'Something went wrong') ;
    }

    public function orderCancel(Order $order)
    {
        $order->delete();
        return redirect()->back();
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
}
