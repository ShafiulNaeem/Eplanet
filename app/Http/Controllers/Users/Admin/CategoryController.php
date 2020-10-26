<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::orderBy('category_name','asc')->get();

        return view('admin.category.manage',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'category_name' => ['required', 'string', 'max:255']
            
        ]);

        $categorys = new Category();

        $admin_id = Auth::guard('admin')->user()->id;
        $categorys->admin_id = $admin_id;
        $categorys->category_name = $request->category_name;
        $categorys->status = $request->status;
        
        $categorys->save();

        Session::flash('success','Data Inserted Successfully');

        return redirect()->route('category.index');
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
        $categorys = Category::find($id);
        return view('admin.category.edit',compact('categorys'));
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
            'category_name' => ['required', 'string', 'max:255']
            
        ]);

        $categorys = Category::find($id);
        $admin_id = Auth::guard('admin')->user()->id;

        $categorys->admin_id = $admin_id;
        $categorys->category_name = $request->category_name;
        $categorys->status = $request->status;
        
        $categorys->save();

        Session::flash('success','Data Updated Successfully');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorys = Category::find($id);
        if(!is_null($categorys)){

            $categorys->delete();
            Session::flash('error','Data Deleted Successfully');
            return redirect()->route('brand.index');
        }
    }
}
