@extends('layouts.app_main')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="background-color: darkslategray">
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <div class="breadcrumb_content_new text-left" >
                        <ul style="color: #cfcfcf; font-weight: 600;">
                            <li><a href="{{ route('home') }}">home</a></li>
                                <li><a href="{{route('brands.show')}}">All Brand</a></li>
                                <li>{{$brands->brand_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="right-main-cat">

                        <div class="row">

                            <div class="col-md-12 ">
                                <div class="sub_head">
                                        <h4>All {{$brands->brand_name}} Collection</h4>
                                </div>
                            </div>

                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="right-category">
                                        <div class="card">
                                            <div class="zoom-In">
                                                <a href="{{route('pages.show',$product->product_slug)}}"><img src="{{asset('storage/images/'.$product->feature_image)}}" class="card-img-top" alt="{{$product->product_name}}"></a>
                                            </div>
                                            <div class="card-body">
                                                <div class="pro_des">
                                                    <a class="float-left" href="{{route('pages.show',$product->product_slug)}}"><p>{{$product->product_name}}</p></a>
                                                    <div class="float-right product_ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="price_box text-center">
                                                    <p class="float-right">Model : {{ $product->model }}</p>
                                                    <span class="current_price float-left">BDT {{ round($product->product_price) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="blog_pagination">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pagination">

                            {{$products->links()}}
                            {{--                        <ul>--}}
                            {{--                            <li class="current">{{$products->links()}}</li>--}}
                            {{--                            <li><a href="#">2</a></li>--}}
                            {{--                            <li><a href="#">3</a></li>--}}
                            {{--                            <li class="next"><a href="#">next</a></li>--}}
                            {{--                            <li><a href="#">&gt;&gt;</a></li>--}}
                            {{--                        </ul>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- category area End -->

    <!-- related-section area Start -->

{{--    <section class="related-section">--}}
{{--        <div class="product_area ">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <h3  class="text-dark text-center mb-20">Related Product</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="product_container">--}}
{{--                    @foreach($results as $mainRe)--}}
{{--                        @if(isset($mainRe['category']['products']))--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12"><h2 class="float-left">{{$mainRe['category']['category_name']}}</h2></div>--}}

{{--                                <div class="col-12">--}}
{{--                                    <div class="tab-content">--}}
{{--                                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">--}}
{{--                                            <div class="product_carousel product_column5 owl-carousel">--}}
{{--                                                @foreach($mainRe['category']['products'] as $index => $ffgr)--}}
{{--                                                    <div class="product_items">--}}
{{--                                                        <article class="single_product">--}}
{{--                                                            <figure>--}}
{{--                                                                <div class="single_banner">--}}
{{--                                                                    <div class="banner_thumb">--}}
{{--                                                                        <a href="{{route('pages.show',$mainRe['category']['products'][$index]['id'])}}">--}}
{{--                                                                            <img src="{{asset('storage/images/'.$mainRe['category']['products'][$index]['feature_image'])}}" alt="{{$mainRe['category']['products'][$index]['product_name']}}">--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <figcaption class="product_content">--}}
{{--                                                                    <h4 class="product_name"><a href="{{route('pages.show',$mainRe['category']['products'][$index]['id'])}}">{{$mainRe['category']['products'][$index]['product_name']}}</a></h4>--}}
{{--                                                                    <div class="price_box">--}}
{{--                                                                        <span class="current_price">$ {{$mainRe['category']['products'][$index]['product_price']}}</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </figcaption>--}}
{{--                                                            </figure>--}}
{{--                                                        </article>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- related-section area End -->

@endsection
