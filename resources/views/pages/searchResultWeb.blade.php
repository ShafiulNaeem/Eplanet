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

            @foreach($categories as $category)
                @if( count($category->productWithStatus) > 0 )
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
