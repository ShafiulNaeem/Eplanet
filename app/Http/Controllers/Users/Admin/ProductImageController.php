<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Session;
use Image;


class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productImages = ProductImage::with('product')->get();
        return view('admin.productImage.manage',compact('productImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.productImage.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->file('product_image'));
        $this->validate($request, array(
            'product_name' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ));

        $productImages = new ProductImage();
        $productImages->product_id = $request->product_name;

        if($request->hasFile('product_image')){
            $image = request()->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->product_image->move(public_path('images'), $filename);
            $productImages->product_image= $filename;
            $productImages->save();
        };


        if($productImages->save()){
            Session::flash('success','Product Images Inserted Successfully');
            return redirect()->route('productImage.index');
        } else {
            Session::flash('success','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param ProductImage $productImage
     * @return void
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductImage $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $productImage)
    {
        return view('admin.productImage.edit',compact('productImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param ProductImage $productImage
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, ProductImage $productImage)
    {
        $this->validate($request, array(
            'product_name' => 'required',
            'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ));

//        $productImages = ProductImage::find($id);
        $productImage->product_id = $request->product_name;

        if($request->hasFile('product_image')){
            $image = request()->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->product_image->move(public_path('images'), $filename);
            $productImage->product_image= $filename;
            $productImage->save();
        };


        if($productImage->save()){
            Session::flash('success','Product Images Updated Successfully');
            return redirect()->route('productImage.index');
        } else {
            Session::flash('success','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductImage $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImage $productImage)
    {
//        $productImages = ProductImage::find($id);
        $productImage->delete();
        return redirect()->back()->with('deleted','Deleted Successfully..');
    }
}
