@extends('layouts.app_main')

@section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--product details start-->
    <div class="product_details mt-70 mb-70">
        <div class="container">
            @if( count($products) > 0 )
                @foreach($products as $product)
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="{{asset('images/'.$product->feature_image)}}" data-zoom-image="{{asset('images/'.$product->feature_image)}}" alt="{{$product->product_name}}">
                                </a>
                            </div>
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('images/'.$product->feature_image)}}" data-zoom-image="{{asset('images/'.$product->feature_image)}}">
                                            <img src="{{asset('images/'.$product->feature_image)}}" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    @foreach($product->productImages as $images)
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('images/'.$images->product_image)}}" data-zoom-image="{{asset('images/'.$images->product_image)}}">
                                            <img src="{{asset('images/'.$images->product_image)}}" alt="zo-th-1"/>
                                            <span></span>
                                        </a>

                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="">
                                <h3>Customer Video Reviews</h3>
                                @foreach($product->productVideos as $video)
                                <iframe width="400"  src="{{url('videos/'.$video->product_image)}}" frameborder="0" allowfullscreen>
                                </iframe>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product_d_right">

                                <div class=" product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                       <li><a href="#"><i class="icon-star"></i></a></li>
                                        <li class="review"><a href="#"> (customer review ) </a></li>
                                    </ul>

                                </div>
                                <div class="price_box">
                                    <span class="current_price">BDT: {{$product->product_price}}</span>


                                </div>
                                <div class="product_desc">
                                   <p>{{$product->product_description}}</p>
                                </div>
                                <div class="product_variant color">

                                    <h3>Product Name:{{$product->product_name}}</h3>
                                    @if($product->stock > 0)
                                        <h5>Available Product: {{$product->stock}}</h5>
                                    @else
                                        <h5>Available Product: Product Out of Stock</h5>
                                    @endif
                                    <label>color</label>
                                        @php
                                            $colors = $product->color;
                                            $printColor = explode(",",$colors);
                                        @endphp
                                    <style>

                                    </style>
                                    <ul>
                                        @foreach($printColor as $color)
                                        <li class="color1"><a style="background:{{$color}} !important;" class=""></a></li>
                                            @endforeach
                                    </ul>
                                </div>
                                <div class="product_variant quantity">

                                    <form role="form" action="{{route('pages.cart')}}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <label>quantity</label>
                                        <input min="1" max="100" name="quantity" value="1" type="number">
                                        <input  name="product_id" value="{{$product->id}}" hidden>
                                        <input  name="product_name" value="{{$product->product_name}}" hidden>
                                        <input  name="feature_image" value="{{$product->feature_image}}" hidden>
                                        <input  name="product_price" value="{{$product->product_price}}" hidden>
                                        <input  name="product_tax" value="{{$product->tax}}" hidden>
                                        @if($product->stock > 0)
                                            <button class="button" type="submit">add to cart</button>
                                        @else
                                            <button class="button btn-danger" disabled>Product Out of Stock</button>
                                        @endif
                                    </form>


                                </div>

                                <div class="product_meta">
                                    <span>Category: <a href="{{ route('cat.show', $product->category->id) }}">{{$product->category->category_name}}</a></span>
                                </div>
                            <div class=" product_d_action">
                                <ul>
                                    @if($product->status == 1)
                                        <li><a data-target="{{$product->id}}" id="add_to_wish_list" title="Add to wishlist">+ Add to Wishlist</a></li>
                                    @endif
                                    @if( $product->sold <= 0 )
                                        <li><a data-target="{{$product->id}}" id="express_wish"  title="Express wish" >Express wish</a></li>
                                    @endif

{{--                                    @if($product->admin->role == 2)--}}
                                        <li>
                                            <a href="{{route('topSale.show',$product->admin_id)}}" title="Add to wishlist">Vendor Details</a>
                                        </li>
{{--                                     @endif--}}
                                </ul>
                            </div>
                            <div class="priduct_social">
                                <ul>
                                    <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                    <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                    <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                    <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                    <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-danger">No Product</h2>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-65">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="product_d_inner">--}}
{{--                        <div class="product_info_button">--}}
{{--                            <ul class="nav" role="tablist">--}}
{{--                                <li >--}}
{{--                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane fade show active" id="info" role="tabpanel" >--}}
{{--                                <div class="product_info_content">--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>--}}
{{--                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="sheet" role="tabpanel" >--}}
{{--                                <div class="product_d_table">--}}
{{--                                   <form action="#">--}}
{{--                                        <table>--}}
{{--                                            <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="first_child">Compositions</td>--}}
{{--                                                    <td>Polyester</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="first_child">Styles</td>--}}
{{--                                                    <td>Girly</td>--}}
{{--                                                </tr>--}}
{{--                                                <tr>--}}
{{--                                                    <td class="first_child">Properties</td>--}}
{{--                                                    <td>Short Dress</td>--}}
{{--                                                </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                                <div class="product_info_content">--}}
{{--                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-pane fade" id="reviews" role="tabpanel" >--}}
{{--                                <div class="reviews_wrapper">--}}
{{--                                    <h2>1 review for Donec eu furniture</h2>--}}
{{--                                    <div class="reviews_comment_box">--}}
{{--                                        <div class="comment_thmb">--}}
{{--                                            <img src="{{ asset('frontend/assets/img/blog/comment2.jpg') }}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="comment_text">--}}
{{--                                            <div class="reviews_meta">--}}
{{--                                                <div class="star_rating">--}}
{{--                                                    <ul>--}}
{{--                                                        <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                                       <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                                       <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                                       <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                                       <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <p><strong>admin </strong>- September 12, 2018</p>--}}
{{--                                                <span>roadthemes</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <div class="comment_title">--}}
{{--                                        <h2>Add a review </h2>--}}
{{--                                        <p>Your email address will not be published.  Required fields are marked </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_ratting mb-10">--}}
{{--                                       <h3>Your rating</h3>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                               <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                               <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                               <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                               <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="product_review_form">--}}
{{--                                        <form action="#">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label for="review_comment">Your review </label>--}}
{{--                                                    <textarea name="comment" id="review_comment" ></textarea>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-lg-6 col-md-6">--}}
{{--                                                    <label for="author">Name</label>--}}
{{--                                                    <input id="author"  type="text">--}}

{{--                                                </div>--}}
{{--                                                <div class="col-lg-6 col-md-6">--}}
{{--                                                    <label for="email">Email </label>--}}
{{--                                                    <input id="email"  type="text">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <button type="submit">Submit</button>--}}
{{--                                         </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!--product info end-->

   <!-- related-section area Start -->

<section class="related-section">
    <div class="product_area ">
        <div class="container">
            <div class="product_container">
                @foreach($results as $mainRe)
                    @if(isset($mainRe['category']['products']))
                        <div class="row">
                            <div class="col-md-12 float-left"><h2 class="float-left">{{$mainRe['category']['category_name']}}</h2></div>

                            <div class="col-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                                        <div class="product_carousel product_column5 owl-carousel">
                                            @foreach($mainRe['category']['products'] as $index => $ffgr)
                                                <div class="product_items card">
                                                    <article class="single_product">
                                                        <figure>
                                                            <div class="single_banner">
                                                                <div class="banner_thumb">
                                                                    <a href="{{route('pages.show',$mainRe['category']['products'][$index]['id'])}}">
                                                                        <img src="{{url('images',$mainRe['category']['products'][$index]['feature_image'])}}" alt="{{$mainRe['category']['products'][$index]['product_name']}}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <figcaption class="product_content">
                                                                <h4 class="product_name"><a href="{{route('pages.show',$mainRe['category']['products'][$index]['id'])}}">{{$mainRe['category']['products'][$index]['product_name']}}</a></h4>
                                                                <div class="price_box">
                                                                    <span class="current_price">$ {{$mainRe['category']['products'][$index]['product_price']}}</span>


                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </article>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

      <!-- related-section area End -->

@endsection
