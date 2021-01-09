<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cart = Session::get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                $request->product_id => [
                    "id" => $request->product_id,
                    "product_name" => $request->product_name,
                    "quantity" => $request->quantity,
                    "product_price" => $request->product_price,
                    "feature_image" => $request->feature_image,
                    "product_tax" => $request->product_tax,
                ]
            ];
            Session::put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity']+= $request->quantity;
            Session::put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$request->product_id] = [
            "id" => $request->product_id,
            "product_name" => $request->product_name,
            "quantity" => $request->quantity,
            "product_price" => $request->product_price,
            "feature_image" => $request->feature_image,
            "product_tax" => $request->product_tax,
        ];

        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id) {
            $cart = Session::get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                Session::put('cart', $cart);
            }
            //session()->flash('success', 'Product removed successfully');
            return redirect()->back()->with('success', 'Product  Showed successfully!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = Session::get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            Session::put('cart', $cart);
            return redirect()->back()->with('success', 'Cart  updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->id) {
            $cart = Session::get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                Session::put('cart', $cart);
            }
            //session()->flash('success', 'Product removed successfully');
            return redirect()->back()->with('success', 'Product  removed successfully!');
        }
    }

    public function getCoupon(Request $request)
    {
        //dd($request->all());
        if($request->coupon_code != null)
        {
            $coupons = Coupon::where('coupon_code', 'LIKE','%'.$request->coupon_code.'%')->GetActive()->get();
            $shipping =ShippingAddress::where(['user_id' => Auth::user()->id])->first();
            //dd($coupons);
            return view('pages.checkout',compact('coupons','shipping'));
        }
    }
}
