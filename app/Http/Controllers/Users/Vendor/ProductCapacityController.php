<?php

namespace App\Http\Controllers\Users\Vendor;

use App\Http\Controllers\Controller;
use App\Models\ProductCapacity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Helper\DeleteFile;

class ProductCapacityController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCapacities = ProductCapacity::orderby('created_at','DESC')->get();
        //dd($productCapacity);
        return view('admin.vendor.productCapacity.manage',compact('productCapacities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendor.productCapacity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProductCapacity $productCapacity)
    {
        $this->validate($request, array(
            'title' => 'required',
            'description' => 'required',
            'capacity_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        //$productCapacities = new ProductCapacity();

        $admin_id = Auth::guard('admin')->user()->id;
        $productCapacity->admin_id = $admin_id;
        $productCapacity->title = $request->title;
        $productCapacity->description = $request->description;


        if($request->hasFile('capacity_image')){
            $image = request()->file('capacity_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->capacity_image->move(public_path('images'), $filename);
            $productCapacity->capacity_image= $filename;
            $productCapacity->save();
        };

        if($productCapacity->save()){
            Session::flash('success','Product Capacity Inserted Successfully');
            return redirect()->route('productCapacity.index');
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
    public function edit(ProductCapacity $productCapacity)
    {
        return view('admin.vendor.productCapacity.edit',compact('productCapacity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCapacity $productCapacity)
    {
        $this->validate($request, array(
            'title' => 'required',
            'description' => 'required',
            'capacity_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $productCapacity->title = $request->title;
        $productCapacity->description = $request->description;

        if ( ! self::deleteFile( public_path('images/' . $productCapacity->capacity_image) ) )
            return redirect()->back()->with('error','Something went wrong');

        if($request->hasFile('capacity_image')){
            $image = request()->file('capacity_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->capacity_image->move(public_path('images'), $filename);
            $productCapacity->capacity_image= $filename;
            $productCapacity->save();
        };

        if($productCapacity->save()){
            Session::flash('success','Product Capacity Updated Successfully');
            return redirect()->route('productCapacity.index');
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
    public function destroy(ProductCapacity $productCapacity)
    {
        if ( ! self::deleteFile( public_path('images/' . $productCapacity->capacity_image) ) )
            return redirect()->back()->with('error','Something went wrong');

        $productCapacity->delete();
        Session::flash('success','Product Capacity Deleted Successfully');
        return redirect()->back();
    }
}
