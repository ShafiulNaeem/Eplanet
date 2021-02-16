<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::orderBy('created_at','desc')->AdminDivision()->get();
        return view('admin.division.manage',compact('divisions'));
    }

    public function allDivision()
    {
        $divisions = Division::orderBy('created_at','desc')->WithoutAdminDivision()->get();
        return view('admin.division.manage',compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'division_name' => 'required',
            'zip_code' => 'sometimes',
            'price' => 'sometimes'
        ]);

        $validate['admin_id'] = Auth::guard('admin')->id();

        if( Division::create($validate) ) return redirect(route('division.index'))->with('success', 'Delivery Area division created');
        return redirect()->back()->with('error', 'Something went wrong, please try again');
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
    public function edit(Division $division)
    {
        return view('admin.division.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        $validate = $request->validate([
            'division_name' => 'required',
            'price' => 'sometimes',
            'zip_code' => 'sometimes'
        ]);

        return ( $division->update($validate) )?
            redirect()->route('division.index')->with('success', 'Updated Successfully'):
            redirect()->route('division.index')->with('error', 'Something went wrong') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        return $division->delete() ?
            redirect()->back()->with('info', ' Deleted Successfully') :
            redirect()->back()->with('error', 'Something went wrong') ;
    }

    public function DistrictByDivision(Division $division)
    {
        return District::where('division_id', $division->id)->AdminDistrict()->get();
    }
}
