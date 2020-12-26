<?php

namespace App\Http\Controllers\Users\Vendor;

use App\Http\Controllers\Controller;
use App\Models\ProductCertification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Helper\DeleteFile;

class ProductCertificationController extends Controller
{
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCertifications = ProductCertification::orderby('created_at','DESC')->get();
        return view('admin.vendor.productCertification.manage',compact('productCertifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendor.productCertification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,ProductCertification $productCertification)
    {
        $this->validate($request, array(
            'name' => 'required',
            'issued_by' => 'required',
            'business_scope' => 'required',
            // 'image' => 'pdf,csv,txt,docs',
        ));

        //$productCapacities = new ProductCapacity();

        $admin_id = Auth::guard('admin')->user()->id;
        $productCertification->admin_id = $admin_id;
        $productCertification->name = $request->name;
        $productCertification->issued_by = $request->issued_by;
        $productCertification->business_scope = $request->business_scope;

        if($request->hasFile('pdf')){
            $pdfs = request()->file('pdf');
            $filename = time() . '.' . $pdfs->getClientOriginalExtension();
            request()->pdf->move(public_path('documents'), $filename);
            $productCertification->pdf= $filename;
            $productCertification->save();
        };


        if($productCertification->save()){
            Session::flash('success','Product Certification Inserted Successfully');
            return redirect()->route('productCertification.index');
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
    public function edit(ProductCertification $productCertification)
    {
        return view('admin.vendor.productCertification.edit',compact('productCertification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCertification $productCertification)
    {
        $this->validate($request, array(
            'name' => 'required',
            'issued_by' => 'required',
            'business_scope' => 'required',
            // 'image' => 'pdf,csv,txt,docs',
        ));

        $productCertification->name = $request->name;
        $productCertification->issued_by = $request->issued_by;
        $productCertification->business_scope = $request->business_scope;

        if ( ! self::deleteFile( public_path('documents/' . $productCertification->pdf) ) )
        return redirect()->back()->with('error','Something went wrong');

        if($request->hasFile('pdf')){
            $pdfs = request()->file('pdf');
            $filename = time() . '.' . $pdfs->getClientOriginalExtension();
            request()->pdf->move(public_path('documents'), $filename);
            $productCertification->pdf= $filename;
            $productCertification->save();
        };


        
        if($productCertification->save()){
            Session::flash('success','Product Certification Updated Successfully');
            return redirect()->route('productCertification.index');
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
    public function destroy(ProductCertification $productCertification)
    {
        if ( ! self::deleteFile( public_path('documents/' . $productCertification->pdf) ) )
        return redirect()->back()->with('error','Something went wrong');

        $productCertification->delete();
        Session::flash('success','Product Certification Deleted Successfully');
        return redirect()->back();
    }
}
