<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;
use Session;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = DB::table('sub_categories')
            ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->select('sub_categories.*', 'categories.category_name')
            ->get();
//        dd($subCategories);
        return view('admin.subcategory.manage',compact('subCategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create',compact('categories'));
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
            'subcategory_name' => 'required',
            'category_name' => 'required',
        ));

        $SubCategory = new SubCategory();
        $SubCategory->subcategory_name = $request->subcategory_name;
        $SubCategory->category_id = $request->category_name;
        $SubCategory->status = $request->status;

        if($SubCategory->save()){
            Session::flash('success','Sub Category Inserted Successfully');
            return redirect()->route('subcategory.index');
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
     * @param SubCategory $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
//        dd($subcategory);
        return view('admin.subcategory.edit',compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param SubCategory $subcategory
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $this->validate($request, array(
            'subcategory_name' => 'required',
            'category_name' => 'required',

        ));

        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->category_id = $request->category_name;
        $subcategory->status = $request->status;

        if($subcategory->save()){
            Session::flash('success','Sub Category Updated Successfully');
            return redirect()->route('subcategory.index');
        }
        else {
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
    public function destroy(SubCategory $subcategory)
    {
//        $category = SubCategory::find($id);
        //dd($subCategory);
        $subcategory->delete();
        return redirect()->back()->with('deleted','Deleted Successfully..');
    }
}