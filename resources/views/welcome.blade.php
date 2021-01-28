@extends('layouts.app_main')
@section('content')
<!--slider area start-->
<div class="image_video">
    <div class="bo-slider">

      <li data-url="{{ asset('frontend/assets/img/main1.jpg') }}" data-type="image">
      </li>

      <li data-url="{{ asset('frontend/assets/img/1.jpg') }}" data-type="image"></li>

      <li data-url="{{ asset('frontend/assets/img/2.jpg') }}" data-type="image"></li>

      <li data-url="{{ asset('frontend/v2.mp4') }}" autoplay="true" loop data-type="video">

      <li data-url="{{ asset('frontend/assets/img/slider/main1.jpg') }}" data-type="image"></li>

    </div>
</div>
<!--slider area end-->

   <!--  Section Discover slider Start  -->

   <section class="discover-section">
       <div class="container-fluid">
          <div class="row">
              <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="discover-title">
                      <h3>Discover</h3>
                  </div>
              </div>
          </div>
           <div class="row">
               <div class=" col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class=" discover-carasul diecover_div owl-carousel">
                        <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover1.png')}}" alt=""></a>
                                </div>
                              <p>Shop in 7 language</p>
                            </div>

                        </div>
                          <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover3.png')}}" alt=""></a>
                                </div>
                              <p>Shop in 60 countries</p>
                            </div>

                        </div>
                       <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover2.png')}}" alt=""></a>
                                </div>
                              <p>Deals and promotions</p>
                            </div>

                        </div>

                       <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover4.png')}}" alt=""></a>
                                </div>
                              <p>secure payment</p>
                            </div>

                        </div>
                       <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover5.png')}}" alt=""></a>
                                </div>
                              <p>Estimated import fees</p>
                            </div>

                        </div>
                       <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover6.png')}}" alt=""></a>
                                </div>
                              <p>Estimated import fees</p>
                            </div>

                        </div>
                       <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover7.png')}}" alt=""></a>
                                </div>
                              <p>Track your package</p>
                            </div>

                        </div>
                        <div class="item">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="{{asset('frontend/assets/img/icon/discover8.png')}}" alt=""></a>
                                </div>
                              <p>Estimated import fees</p>
                            </div>

                        </div>
                    </div>
               </div>
           </div>
       </div>
   </section>

   <!-- Section Discover slider End  -->


<!--  Section Product slider Start  -->
<div class="product_area ">
    <div class="container">
        <div class="product_container">
            <div class="row">
                <div class="col-md-12"><h2>Categories</h2></div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                    @foreach($categories as $category)
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="single_banner">
                                                        <div class="banner_thumb">
                                                            <a href="{{route('cat.show',$category->id)}}">
                                                                <img src="{{url('images',$category->category_image)}}" alt="{{$category->category_name}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="{{route('cat.show',$category->id)}}">{{$category->category_name}}</a></h4>

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

            <div class="row">
                <div class="col-md-12"><h2>Best Seller</h2></div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
                                    @foreach($products as $product)
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="single_banner">
                                                        <div class="banner_thumb">
                                                            <a href="{{route('pages.show',$product->id)}}">
                                                                <img src="{{url('images',$product->feature_image)}}" alt="{{$product->product_name}}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name"><a href="{{route('pages.show',$product->id)}}">{{$product->product_name}}</a></h4>
                                                        <div class="price_box">
                                                            <span class="current_price"></span>
                                                            <span class="current_price">BDT: {{$product->product_price}}</span>
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
            @foreach($results as $mainRe)
                @if(isset($mainRe['category']['products']))
            <div class="row">
                <div class="col-md-12"><h2>{{$mainRe['category']['category_name']}}</h2></div>

                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                            <div class="product_carousel product_column5 owl-carousel">
@foreach($mainRe['category']['products'] as $index => $ffgr)
                                    <div class="product_items">
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
<!--product area end-->
@endsection
