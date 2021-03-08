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
                            <li><a href="{{ route('promotion.category') }}">নবাবীহাট</a></li>
                            <li>{{$event[0]->event_name}} || {{$category[0]->category_name}}</li>
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
                <div class="col-md-12 text-center">
                    <h4 style="padding: 5px">{{$event[0]->event_name}} || {{$category[0]->category_name}}</h4>
                </div>
                @php
                    $price = 0;
                    $subtotal = 0;
                    $total = 0;
                @endphp
                <div class="col-md-12">
                    <div class="right-main-cat">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="right-category">
                                        <div class="card">
                                            <div class="zoom-In">
                                                <a href="{{route('pages.show',$product->products->product_slug)}}"><img src="{{asset('storage/images/' .$product->products->feature_image)}}" class="card-img-top" alt="{{$product->products->product_name}}"></a>
                                            </div>
                                            <div class="card-body text-left">
                                                <a href="{{route('pages.show',$product->products->product_slug)}}"><p>{{$product->products->product_name}}</p></a>

                                                <div class="price_box text-left">
                                                    @php
                                                        $price = $product->products->product_price;
                                                        $subtotal = ($price * $product->discount)/100;
                                                        $total = $price - $subtotal;
                                                    @endphp
                                                    <a href="{{route('pages.show',$product->products->product_slug)}}">
                                                        <p class="text-success">BDT : {{$total}} </p>
                                                    </a>
{{--                                                    ৳--}}
                                                    <p><strike class="current_price">BDT: {{$product->products->product_price}} </strike> -  {{$product->discount}}%</p>
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
            {{--            <div class="container">--}}
            {{--                <div class="row">--}}
            {{--                    <div class="col-12">--}}
            {{--                        <div class="pagination">--}}

            {{--                            {{$products->links()}}--}}
            {{--                            --}}{{--                        <ul>--}}
            {{--                            --}}{{--                            <li class="current">{{$products->links()}}</li>--}}
            {{--                            --}}{{--                            <li><a href="#">2</a></li>--}}
            {{--                            --}}{{--                            <li><a href="#">3</a></li>--}}
            {{--                            --}}{{--                            <li class="next"><a href="#">next</a></li>--}}
            {{--                            --}}{{--                            <li><a href="#">&gt;&gt;</a></li>--}}
            {{--                            --}}{{--                        </ul>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>

    </section>

    <!-- category area End -->


@endsection


