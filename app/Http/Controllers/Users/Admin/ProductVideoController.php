<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVideo;
use Illuminate\Http\Request;
use Session;
use Image;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productvideos = ProductVideo::with('product')->get();
        //dd($productImages);
        return view('admin.productVideo.manage',compact('productvideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.productVideo.create',compact('products'));
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
            'product_name' => 'required',
            'product_image' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',


        ));

        $productVideos = new ProductVideo();
        $productVideos->product_id = $request->product_name;

        if($request->hasFile('product_image')){
            $image = request()->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->product_image->move(public_path('videos'), $filename);
            $productVideos->product_image= $filename;
            $productVideos->save();
        }


        if($productVideos->save()){
            Session::flash('success','Product Video Inserted Successfully');
            return redirect()->route('productVideo.index');
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
        $productvideo = ProductVideo::find($id);
        return view('admin.productVideo.edit',compact('productvideo','id'));
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
            'product_name' => 'required',
            'product_image' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',


        ));

        $productVideos = ProductVideo::find($id);
        $productVideos->product_id = $request->product_name;

        if($request->hasFile('product_image')){
            $image = request()->file('product_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->product_image->move(public_path('videos'), $filename);
            $productVideos->product_image= $filename;
            $productVideos->save();
        }


        if($productVideos->save()){
            Session::flash('success','Product Video Updated Successfully');
            return redirect()->route('productVideo.index');
        } else {
            Session::flash('success','Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productVideos = ProductVideo::find($id);
        $productVideos->delete();
        return redirect()->back()->with('deleted','Deleted Successfully..');
    }
}
