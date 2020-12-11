<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Helper\DeleteFile;

class SubCategoryController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCategories = SubCategory::with('category')->SubCategoryWithAdminOwner()->get();

        return view('admin.subcategory.manage',compact('subCategories'));

    }

    // All vendor
    public function allSubCategory()
    {
        $subCategories = SubCategory::with('category')->SubCategoryWithOutAdminOwner()->get();

        return view('admin.subcategory.manage',compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::CategoryWithAdminOwner()->get();

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
            'sub_category_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $SubCategory = new SubCategory();
        $SubCategory->subcategory_name = $request->subcategory_name;
        $SubCategory->category_id = $request->category_name;
        $SubCategory->status = $request->status;
        $SubCategory->admin_id = Auth::guard('admin')->user()->id;


        if($request->hasFile('sub_category_image')){
            $image = request()->file('sub_category_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->sub_category_image->move(public_path('images'), $filename);
            $SubCategory->sub_category_image= $filename;
            $SubCategory->save();
        };

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
        $categories = Category::all();
        return view('admin.subcategory.edit',compact('subcategory', 'categories'));
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

        if ( ! self::deleteFile( public_path('images/' . $subcategory->sub_category_image) ) )
            return redirect()->back()->with('error','Something went wrong');

        if($request->hasFile('sub_category_image')){
            $image = request()->file('sub_category_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            request()->sub_category_image->move(public_path('images'), $filename);
            $subcategory->sub_category_image= $filename;
            $subcategory->save();
        };

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
     * @param SubCategory $subcategory
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(SubCategory $subcategory)
    {
        if ( ! self::deleteFile( public_path('images/' . $subcategory->sub_category_image) ) )
            return redirect()->back()->with('error','Something went wrong');

        $subcategory->delete();
        Session::flash('success','Sub Category Delete Successfully');
        return redirect()->back();
    }

    // Change Status
    public function change(Request $request)
    {
        if( self::changeStatus($request->status, 'App\Models\SubCategory', $request->id) )
            return redirect()->back()->with('success', 'Status Changes');
        return  redirect()->back()->with('error', 'Something went wrong');
    }
}
