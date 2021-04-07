<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Discover;
use Illuminate\Http\Request;
use Session;
use App\Helper\DeleteFile;

class DiscoverController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discovers = Discover::with('admin')->orderBy('created_at','asc')->get();
        //dd($discovers);
        return view('admin.discover.manage',compact('discovers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::where([
            'role'=> 2,
            'status'=> 1
        ])->get();
        //dd($admins);
        return view('admin.discover.create',compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Discover $discover )
    {
        $this->validate($request, array(
            'description' => 'required',
            'admin_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ));

        $discover->admin_id = $request->admin_id;;
        $discover->description = $request->description;

        if($request->hasFile('image')){
            $image = request()->file('image');
            $discover->image= $this->uploadImage($image, 'images');
        }

        if($discover->save()){
            Session::flash('success','Data Inserted Successfully');
            return redirect()->route('discover.index');
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
    public function edit(Discover $discover)
    {
        $admins = Admin::where([
            'role'=> 2,
            'status'=> 1
        ])->get();
        //dd($admins);
        return view('admin.discover.edit',compact('discover','admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discover $discover)
    {
        $this->validate($request, array(
            'description' => 'required',
            'admin_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ));

        $discover->admin_id = $request->admin_id;;
        $discover->description = $request->description;

        if($request->hasFile('image')){
            $image = request()->file('image');
            $discover->image= $this->uploadImage($image, 'images');
        }

        if($discover->save()){
            Session::flash('success','Data Updated Successfully');
            return redirect()->route('discover.index');
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
    public function destroy(Discover $discover)
    {
        self::deleteFile( storage_path('app/public/images/' . $discover->image) );

        $discover->delete();
        Session::flash('success','Data Deleted Successfully');
        return redirect()->back();
    }
}
