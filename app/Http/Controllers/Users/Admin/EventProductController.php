<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventProducts = EventProduct::with(['product','event'])->EventProductWithAdminOwner()->get();
         //dd($eventProducts);
        return view('admin.eventProduct.manage',compact('eventProducts'));
    }

    public function allEventProduct()
    {
        $eventProducts = EventProduct::with(['product','event'])->EventProductWithOutAdminOwner()->get();
        //dd($eventProducts);
        return view('admin.eventProduct.manage',compact('eventProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::AdminProduct()->GetActive()->get();
        $events = Event::EventWithAdminOwner()->GetActive()->get();
         //dd($events);

        return view('admin.eventProduct.create',compact('products','events'));
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
            'product_id'=> 'required',
            'event_id'=> 'required',

        ]);

        $validate['admin_id'] = Auth::guard('admin')->id();

        if( EventProduct::create($validate) ) return redirect(route('eventProduct.index'))->with('success', 'Product Event Category created');
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
    public function edit(EventProduct $eventProduct)
    {
        $products = Product::AdminProduct()->GetActive()->get();
        $events = Event::EventWithAdminOwner()->GetActive()->get();
        return view('admin.eventProduct.edit',compact('eventProduct', 'products','events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventProduct $eventProduct)
    {
        $validate = $request->validate([
            'product_id'=> 'required',
            'event_id'=> 'required',

        ]);

        return ( $eventProduct->update($validate) )?
            redirect()->route('eventProduct.index')->with('success', 'Updated Successfully'):
            redirect()->route('eventProduct.index')->with('error', 'Something went wrong') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventProduct $eventProduct)
    {
        return $eventProduct->delete() ?
            redirect()->back()->with('info', ' Delete Successfully') :
            redirect()->back()->with('error', 'Delete Unsuccessful') ;
    }
}
