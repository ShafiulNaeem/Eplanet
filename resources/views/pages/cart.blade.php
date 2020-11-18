@extends('layouts.app_main')

@section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--shopping cart area start -->
    @php
        $total=0;
        $totalTax=0;
    @endphp
    <div class="shopping_cart_area mt-70">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                @php $addTocarts = Session::get('cart'); @endphp
                                @if(Session::has('cart') && count( Session::get('cart') ) > 0)
                                    <table>
                                    <thead>
                                    <tr>
                                        <th class="product_remove">Delete</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                        <th class="product_total">Update</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($addTocarts as $index => $addTocart)

                                        <tr>
                                            @php
                                                 $total += $addTocart['quantity'] * $addTocart['product_price'];
$totalTax += $addTocart['product_tax'];
                                            @endphp
                                            <td class="product_remove">
                                                <form action="{{route('cart.destroy',$addTocart['id'])}}" method="post">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img src="{{asset('images/'.$addTocart['feature_image'])}}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{$addTocart['product_name']}}</a></td>
                                            <td class="product-price">${{$addTocart['product_price']}}</td>

                                             <form action="{{route('cart.update',$addTocart['id'])}}" method="post">
                                                 @csrf
                                                 @method("PUT")
                                                <td class="product_quantity"><label>Quantity</label>
                                                    <input name="quantity" value="{{$addTocart['quantity']}}" type="number">
                                                </td>
                                                <td class="product_total">${{$addTocart['quantity'] * $addTocart['product_price']}}</td>
                                                <td class="product_total">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </td>

                                             </form>
                                        </tr>
                                            @endforeach

                                    </tbody>
                                </table>
                                @else
                                    <h3 class="text-info text-center">Cart Empty</h3>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
            @if(count( Session::get('cart') ) > 0)
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">BDT {{ $total }}</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"> BDT {{ $total + (($total/$totalTax)/100) }}</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">BDT {{ $total + (($total/$totalTax)/100) }}</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="Checkout.html">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <!--coupon code area end-->
        </div>
    </div>
    <!--shopping cart area end -->

@endsection
