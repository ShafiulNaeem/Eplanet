@extends('layouts.app_main')

@section('content')


<div class="shop_area shop_reverse mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_inner">
                        <div class="widget_list widget_categories">
                        
                        <div class="widget_list widget_filter">
                            <h3>Filter by Brand</h3>
                            <form action="#"> 
                              <input type="checkbox" name="brands"><label for="">TOP</label>  <br>  
                              <input type="checkbox" name="brandss"><label for="">MID</label>  <br>  
                              <input type="checkbox" name="brand"><label for="">LOW</label>    

                            </form> 
                        </div>
                        </div>
                    </div>
                     
                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"><i class="fa fa-th" aria-hidden="true"></i></button>
                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>

                  
                    <div class="page_amount">
                        <p>Showing 1–9 of 21 results</p>
                    </div>
                </div>
                <!--shop toolbar end-->
                <div class="row shop_wrapper">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <h3>TOP</h3>
                    </div>   
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <h3>MID</h3>
                    </div>   
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <h3>LOW</h3>
                    </div>   
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                    <span class="label_new">New</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$26.00</span>
                                    <span class="old_price">$362.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend/assets/img/artical1.jpg') }}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">Sale</span>
                                </div>
                                
                            </div>
                            <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                            </div>
                            <div class="product_content list_content">
                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                <p><a href="#">Fruits</a></p>
                                <div class="price_box">
                                    <span class="current_price">$32.00</span>
                                    <span class="old_price">$342.00</span>
                                </div>
                                <div class="product_desc">
                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>

@endsection