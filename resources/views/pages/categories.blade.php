@extends('layouts.app_main')

@section('content')

    <!-- category area Start -->

    <section class="category">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_area owl-carousel ">
                        @foreach($categories as $category)
                        <div class="single_slider d-flex align-items-center div_radis" data-bgimg="{{asset('images/'.$category->sub_category_image)}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="slider_content">
                                            <h1 class="text-success">{{$category->category->category_name}}</h1>
                                            <h2 class="text-white">{{$category->subcategory_name}} </h2>
                                            <p class="text-white">
                                                {{\Carbon\Carbon::parse($category->created_at)->format('M d Y')}}
                                            </p>
                                            <a href="{{route('subcat.show',$category->id)}}">Shop Now </a>
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

    </section>

    <!-- category area End -->

    <!--  Category bottom Code Start     -->

    <section class="category_bottom mt-4 mb-4">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-2">
                        <div class="category-inner">
                            <a href="{{route('subcat.show',$category->id)}}"><img src="{{asset('images/'.$category->sub_category_image)}}" alt=""></a>
                            <a href="{{route('subcat.show',$category->id)}}">
                                <p>{{$category->subcategory_name}}</p>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- related-section area Start -->

    <section class="related-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3  class="text-dark text-center mb-20">Related Product</h3>
                </div>
            </div>

            @foreach($categories as $category)
            <div class="row">
                <div class="col-md-10">
                    <h3>{{$category->subcategory_name}}</h3>
                </div>
                <div class="col-md-2">
                    <h2><a href="{{route('subcat.show',$category->id)}}">View more</a></h2>
                </div>
            </div>
            <div class="row">
                @foreach($category->productWithStatus as $product)
                    <div class="col-md-3">
                        <div class="right-category">
                            <div class="card">
                                <a href="{{route('pages.show',$product->id)}}"><img src="{{asset('images/'.$product->feature_image)}}" class="card-img-top" alt="{{$product->product_name}}"></a>
                                <div class="card-body">
                                    <a href="{{route('pages.show',$product->id)}}"><p>{{$product->product_name}}</p></a>
                                    <div class="price_box">
                                        <div class=" product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li class="review"><a href="#"> (customer review )</a></li>
                                            </ul>
                                        </div>
                                        <span class="current_price">BDT {{$product->product_price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @endforeach
      {{ $categories->links() }}
        </div>

{{--        <div class="blog_pagination">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="pagination">--}}
{{--                           <ul>--}}
{{--                                <li class="current">1</li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                               <li><a href="#">3</a></li>--}}
{{--                                <li class="next"><a href="#">next</a></li>--}}
{{--                                <li><a href="#">&gt;&gt;</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>

    <!-- related-section area End -->

@endsection
