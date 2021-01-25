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


    <!-- Top Sales area Start -->

    <section class="related-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-dark text-center mb-20">Top Sales</h3>
                </div>
            </div>

            <div class="row">
                @foreach($productSales as $productSale)
                    @foreach($productSale->productsWithSold as $product)
                        <div class="col-md-3">
                            <div class="related_inner">
                                <div class="card">
                                    <a href="{{route('pages.show',$product->id)}}">
                                        <img src="{{url('images',$product->feature_image)}}" alt="{{$product->product_name}}">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-text"><a href="{{route('pages.show',$product->id)}}">{{$product->product_name}}</a></h5>
                                        <p class="card-title">BDT: {{$product->product_price}}</p>
                                    </div>
                                </div>
                            </div>
                         </div>
                    @endforeach
                @endforeach
            </div>
        </div>

    </section>

    <!-- Top Sales area End -->



    <!-- Top Product area Start -->

    <section class="related-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-dark text-center mb-20">Top Product</h3>
                </div>
            </div>

            <div class="row">
                @foreach($productTops as $productSale)
                    @foreach($productSale->productsWithTop as $product)
                        <div class="col-md-3">
                            <div class="related_inner">
                                <div class="card">
                                    <a href="{{route('pages.show',$product->id)}}">
                                        <img src="{{url('images',$product->feature_image)}}" alt="{{$product->product_name}}">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-text"><a href="{{route('pages.show',$product->id)}}">{{$product->product_name}}</a></h5>
                                        <p class="card-title">BDT: {{$product->product_price}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

    </section>

    <!-- Top Product area End -->


    <!-- Business area Start -->

    <section class="related-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-dark text-center mb-20">Show View</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="related_inner">
                                @foreach($showViews as $showView)
                                    <div class="card">
                                        <a href="#"><img src="{{url('images',$showView->image)}}" /></a>
                                        <div class="card-body">
                                            <p class="card-text">{{$showView->description}}</p>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-dark text-center mb-20">Factory View</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="related_inner">
                                @foreach($factoryViews as $factoryView)
                                    <div class="card">
                                        <a href="#"><img src="{{url('images',$factoryView->image)}}" /></a>
                                        <div class="card-body">
                                            <p class="card-text">{{$factoryView->description}}</p>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
{{--                    <div class="related_inner">--}}
{{--                        <!--                    <a href="#"><img src="assets/img/slider/main1.jpg" class="card-img-top" alt="..."></a>-->--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio maiores mollitia atque obcaecati placeat harum temporibus tempore esse eos ducimus quisquam alias possimus ea accusamus laborum assumenda aspernatur, earum quae asperiores corporis optio, minus illo tempora sequi. Laboriosam, nam, ipsam. Maiores iure, rerum harum ratione commodi mollitia molestias sit sequi iste iusto. Totam, asperiores magnam commodi illo natus facere ducimus est ad aliquam minus illum ipsum aliquid modi perspiciatis vitae alias pariatur quod nulla similique aperiam eius eveniet accusantium fugit. Sit dolor aliquid consequatur error iure rem reiciendis quod ullam necessitatibus, modi facilis in dicta consectetur nemo voluptatibus aspernatur voluptates esse aliquam ea eius maiores quidem minima soluta ad, laboriosam. Praesentium quae fugiat deserunt molestias nam repellat eos. Officia, saepe. Incidunt quidem necessitatibus ipsum, veniam eos aperiam. Quasi dicta impedit nemo fugiat, amet optio dolorum cumque, nulla accusamus iste quisquam eveniet minus, sapiente consequuntur magni quis excepturi provident. Nesciunt unde blanditiis ullam perspiciatis iste qui similique ipsam nisi totam ut, deserunt molestiae doloremque dicta enim facilis sint atque possimus, repudiandae, temporibus quam asperiores quibusdam optio! Perspiciatis assumenda ex, accusamus nihil delectus vero non sapiente alias eaque eius amet, quia voluptatum molestiae rem quam reprehenderit quibusdam deserunt! At, explicabo amet tempore.--}}

{{--                    </div>--}}
                </div>
            </div>

        </div>

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
