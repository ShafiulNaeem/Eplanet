<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Admin;
use Illuminate\Http\Request;
use Session;
use Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('brand_name','asc')->get();
       return view('admin.brand.manage',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'brand_name' => ['required', 'string', 'max:255']
            
        ]);

        $admin_id = Auth::guard('admin')->user()->id;

        $brands = new Brand();
        
        $brands->admin_id = $admin_id;
        $brands->brand_name = $request->brand_name;
        $brands->status = $request->status;;
        $brands->save();

        Session::flash('success','Data Inserted Successfully');

        return redirect()->route('brand.index');
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
        
        $brands = Brand::find($id);
        return view('admin.brand.edit',compact('brands'));
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
        $val = $request->validate([
            'brand_name' => ['required', 'string', 'max:255']
            
        ]);

        $brands = Brand::find($id);
        $admin_id = Auth::guard('admin')->user()->id;
        $brands->admin_id = $admin_id;
        $brands->brand_name = $request->brand_name;
        $brands->status = $request->status;;
        $brands->save();
            Session::flash('success','Data Updated Successfully');
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::find($id);
        if(!is_null($brands)){

            $brands->delete();
            Session::flash('error','Data Successfully Deleted');
            return redirect()->route('brand.index');
        }
    }
}
