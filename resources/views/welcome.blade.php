@extends('layouts.app_main')
@section('content')
<!--slider area start-->
<section class="slider_section">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/assets/img/slider/main1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider_content">
                            <h1>Baby Products</h1>
                            <h2>Kids Fashion</h2>
                            <p>
                                Valid till 15 Augest
                            </p>
                            <a href="shop.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/assets/img/slider/main1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider_content">
                            <h1>Baby Products</h1>
                            <h2>Kids Fashion</h2>
                            <p>
                                Valid till 15 Augest
                            </p>
                            <a href="shop.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/assets/img/slider/main1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider_content">
                            <h1>Baby Products</h1>
                            <h2>Kids Fashion</h2>
                            <p>
                                Valid till 15 Augest
                            </p>
                            <a href="shop.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--  Section Discover slider Start  -->

<section class="discover-section">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="discover-title">
                    <h3>Discover</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                <div class=" discover-carasul owl-carousel owl-theme">
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover1.png') }}" alt=""></a>
                            </div>
                            <p>Shop in 7 language</p>
                        </div>

                    </div>
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover3.png') }}" alt=""></a>
                            </div>
                            <p>Shop in 60 countries</p>
                        </div>

                    </div>
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover2.png') }}" alt=""></a>
                            </div>
                            <p>Deals and promotions</p>
                        </div>

                    </div>

                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover4.png') }}" alt=""></a>
                            </div>
                            <p>secure payment</p>
                        </div>

                    </div>
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover5.png') }}" alt=""></a>
                            </div>
                            <p>Estimated import fees</p>
                        </div>

                    </div>
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover6.png') }}" alt=""></a>
                            </div>
                            <p>Estimated import fees</p>
                        </div>

                    </div>
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover7.png') }}" alt=""></a>
                            </div>
                            <p>Track your package</p>
                        </div>

                    </div>
                    <div class="item">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="shop.html"><img src="{{ asset('frontend/assets/img/icon/discover8.png') }}" alt=""></a>
                            </div>
                            <p>Estimated import fees</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Discover slider End  -->


<!--  Section Product slider Start  -->


<div class="product_area ">
    <div class="container">
        <div class="product_container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Categories</h2>
                </div>
            </div>
            <div class="row second-product">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="product-details.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2>Discover</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2>Best Sellers</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2>Industry Items</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2>Electronic Items</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2>Men's Items</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2>Women's Items</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2>Baby Items</h2>
                </div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Aliquam Consequat</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Etiam Gravida</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$56.00</span>
                                                    <span class="old_price">$322.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                    <span class="old_price">$262.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$48.00</span>
                                                    <span class="old_price">$257.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="single_banner">
                                                <div class="banner_thumb">
                                                    <a href="shop.html"><img src="{{ asset('frontend/assets/img/slider/main1.jpg') }}" alt=""></a>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$26.00</span>
                                                    <span class="old_price">$362.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--product area end-->
@endsection
