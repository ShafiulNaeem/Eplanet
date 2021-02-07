@extends('layouts.app_main')

@section('content')


    <div class="shop_area shop_reverse mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
                    <div id="TOP" class="row shop_wrapper">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <h3></h3>
                        </div>
                        @foreach($factoryViews as $factoryView)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                                    <div class="single_product card">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('topSale.show',$factoryView->admin_id)}}"><img src="{{asset('images/'.$factoryView->image)}}" alt=""></a>
                                            <a class="secondary_img" href="{{route('topSale.show',$factoryView->admin_id)}}"><img src="{{asset('images/'.$factoryView->image)}}" alt=""></a>
{{--                                            <div class="label_product">--}}
{{--                                                <span class="label_sale">Sale</span>--}}
{{--                                                <span class="label_new">New</span>--}}
{{--                                            </div>--}}

                                        </div>
                                        <div class="product_content grid_content">
{{--                                            <h4 class="product_name"><a href="{{route('brandProduct.show',$factoryView->description)}}">{{$brand->brand_name}}</a></h4>--}}
                                            <p><a href="{{route('topSale.show',$factoryView->admin_id)}}">{{$factoryView->description}}</a></p>
                                            {{--                                <div class="price_box">--}}
                                            {{--                                    <span class="current_price">$26.00</span>--}}
                                            {{--                                    <span class="old_price">$362.00</span>--}}
                                            {{--                                </div>--}}
                                        </div>
                                        <div class="product_content list_content">
{{--                                            <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>--}}
                                            <p><a href="{{route('topSale.show',$factoryView->admin_id)}}">{{$factoryView->description}}</a></p>
                                            {{--                                <div class="price_box">--}}
                                            {{--                                    <span class="current_price">$26.00</span>--}}
                                            {{--                                    <span class="old_price">$362.00</span>--}}
                                            {{--                                </div>--}}
                                            {{--                                <div class="product_desc">--}}
                                            {{--                                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>--}}
                                            {{--                                </div>--}}

                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>

    <!--slider area start-->
    <section class="slider_section">
{{--        <div class="slider_area owl-carousel">--}}
{{--            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/main1.jpg">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="slider_content">--}}
{{--                                <h1>Baby Products</h1>--}}
{{--                                <h2>Kids Fashion</h2>--}}
{{--                                <p>--}}
{{--								Valid till 15 Augest--}}
{{--							    </p> --}}
{{--                                <a href="shop.html">Shop Now </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/main1.jpg">--}}
{{--                  <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="slider_content">--}}
{{--                                <h1>Baby Products</h1>--}}
{{--                                <h2>Kids Fashion</h2>--}}
{{--                                <p>--}}
{{--								Valid till 15 Augest--}}
{{--							    </p> --}}
{{--                                <a href="shop.html">Shop Now </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/main1.jpg">--}}
{{--                  <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="slider_content">--}}
{{--                                <h1>Baby Products</h1>--}}
{{--                                <h2>Kids Fashion</h2>--}}
{{--                                <p>--}}
{{--								Valid till 15 Augest--}}
{{--							    </p> --}}
{{--                                <a href="shop.html">Shop Now </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!--slider area end-->





   <!-- Top Sales area Start -->

 <section class="related-section">
{{--     <div class="container-fluid">--}}
{{--         <div class="row">--}}
{{--             <div class="col-md-12">--}}
{{--                 <h3 class="text-dark text-center mb-20">Top Sales</h3>--}}
{{--             </div>--}}
{{--         </div>--}}

{{--         <div class="row">--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--     </div>--}}

<!--
     <div class="blog_pagination">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="pagination">
                         <ul>
                             <li class="current">1</li>
                             <li><a href="#">2</a></li>
                             <li><a href="#">3</a></li>
                             <li class="next"><a href="#">next</a></li>
                             <li><a href="#">&gt;&gt;</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
-->
 </section>

        <!-- Top Sales area End -->



   <!-- Top Product area Start -->

 <section class="related-section">
{{--     <div class="container">--}}
{{--         <div class="row">--}}
{{--             <div class="col-md-12">--}}
{{--                 <h3 class="text-dark text-center mb-20">Top Product</h3>--}}
{{--             </div>--}}
{{--         </div>--}}

{{--         <div class="row">--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--               <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--               <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--               <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--               <div class="col-md-3">--}}
{{--                 <div class="related_inner">--}}
{{--                     <div class="card">--}}
{{--                         <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                         <div class="card-body">--}}
{{--                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                             <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--     </div>--}}

<!--
     <div class="blog_pagination">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="pagination">
                         <ul>
                             <li class="current">1</li>
                             <li><a href="#">2</a></li>
                             <li><a href="#">3</a></li>
                             <li class="next"><a href="#">next</a></li>
                             <li><a href="#">&gt;&gt;</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
-->
 </section>

        <!-- Top Product area End -->


  <!-- Business area Start -->

 <section class="related-section">
{{--     <div class="container-fluid">--}}
{{--         <div class="row">--}}
{{--             <div class="col-md-6">--}}
{{--                 <div class="row">--}}
{{--                     <div class="col-md-12">--}}
{{--                         <h3 class="text-dark text-center mb-20">Show View</h3>--}}
{{--                     </div>--}}
{{--                     <div class="col-md-12">--}}
{{--                         <div class="related_inner">--}}
{{--                             <div class="card">--}}
{{--                                 <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                                 <div class="card-body">--}}
{{--                                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                     <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                                 </div>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--             <div class="col-md-6">--}}
{{--                 <div class="row">--}}
{{--                     <div class="col-md-12">--}}
{{--                         <h3 class="text-dark text-center mb-20">Factory View</h3>--}}
{{--                     </div>--}}
{{--                     <div class="col-md-12">--}}
{{--                         <div class="related_inner">--}}
{{--                             <div class="card">--}}
{{--                                 <a href="#"><img src="assets/img/category/cloth1.jpg" class="card-img-top" alt="..."></a>--}}
{{--                                 <div class="card-body">--}}
{{--                                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                                     <h5 class="card-title">Lorem ipsum.</h5>--}}
{{--                                 </div>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="related_inner">--}}
{{--<!--                    <a href="#"><img src="assets/img/slider/main1.jpg" class="card-img-top" alt="..."></a>-->--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio maiores mollitia atque obcaecati placeat harum temporibus tempore esse eos ducimus quisquam alias possimus ea accusamus laborum assumenda aspernatur, earum quae asperiores corporis optio, minus illo tempora sequi. Laboriosam, nam, ipsam. Maiores iure, rerum harum ratione commodi mollitia molestias sit sequi iste iusto. Totam, asperiores magnam commodi illo natus facere ducimus est ad aliquam minus illum ipsum aliquid modi perspiciatis vitae alias pariatur quod nulla similique aperiam eius eveniet accusantium fugit. Sit dolor aliquid consequatur error iure rem reiciendis quod ullam necessitatibus, modi facilis in dicta consectetur nemo voluptatibus aspernatur voluptates esse aliquam ea eius maiores quidem minima soluta ad, laboriosam. Praesentium quae fugiat deserunt molestias nam repellat eos. Officia, saepe. Incidunt quidem necessitatibus ipsum, veniam eos aperiam. Quasi dicta impedit nemo fugiat, amet optio dolorum cumque, nulla accusamus iste quisquam eveniet minus, sapiente consequuntur magni quis excepturi provident. Nesciunt unde blanditiis ullam perspiciatis iste qui similique ipsam nisi totam ut, deserunt molestiae doloremque dicta enim facilis sint atque possimus, repudiandae, temporibus quam asperiores quibusdam optio! Perspiciatis assumenda ex, accusamus nihil delectus vero non sapiente alias eaque eius amet, quia voluptatum molestiae rem quam reprehenderit quibusdam deserunt! At, explicabo amet tempore.--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--     </div>--}}

     <!--
     <div class="blog_pagination">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="pagination">
                         <ul>
                             <li class="current">1</li>
                             <li><a href="#">2</a></li>
                             <li><a href="#">3</a></li>
                             <li class="next"><a href="#">next</a></li>
                             <li><a href="#">&gt;&gt;</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
-->
 </section>

        <!-- Business area End -->


@endsection
