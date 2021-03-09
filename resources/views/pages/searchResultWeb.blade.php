@extends('layouts.app_main')

@section('content')


    <!-- related-section area Start -->

    <section class="related-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3  class="text-dark text-center mb-20">Search Result</h3>
                </div>
            </div>

{{--            @foreach($categories as $category)--}}
                @if( count($products) > 0 )
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-3">
                                <div class="right-category">
                                    <div class="card">
                                        <div class="zoom-In">
                                            <a href="{{route('pages.show',$product->product_slug)}}"><img src="{{assetImageAndVideo('images') .$product->feature_image}}" class="card-img-top" alt="{{$product->product_name}}"></a>
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
                @endif
{{--            @endforeach--}}
            {{ $products->links() }}
        </div>
    </section>

    <!-- related-section area End -->

@endsection
