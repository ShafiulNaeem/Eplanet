<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Session;
use Auth;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $copons = Coupon::all();
        return view('admin.copon.manage',compact('copons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.copon.create');
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
            'coupon_code' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'max:255']
            
        ]);
        $congurd = Auth::guard('admin')->user()->id;
        
        $copons = new Coupon();
        
        $copons->admin_id = $congurd;
        $copons->coupon_code = $request->coupon_code ;
        $copons->amount = $request->amount ;
        $copons->status = $request->status ;

        $copons->save();
        Session::flash('success','Data Inserted Successfully');

        return redirect()->route('copon.index');
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
        $copons = Coupon::find($id);

        if(!is_null($copons)){
          
            return view('admin.copon.edit',compact('copons'));
        }
        
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
            'coupon_code' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'max:255']
            
        ]);
        $congurd = Auth::guard('admin')->user()->id;
        
        $copons = Coupon::find($id);
        
        $copons->admin_id = $congurd;
        $copons->coupon_code = $request->coupon_code ;
        $copons->amount = $request->amount ;
        $copons->status = $request->status ;

        $copons->save();
        Session::flash('success','Data Inserted Successfully');

        return redirect()->route('copon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $copons = Coupon::find($id);
        if(!is_null($copons)){

            $copons->delete();

            Session::flash('error','Data Deleted Successfully');

        return redirect()->route('copon.index');
        }

    }
}
