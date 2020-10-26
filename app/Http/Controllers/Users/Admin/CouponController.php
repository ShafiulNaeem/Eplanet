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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $copons = Coupon::all();
        return view('admin.copon.manage',compact('copons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.copon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'coupon_code' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'max:255']
        ]);

        $val['admin_id'] = Auth::guard('admin')->user()->id;
        $val['coupon_code'] = $request->coupon_code ;
        $val['amount'] = $request->amount ;
        $val['status'] = $request->status ;

        if(Coupon::create($val)){
            Session::flash('success','Data Inserted Successfully');

            return redirect()->route('coupon.index');
        } else {
            Session::flash('error','Something went wrong');

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
     * @param Coupon $coupon
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Coupon $coupon)
    {
        return view('admin.copon.edit',compact('coupon'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $val = $request->validate([
            'coupon_code' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'string', 'max:255']
        ]);

        $val['admin_id'] = Auth::guard('admin')->user()->id;
        $val['coupon_code'] = $request->coupon_code ;
        $val['amount'] = $request->amount ;
        $val['status'] = $request->status ;

        $coupon->update($val);
        Session::flash('success','Coupon updated Successfully');

        return redirect()->route('coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Coupon $coupon
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        Session::flash('error','Coupon Successfully Deleted');
        return redirect()->route('coupon.index');

    }
}
