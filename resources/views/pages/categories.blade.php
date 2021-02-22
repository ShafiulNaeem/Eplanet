@extends('layouts.app_main')

@section('content')

    <!-- category area Start -->

    <section class="category">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider_area owl-carousel ">
                        @foreach($categories as $category)
                        <div class="single_slider d-flex align-items-center div_radis" data-bgimg="{{asset('storage/images/' .$category->sub_category_image)}}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="slider_content">
                                            <h1 class="text-success">{{$category->category->category_name}}</h1>
                                            <h2 class="text-white">{{$category->subcategory_name}} </h2>
                                            <p class="text-white">
                                                {{\Carbon\Carbon::parse($category->created_at)->format('M d Y')}}
                                            </p>
                                            <a href="{{route('subcat.show',$category->subcategory_slug)}}">Shop Now </a>
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
                            <a href="{{route('subcat.show',$category->subcategory_slug)}}"><img src="{{asset('storage/images/' .$category->sub_category_image)}}" alt=""></a>
                            <a href="{{route('subcat.show',$category->subcategory_slug)}}">
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
                @if( count($category->productWithStatus) > 0 )
                    <div class="row">
                        <div class="col-md-10">
                            <h3>{{$category->subcategory_name}}</h3>
                        </div>
                        <div class="col-md-2">
                            <h2><a href="{{route('subcat.show',$category->subcategory_slug)}}">View more</a></h2>
                        </div>
                    </div>
                    <div class="row">
                    @foreach($category->productWithStatus as $product)
                        <div class="col-md-3">
                            <div class="right-category">
                                <div class="card">
                                    <div class="zoom-In">
                                        <a href="{{route('pages.show',$product->product_slug)}}"><img src="{{asset('storage/images/' .$product->feature_image)}}" class="card-img-top" alt="{{$product->product_name}}"></a>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{route('pages.show',$product->product_slug)}}"><p>{{$product->product_name}}</p></a>
                                        <div class="price_box text-center">
                                            <a href="{{route('pages.show',$product->product_slug)}}" class="float-right">
                                                <p>Size : {{ $product->size }}</p>
                                            </a>
                                            <span class="current_price float-left">BDT {{ round($product->product_price) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @endif
            @endforeach
            {{ $categories->links() }}
        </div>
    </section>

    <!-- related-section area End -->

@endsection
