@extends('layouts.app_main')

@section('content')

<div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                   <h3>Wishlist</h3>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<section class="wishlist_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="wishlist_area">
                    <div class="container">   
                        <form action="#"> 
                            <div class="row">
                                <div class="col-12">
                                    <div class="table_desc wishlist">
                                        <div class="cart_page table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">Delete</th>
                                                        <th class="product_thumb">Image</th>
                                                        <th class="product_name">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product_quantity">Stock Status</th>
                                                        <th class="product_total">Add To Cart</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       <td class="product_remove"><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                                                        <td class="product_thumb"><a href="#"><img src="{{ asset('frontend/assets/img/1.jpg') }}" alt=""></a></td>
                                                        <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                        <td class="product-price">£65.00</td>
                                                        <td class="product_quantity">In Stock</td>
                                                        <td class="product_total"><a href="#">Add To Cart</a></td>
            
            
                                                    </tr>
            
                                                    <tr>
                                                       <td class="product_remove"><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                                                        <td class="product_thumb"><a href="#"><img src="{{ asset('frontend/assets/img/1.jpg') }}" alt=""></a></td>
                                                        <td class="product_name"><a href="#">Handbags justo</a></td>
                                                        <td class="product-price">£90.00</td>
                                                        <td class="product_quantity">In Stock</td>
                                                        <td class="product_total"><a href="#">Add To Cart</a></td>
            
            
                                                    </tr>
                                                    <tr>
                                                       <td class="product_remove"><a href="#" class="btn btn-danger btn-sm">Delete</a></td>
                                                        <td class="product_thumb"><a href="#"><img src="{{ asset('frontend/assets/img/1.jpg') }}" alt=""></a></td>
                                                        <td class="product_name"><a href="#">Handbag elit</a></td>
                                                        <td class="product-price">£80.00</td>
                                                        <td class="product_quantity">In Stock</td>
                                                        <td class="product_total"><a href="#">Add To Cart</a></td>
            
            
                                                    </tr>
            
                                                </tbody>
                                            </table>   
                                        </div>  
            
                                    </div>
                                 </div>
                             </div>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection