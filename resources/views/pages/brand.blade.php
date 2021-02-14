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
                            <h3>Filter by Brand <span> | <a id="reset" style="font-size: 10px">reset</a> </span> </h3>
                            <div>
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link text-center" id="top" >Top</a>
                                    <a class="nav-link text-center" id="mid" >Mid</a>
                                    <a class="nav-link text-center" id="low" >Low</a>
                                </div>
                            </div>
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
                        {{ $brands->links() }}
{{--                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"><i class="fa fa-th" aria-hidden="true"></i></button>--}}
{{--                        <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"><i class="fa fa-bars" aria-hidden="true"></i></button>--}}
                    </div>


                    <div class="page_amount">
                        @php
                            $queryString = ltrim(strrchr(request()->getQueryString(), '='), '=');
                        @endphp
                        <p>Showing
                            @if(!empty($queryString) && $queryString != 1)
                            {{ ((int)$queryString-1) * $brands->perPage() }}
                            @else 1 @endif
                            –{{ (!empty($queryString)) ? $queryString* $brands->perPage() : $brands->perPage()}} of {{$brands->total()}} results</p>
                    </div>
                </div>
                <!--shop toolbar end-->
                <div id="TOP" class="row shop_wrapper">
                    @if( $brands->where('level', 1)->count() > 0 )
                    <div class="top" id="hide1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 " >
                                <h3 class="main_pro_img">TOP</h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($brands as $brand)
                            @if($brand->level == 1)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12" >
                                    <div class="single_product" >
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('brandProduct.show',$brand->brand_slug)}}"><img src="{{asset('storage/images/'.$brand->brand_image)}}" alt=""></a>
                                            <a class="secondary_img" href="{{route('brandProduct.show',$brand->brand_slug)}}"><img src="{{asset('storage/images/'.$brand->brand_image)}}" alt=""></a>
                                        </div>
                                        <div class="product_content grid_content">
                                            <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>
                                        </div>
                                        <div class="product_content list_content">
                                            <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                             @endif
                        @endforeach
                        </div>
                    </div>
                    @endif

                    @if($brands->where('level', 2)->count() > 0)
                        <div class="mid" id="hide2" >
                       <div class="row">
                        <div  id="MID" class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <h3 class="main_pro_img">MID</h3>
                        </div>
                       </div>

                       <div class="row">
                        @foreach($brands as $brand)
                        @if($brand->level == 2)

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 " >
                                <div class="single_product" >
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{route('brandProduct.show',$brand->brand_slug)}}"><img src="{{asset('storage/images/'.$brand->brand_image)}}" alt=""></a>
                                        <a class="secondary_img" href="{{route('brandProduct.show',$brand->brand_slug)}}"><img src="{{asset('storage/images/'.$brand->brand_image)}}" alt=""></a>


                                    </div>
                                    <div class="product_content grid_content">
                                        <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>
                                        {{--                                <p><a href="#">{{$brand->level}}</a></p>--}}
                                        {{--                                <div class="price_box">--}}
                                        {{--                                    <span class="current_price">$26.00</span>--}}
                                        {{--                                    <span class="old_price">$362.00</span>--}}
                                        {{--                                </div>--}}
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>
                                        {{--                                <p><a href="#">{{$brand->level}}</a></p>--}}
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
                        @endif
                    @endforeach
                    </div>
                   </div>
                    @endif

                    @if( $brands->where('level', 3)->count() > 0 )
                        <div class="low" id="hide3">
                        <div class="row">
                            <div id="LOW" class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <h3 class="main_pro_img">LOW</h3>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($brands as $brand)
                            @if($brand->level == 3)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 " >
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('brandProduct.show',$brand->brand_slug)}}"><img src="{{asset('storage/images/'.$brand->brand_image)}}" alt=""></a>
                                            <a class="secondary_img" href="{{route('brandProduct.show',$brand->brand_slug)}}"><img src="{{asset('storage/images/'.$brand->brand_image)}}" alt=""></a>


                                        </div>
                                        <div class="product_content grid_content">
                                            <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>
                                            {{--                                <p><a href="#">{{$brand->level}}</a></p>--}}
                                            {{--                                <div class="price_box">--}}
                                            {{--                                    <span class="current_price">$26.00</span>--}}
                                            {{--                                    <span class="old_price">$362.00</span>--}}
                                            {{--                                </div>--}}
                                        </div>
                                        <div class="product_content list_content">
                                            <h4 class="product_name"><a href="{{route('brandProduct.show',$brand->brand_slug)}}">{{$brand->brand_name}}</a></h4>
                                            {{--                                <p><a href="#">{{$brand->level}}</a></p>--}}
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
                            @endif
                        @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>

@endsection
