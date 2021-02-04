<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\SecondarySubCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;
use Auth;
use Image;
use Illuminate\Support\Str;
use App\Helper\DeleteFile;

class ProductController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('brand')->adminProduct()->get();

        return view('admin.product.manage',compact('products'));
    }

    public function allProduct()
    {
        $products = Product::with('brand')->withoutAdminProduct()->get();
//dd($products);
        return view('admin.product.manage',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $brands = Brand::orderBy('brand_name','asc')->BrandWithAdminOwner()->get();
        $subcategory = SubCategory::SubCategoryWithAdminOwner()->get();
        $categories = Category::CategoryWithAdminOwner()->get();
        $coupons = Coupon::CouponWithAdminOwner()->get();
        $secondary_sub = SecondarySubCategory::SecondarySubCategoryWithAdminOwner()->get();

        return view('admin.product.create',compact('brands','subcategory', 'coupons', 'categories', 'secondary_sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validation($request);

        $products = new Product();

        $admin_id = Auth::guard('admin')->user()->id;

        $products->admin_id = $admin_id;
        $products->unique_id = Str::random(9);
        $products->category_id = $request->product_category;
        $products->coupon_id = $request->product_coupon;
        $products->product_name = $request->product_name;
        $products->product_description = $request->product_description;
        $products->color = $request->product_color;
        $products->model = $request->product_model;
        $products->tax = $request->product_tax;
        $products->product_price = $request->product_price;
        $products->size = $request->product_size;
        $products->stock = $request->product_stock;
        $products->brand_id = $request->product_brand;
        $products->sub_categories_id = $request->product_sub_category;
        $products->manufactured_by = $request->manufactured_by;
        $products->is_new = $request->is_new;
        $products->secondary_sub_categories_id = $request->secondary_sub_categories_id;
        $products->status = $request->status;

        if( isset($request->secondary_sub_categories_id) )
            $products->secondary_sub_categories_id = $request->secondary_sub_categories_id;

        if($request->hasFile('feature_image')){
            $image = request()->file('feature_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->feature_image->move(public_path('images'), $filename);
            $products->feature_image = $filename;
            $products->save();
        };

        if($products->save())
            return redirect()->route('product.index')->with('success','Product Inserted Successfully');
        return redirect()->back()->with('error','Something went wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        $brands = Brand::orderBy('brand_name','asc')->BrandWithAdminOwner()->get();
        $subcategory = SubCategory::SubCategoryWithAdminOwner()->get();
        $categories = Category::CategoryWithAdminOwner()->get();
        $coupons = Coupon::CouponWithAdminOwner()->get();
        $secondary_sub = SecondarySubCategory::SecondarySubCategoryWithAdminOwner()->get();

        return view('admin.product.edit',compact('product','brands', 'coupons','subcategory', 'categories', 'secondary_sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validation($request);

        $products = Product::find($id);

        $products->product_name = $request->product_name;
        $products->product_description = $request->product_description;
        $products->color = $request->product_color;
        $products->model = $request->product_model;
        $products->coupon_id = $request->product_coupon;
        $products->tax = ( ! empty($request->product_tax) ) ? $request->product_tax : 0;
        $products->sub_categories_id = $request->product_sub_category;
        $products->product_price = $request->product_price;
        $products->size = $request->product_size;
        $products->stock = $request->product_stock;
        $products->brand_id = $request->product_brand;
        $products->sub_categories_id = $request->product_category;
        $products->manufactured_by = $request->manufactured_by;
        $products->is_new = $request->is_new;
        $products->status = $request->status;

        if( isset($request->secondary_sub_categories_id) )
            $products->secondary_sub_categories_id = $request->secondary_sub_categories_id;


        if($request->hasFile('feature_image')){
            $image = request()->file('feature_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->feature_image->move(public_path('images'), $filename);
            $products->feature_image= $filename;
            $products->save();
        } else $products->save();


        return redirect()->route('product.index')->with('success','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        self::deleteFile(public_path('images/' . $product->feature_image));
        //return redirect()->back()->with('error','Something went Wrong');

        $product->delete();
        return redirect()->back()->with('info','Product Deleted Successfully');
    }


    public function change(Request $request)
    {
        if( self::changeStatus($request->status, 'App\Models\Product', $request->id) )
            return redirect()->back()->with('success', 'Status Changes');
        return  redirect()->back()->with('error', 'Something went wrong');
    }


    private function validation($request){
        $this->validate($request, array(
            'product_name' => ['required', 'string', 'max:255'],
            'product_description' => 'required',
            'product_tax' => 'sometimes',
            'product_price' => 'required',
            'product_color' => 'sometimes',
            'product_model' => 'sometimes',
            'product_size' => 'sometimes',
            'product_stock' => 'required',
            'secondary_sub_categories_id' => 'sometimes',
            'product_coupon' => 'sometimes',
            'manufactured_by' => 'sometimes',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
    }
}
