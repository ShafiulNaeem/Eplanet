<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index()
    {
        $shipping_data = ['shipping' => ShippingAddress::where(['user_id' => Auth::user()->id])->first()];
        return view('pages.checkout', $shipping_data);
    }


    public function checkout(Request $request)
    {
        $request->request->remove('_token');
        $request->request->add(['user_id' => Auth::user()->id]);
        $previous = ShippingAddress::where(['user_id' => Auth::user()->id])->first();

        if( $previous == null ) ShippingAddress::create($request->all());
        else ShippingAddress::where(['user_id' => Auth::user()->id])->update($request->all());


        foreach (Session::get('cart') as $cart){
            $order = new Order();
            $order->product_id = $cart['id'];
            $order->user_id = Auth::user()->id;
            $order->unique_id = '#OR' . Str::random(10).'#';
            $order->quantity = $cart['quantity'];
            $order->save();
            $order = null;
        }
        Session::forget('cart');

        return redirect()->route('checkout.confirm')->with(Session::flash('success','Product Inserted Successfully'));
    }


    public function checkoutConfirm()
    {
        return view('pages.checkout_confirm');
    }
}
