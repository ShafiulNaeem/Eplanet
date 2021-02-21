@extends('layouts.app_main')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="background-color: darkslategray">
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <div class="breadcrumb_content_new  text-left" >
                        <ul style="color: #cfcfcf; font-weight: 600;">
                            <li><a href="{{ route('home') }}">home</a></li>
                            @foreach($products as $product)
                                @if($product->brand_id != null)
                                    <li><a href="{{ route('brandProduct.show', $product->brand->brand_slug) }}">{{$product->brand->brand_name}}</a></li>
                                @endif
                                @if($product->category_id != null)
                                        <li><a href="{{ route('cat.show',$product->category->category_slug) }}">{{$product->category->category_name}}</a></li>
                                    @endif
                                @if($product->sub_categories_id != null)
                                        <li><a href="{{ route('subcat.show',$product->subcategory->subcategory_slug) }}">{{$product->subcategory->subcategory_name}}</a></li>
                                    @endif
                                @if($product->secondary_sub_categories_id != null)
                                        <li><a href="{{ route('secondary_sub.show',$product->secondsub->secondary_subcategory_slug) }}">{{$product->secondsub->secondary_subcategory_name}}</a></li>
                                    @endif
                                <li>{{$product->product_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    @php $proid = null; @endphp
    <!--product details start-->
    <div class="product_details mb-70">
        <div class="container-fluid">
            @if( count($products) > 0 )
                @foreach($products as $product)
                    @php $proid = $product->id @endphp
                <div class="row">
                    <div class="col-lg-5 col-md-5 float-left">
                        <div class="product-details-tab">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="{{asset('storage/images/' .$product->feature_image)}}" data-zoom-image="{{asset('storage/images/' .$product->feature_image)}}" alt="{{$product->product_name}}">
                                </a>
                            </div>
                            <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/images/' .$product->feature_image)}}" data-zoom-image="{{asset('storage/images/' .$product->feature_image)}}">
                                            <img src="{{asset('storage/images/' . $product->feature_image)}}" alt="zo-th-1"/>
                                        </a>

                                    </li>
                                    @foreach($product->productImages as $images)
                                    <li >
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('storage/images/' .$images->product_image)}}" data-zoom-image="{{asset('storage/images/' .$images->product_image)}}">
                                            <img src="{{asset('storage/images/' . $images->product_image)}}" alt="zo-th-1"/>
                                            <span></span>
                                        </a>

                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div class="">
                                @if( count($product->productVideos) > 0 )
                                    <h3>Promo Video </h3>
                                    @foreach($product->productVideos as $video)
                                        <iframe width="400"  src="{{asset('storage/videos/' .$video->product_image)}}" frameborder="0" allowfullscreen>
                                    </iframe>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 float-left">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="product_d_right " style="border-right:1px solid #ededed;">
                                    <div class="product_meta">
                                        <span> <b>Condition:</b> @if($product->is_new == 1) Brand New @else Old @endif </span>
                                    </div>
                                    <div class="product_meta">
                                        <span> <b>Brand Name:</b> {{ $product->brand->brand_name }} </span>
                                    </div>
                                    @if( ! empty($product->model) )
                                        <div class="product_meta">
                                            <span> <b>Brand Model:</b>  {{$product->model}}</span>
                                        </div>
                                    @endif

                                    @if( ! empty($product->coupon) )
                                        <div class="product_meta">
                                            <span> <b>Discount Code:</b> {{ $product->coupon->coupon_code }}</span>
                                        </div>
                                    @endif
                                     <div class="product_meta">
                                        <span> <b>Product Code: </b> {{ $product->unique_id }}</span>
                                    </div>
{{--                                      <div class="product_meta">--}}
{{--                                        <span>Regular Price: <a href="#">12534</a></span>--}}
{{--                                    </div>--}}
                                    <div class="product_desc mt-2">
                                        {!! $product->product_description !!}
                                    </div>
                                    <div class=" product_ratting">
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                           <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                           <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                           <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                           <li><a href="#"><i class="icon-star"></i></a></li>--}}
{{--                                            <li class="review"><a href="#"> (customer review ) </a></li>--}}
{{--                                        </ul>--}}
                                    </div>

                                    <div class=" product_ratting">
                                        <ul>
                                            <li style="color:#28a745">EMI Availabe:</li>
                                            <li>
                                                @if( ! empty( $product->emi_id ) ) Yes @else No @endif
                                            </li>
                                            @if( ! empty( $product->emi_id ) )
                                                @php
                                                    $ids = explode(',', $product->emi_id);

                                                @endphp
                                                <li>
                                                    <select name="" id="" class="form-control" >
                                                        @for($i  = 0; $i < count($ids); ++$i)
                                                            @php $emi = \App\Models\Emi::find($ids[$i]) @endphp
                                                            <option value="{{$emi->id}}">{{$emi->bank_name}} ({{$emi->duration}}) </option>
                                                        @endfor
                                                    </select>
                                                </li>
                                            @endif
                                        </ul>
{{--                                        @endif--}}
                                    </div>
{{--                                    @endif--}}
                                    @if( ! empty($product->coupon) )
                                        <div class="product_meta">
                                            <span> <b>Discount Price:</b>  {{ $product->coupon->amount }}</span>
                                        </div>
                                    @endif
                                    <a href="#sheet" id="click_change3">
                                        <i class="fa fa-2x fa-sort-up"></i> View more info
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                                            <div class=" product_recive">
                                                              <div class="recive_inner">
                                                                <ul>
                                                                    <li>Cash On Delivary: </li>
                                                                    <li>
                                                                        <select name="" id="" class="form-control" >
                                                                            <option value="">Yes</option>
                                                                            <option value="">No</option>
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                              </div>
                                                              <div class="recive_inner col-md-6">
                                                                  <ul class="nav nav-pills flex-column">
                                                                      @foreach($areas as $index => $area)
                                                                          <li class="nav-item  ">
                                                                          <a class="nav-link bg-gradient-dark location collapsed" href="#submenu{{$index}}" data-toggle="collapse" data-target="#submenu{{$index}}">{{$area->division_name}}</a>
                                                                            @if( isset($area->districts) )
                                                                                <div class="collapse" id="submenu{{$index}}" aria-expanded="false">
                                                                                    <ul class="flex-column pl-2 nav">
{{--                                                                                  <li class="nav-item"><a class="nav-link py-0" href="">Orders</a></li>--}}
                                                                                        @foreach($area->districts as $distIndex => $district)
                                                                                            <li class="nav-item  ">
                                                                                              <a class="nav-link  location collapsed py-0" href="#submenu{{$index}}sub{{$distIndex}}" data-toggle="collapse" data-target="#submenu{{$index}}sub{{$distIndex}}">{{$district->district_name}}</a>
                                                                                                @if( isset($district->cities) )
                                                                                                    <div class="collapse small" id="submenu{{$index}}sub{{$distIndex}}" aria-expanded="false">
                                                                                                    <ul class="flex-column nav pl-4">
                                                                                                        @foreach($district->cities as $city)
                                                                                                          <li class="nav-item ">
                                                                                                              <a class="nav-link p-0 location" href="">
                                                                                                                  {{$city->city_name}}
                                                                                                              </a>
                                                                                                          </li>
                                                                                                        @endforeach
                                                                                                  </ul>
                                                                                              </div>
                                                                                                @endif
                                                                                          </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            @endif
                                                                          </li>
                                                                      @endforeach
                                                                  </ul>
                                                              </div>
                                                              <div class="recive_inner">
                                                                <ul>
                                                                    <li>Product return policy </li>
                                                                    <li>
                                                                        <select name="" id="" class="form-control" >
                                                                            @if( isset($product->return_policy) )
                                                                                <option value="">{{$product->return_policy}}</option>
                                                                            @else
                                                                                <option value="">No</option>
                                                                            @endif
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                              </div>
                                                            </div>
                                                        </div>
                                </div>
                                <a href="#sheet" id="click_change3">
                                    <i class="fa fa-2x fa-sort-up"></i> More details
                                </a>
                            </div>
                            <div class="col-md-5">
                                <div class="product_d_right" >
                                    <h4> Name:{{$product->product_name}}</h4>

                                        <div class="price_box ">
                                            <span class="current_price">BDT {{ round($product->product_price) }}</span>


                                        </div>
                                        <div class="product_variant color">


                                            @if($product->stock > 0)
                                                <h5>Available Product: {{$product->stock}}</h5>
                                            @else
                                                <h5 class="text-warning"> Product Out of Stock</h5>
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
                                                    <button class="button " type="submit">add to cart</button>
                                                @else
                                                    <button style="
                                                    color: #fff !important;
                                                    background-color: #dc3545 !important;
                                                    border-color: #dc3545 !important;"
                                                            class="button btn-danger" disabled>Product Out of Stock</button>
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
                                            @if( $product->stock <= 0 )
                                                <li><a data-target="{{$product->id}}" id="express_wish"  title="Express wish" >+ Express wish</a></li>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active text" data-toggle="tab" id="click_change"  href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                           </li>
{{--                            <li>--}}
{{--                                <a data-toggle="tab" href="#info" role="tab" id="click_change2" aria-controls="info" aria-selected="false">Description</a>--}}
{{--                            </li>--}}

                        </ul>
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane fade active" id="sheet" role="tabpanel">
                            {!! $products[0]->specification !!}
                        </div>

                        <div class="tab-pane fade show " id="info" role="tabpanel">
                            <div class="product_info_content">
                                {!! $products[0]->extra_description !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3">
                <div class="row">
{{--                    <div class="col-md-12">--}}
{{--                        <div class="area">--}}
{{--                            <h4>Product Receiving Area: <span>Dhaka</span></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    {{-- <div class="col-md-12">
                        <div class=" product_recive">
                          <div class="recive_inner">
                            <ul>
                                <li>Cash On Delivary: </li>
                                <li>
                                    <select name="" id="" class="form-control" >
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </li>
                            </ul>
                          </div>
                          <div class="recive_inner">
                            <ul>
                                <li>Home Delivary Charge </li>
                                <li>
                                    <select name="" id="" class="form-control" >
                                        @php
                                            $areas = \App\Models\Area::all()
                                        @endphp
                                        @if( ! empty($areas) )
                                            @foreach($areas as $area)
                                                <option value="{{$area->id}}">{{$area->area_name}} (BDT{{$area->price}}) </option>
                                            @endforeach
                                        @else
                                            <option value="">No</option>
                                        @endif
                                    </select>
                                </li>
                            </ul>
                          </div>
                          <div class="recive_inner">
                            <ul>
                                <li>Product return policy </li>
                                <li>
                                    <select name="" id="" class="form-control" >
                                        <option value="">15days</option>
                                        <option value="">No</option>
                                    </select>
                                </li>
                            </ul>
                          </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12 no-gutter">
                        <h4 class="text-center" style="background:#D6D6D6;padding:5px 0">Related Product</h4>
                    </div>
                </div>
                <div class="row">
                    @foreach($results->products as $product)
                        @if( $product->id != $proid )
                            <div class="related_pro">
                            <div class="col-md-4">
                                <div class="product_img">
                                    <a href="{{ route('pages.show', $product->product_slug) }}">
                                    <img src="{{ asset('storage/images/' . $product->feature_image) }}" class="card-img-top" alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <a class="product_desc" href="{{ route('pages.show', $product->product_slug) }}">
                                    <b>Name :</b> {{$product->product_name}} <br>
                                    <b>Price:</b> {{round($product->product_price)}}
                                    </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                 </div>
                </div>

        </div>
    </div>


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
                                                                        <img src="{{asset('storage/images/' .$mainRe['category']['products'][$index]['feature_image'])}}" alt="{{$mainRe['category']['products'][$index]['product_name']}}">
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
