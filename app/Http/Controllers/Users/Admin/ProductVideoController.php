<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Image;
use App\Helper\DeleteFile;

class ProductVideoController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productvideos = ProductVideo::with('product')->ProductVideoWithAdminOwner()->get();
        //dd($productImages);
        return view('admin.productVideo.manage',compact('productvideos'));
    }


    public function allProductVideo()
    {
        $productvideos = ProductVideo::with('product')->ProductVideoWithOutAdminOwner()->get();
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
        $products = Product::AdminProduct()->get();
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
            'product_video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
        ));

        $productVideos = new ProductVideo();
        $productVideos->product_id = $request->product_name;
        $productVideos->admin_id = Auth::guard('admin')->user()->id;

        if($request->hasFile('product_video')){
            $image = request()->file('product_video');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->product_video->move(public_path('videos'), $filename);
            $productVideos->product_video_type= $image->getClientOriginalExtension();
            $productVideos->product_video = $filename;
            $productVideos->save();
        }


        if($productVideos->save()){
            return redirect()->route('productVideo.index')->with('success','Product Video Inserted Successfully');
        } else {
            return redirect()->back()->with('erro','Something went wrong');
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
        $productvideo = ProductVideo::ProductVideoWithAdminOwner()->find($id);
        $products = Product::AdminProduct()->get();
        return view('admin.productVideo.edit',compact('productvideo','id', 'products'));
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
            'product_video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
        ));

        $productVideos = ProductVideo::find($id);
        $productVideos->product_id = $request->product_name;

        if (! self::deleteFile(public_path('videos/' . $productVideos->product_video)) )
            return redirect()->back()->with('error','Something went wrong');

        if($request->hasFile('product_video')){
            $image = request()->file('product_video');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->product_video->move(public_path('videos'), $filename);
            $productVideos->product_video = $filename;
            $productVideos->product_video_type= $image->getClientOriginalExtension();
            $productVideos->save();
        }


        if($productVideos->save()){
            return redirect()->route('productVideo.index')->with('success','Product Video Updated Successfully');
        } else {
            return redirect()->back()->with('erro','Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductVideo $productVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVideo $productVideo)
    {
        self::deleteFile(public_path('videos/' . $productVideo->product_video));
        //return redirect()->back()->with('error','Something went wrong');

        $productVideo->delete();
        return redirect()->back()->with('success','Deleted Successfully..');
    }
}
