<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use App\Models\Division;
use App\Models\SubCity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCities = SubCity::orderBy('sub_city_name','asc')->with(['division','district','city'])->AdminSubCity()->get();
//        dd($subCities[0]->city->city_name);
        return view('admin.subCity.manage',compact('subCities'));
    }

    public function allSubCity()
    {
        $subCities = SubCity::orderBy('sub_city_name','asc')->with(['division','district','city'])->WithoutAdminSubCity()->get();
//        dd($subCities[0]->city->city_name);
        return view('admin.subCity.manage',compact('subCities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::orderBy('division_name','asc')->AdminDivision()->get();
        return view('admin.subCity.create',compact('divisions'));
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
            'district_id' => 'required',
            'division_id' => 'required',
            'city_id' => 'required',
            'sub_city_name' => 'required'

        ]);

        $validate['admin_id'] = Auth::guard('admin')->id();

        if( SubCity::create($validate) ) return redirect(route('subCity.index'))->with('success', 'Delivery Area Sub City created');
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
    public function edit(SubCity $subCity)
    {
        $divisions = Division::orderBy('division_name','asc')->AdminDivision()->get();
        $districts = District::with('division')->where('division_id',$subCity->division_id)->AdminDistrict()->get();
        $cities = City::with('district')->where('district_id',$subCity->district_id)->AdminCity()->get();
        //dd($cities);

        return view('admin.subCity.edit',compact('subCity','divisions','districts','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCity $subCity)
    {
        $validate = $request->validate([
            'district_id' => 'required',
            'division_id' => 'required',
            'city_id' => 'required',
            'sub_city_name' => 'required'

        ]);

        return ( $subCity->update($validate) )?
            redirect()->route('subCity.index')->with('success', 'Updated Successfully'):
            redirect()->route('subCity.index')->with('error', 'Something went wrong') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCity $subCity)
    {
        return $subCity->delete() ?
            redirect()->back()->with('info', ' Deleted Successfully') :
            redirect()->back()->with('error', 'Something went wrong') ;
    }
}
