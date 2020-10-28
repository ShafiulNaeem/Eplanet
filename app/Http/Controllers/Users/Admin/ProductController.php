<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use Auth;
use Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('product_name','asc')->get();
        return view('admin.product.manage',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::orderBy('brand_name','asc')->get();
        //$categorys = Category::orderBy('category_name','asc')->get();
        return view('admin.product.create',compact('brands',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'product_name' => ['required', 'string', 'max:255'],
            'product_description' => 'required',
            'product_brand' => 'required',
            'product_category' => 'required',
            'product_tax' => 'sometimes',
            'product_coupon' => 'sometimes',
            'product_price' => 'required',
            'product_color' => 'required',
            'product_model' => 'sometimes',
            'product_size' => 'sometimes',
            'product_stock' => 'required',
            'manufactured_by' => 'sometimes',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $products = new Product();

        $admin_id = Auth::guard('admin')->user()->id;
        $admin_role = Auth::guard('admin')->user()->role;

        $products->admin_id = $admin_id;
        $products->unique_id = "#".substr(str_shuffle(MD5(microtime())), 0, 10);
        $products->coupon_id = $request->product_coupon;
        $products->admin_role = $admin_role;
        $products->product_name = $request->product_name;
        $products->product_description = $request->product_description;
       // $val['feature_image'] = $request->feature_image;
        $products->color = $request->product_color;
        $products->model = $request->product_model;
        $products->tax = $request->product_tax;
        $products->product_price = $request->product_price;
        $products->size = $request->product_size;
        $products->stock = $request->product_stock;
        $products->brand_id = $request->product_brand;
        $products->category_id = $request->product_category;
        $products->manufactured_by = $request->manufactured_by;

        if($request->hasFile('feature_image')){
            $image = request()->file('feature_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->feature_image->move(public_path('images'), $filename);
            $products->feature_image= $filename;
            $products->save();
        };

        if($products->save()){
            Session::flash('success','Product Inserted Successfully');
            return redirect()->route('product.index');
        } else {
            Session::flash('success','Something went wrong');
            return redirect()->back();
        }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','id'));
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
        $this->validate($request, array(
            'product_name' => ['required', 'string', 'max:255'],
            'product_description' => 'required',
            'product_tax' => 'required',
            'product_price' => 'required',
            'product_color' => 'required',
            'product_model' => 'required',
            'product_size' => 'required',
            'product_stock' => 'required',
            'manufactured_by' => 'required',
            'feature_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $products = Product::find($id);

        $products->product_name = $request->product_name;
        $products->product_description = $request->product_description;
        $products->color = $request->product_color;
        $products->model = $request->product_model;
        $products->coupon_id = $request->product_coupon;
        $products->tax = $request->product_tax;
        $products->product_price = $request->product_price;
        $products->size = $request->product_size;
        $products->stock = $request->product_stock;
        $products->brand_id = $request->product_brand;
        $products->category_id = $request->product_category;
        $products->manufactured_by = $request->manufactured_by;

        if($request->hasFile('feature_image')){
            $image = request()->file('feature_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->feature_image->move(public_path('images'), $filename);
            $products->feature_image= $filename;
            $products->save();
        };

        $products->save();

        Session::flash('success','Product Updated Successfully');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back()->with('deleted','Deleted Successfully..');
    }
}
