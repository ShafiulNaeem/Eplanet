@extends('layouts.app_main')

@section('content')


    <!--slider area start-->
    <section class="slider_section">
        <div class="slider_area owl-carousel overviews">
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/assets/img/slider/main1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1>Baby Products</h1>
                                <h2>Kids Fashion</h2>
                                <p>
                                    Valid till 15 Augest
                                </p>
                                <a href="shop.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/assets/img/slider/main1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1>Baby Products</h1>
                                <h2>Kids Fashion</h2>
                                <p>
                                    Valid till 15 Augest
                                </p>
                                <a href="shop.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('frontend/assets/img/slider/main1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1>Baby Products</h1>
                                <h2>Kids Fashion</h2>
                                <p>
                                    Valid till 15 Augest
                                </p>
                                <a href="shop.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!-- Overview start -->

    <section class="overview">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 col-lg-6">
                    <div class="over_left">
                        <img src="{{asset('frontend/assets/img/overview.webp')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="over_right">
                        <textarea name=""  class="form-control" cols="32" rows="10">
                           The YZF-R15 changed the 150cc segment in the Indian market the way the CBZ did when it was launched. It was an everyday motorcycle that could genuinely be used as a trackday tool. The second version of the R15 traded practicality for more focused performance, but the advent of the KTM RC200 meant that a far better performance was available for the sportbike enthusiasts at a similar price. The R15 Version 3.0 reduces that gap significantly with technology. On the list is now a BS6 engine with a few more ccs, but featuring variable valve timing which takes the maximum power output to nearly 18.3bhp with a peak torque output of 14.1Nm. It also gets all-LED lamps and an all-digital LCD instrument cluster that displays a wealth of information, including when the Variable Valve Actuation switches to the different camshaft profile.
                        </textarea>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table_content text-center">
                        <table class="table table-bordered" style="background:#EEF8FF;">
                            <thead>
                                <tr>
                                    <th scope="col">Business Type</th>
                                    <th scope="col">Manufacturer, Trading Company</th>
                                    <th scope="col">Country / Region</th>
                                    <th scope="col">Guangdong, China</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td>Otto</td>

                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Overview end -->

    <!-- Main product start -->

    <section class="main_product text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_area ">
                        <div class="container">
                            <div class="product_container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main_pro_img">
                                           <h4>MAIN PRODUCTS</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row second-product">
                                    <div class="col-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                                                <div class="product_carousel product_column5 owl-carousel">
                                                    @foreach($productTops as $productSale)
                                                        @foreach($productSale->productsWithTop as $product)
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
                                                                                <span class="current_price">BDT: {{$product->product_price}}</span>
                                                                            </div>
                                                                        </figcaption>
                                                                    </figure>
                                                                </article>
                                                            </div>
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product area end-->
            </div>


        </div>
    </section>

    <!-- Main product end -->

    <!--  PRODUCT CAPACITY start  -->
    <section class="product_capasity text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_area ">
                        <div class="container">
                            <div class="product_container">
                                <div class="row">
                                <div class="main_pro_img">
                                    <h4>PRODUCTS CAPACITY</h4>
                                </div>
                                </div>
                                <div class="row second-product">
                                    <div class="col-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                                                <div class="product_carousel product_column5 owl-carousel">
                                                        @foreach($capacities as $capacity)
                                                            <div class="product_items">
                                                                <article class="single_product">
                                                                    <figure>
                                                                        <div class="single_banner">
                                                                            <div class="banner_thumb">
{{--                                                                                <a href="{{route('pages.show',$product->id)}}">--}}
                                                                                    <img src="{{url('images',$capacity->capacity_image	)}}" alt="{{$capacity->title}}">
{{--                                                                                </a>--}}
                                                                            </div>
                                                                        </div>
                                                                        <figcaption class="product_content">
                                                                            <h4 class="product_name text-success">{{$capacity->title}}</h4>
                                                                            <div class="price_box">
                                                                                <span class="">{{$capacity->description}}</span>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!--product area end-->
            </div>

             <div class="row">
                 <div class="main_pro_img">
                     <h4>Production Equipment</h4>
                 </div>
                <div class="col-md-12">
                    <div class="table_content text-center">
                        <table class="table table-bordered" style="background:#EEF8FF;">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">No</th>
                                    <th scope="col">Quantity</th>
                                    <th>Verify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td><img src="{{asset('frontend/assets/img/right.png')}}" width="10" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td><img src="{{asset('frontend/assets/img/right.png')}}" width="10" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td><img src="{{asset('frontend/assets/img/right.png')}}" width="10" alt=""></td>
                                </tr>
                                <tr>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><img src="{{asset('frontend/assets/img/right.png')}}" width="10" alt=""></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--  PRODUCT CAPACITY end  -->


   <!--  quality_control  start  -->

    <section class="quality_control text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="qualiti_title">
                        <h4>QUALITY CONTROL</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($ProductQualitys as $ProductQuality)
                   <div class="col-md-3">
                      <div class="litbox-inner">
                          <a id="firstlink" class="venobox" data-gall="gall1" title="Image 1" href="{{url('images',$ProductQuality->quality_image)}}"><img src="{{url('images',$ProductQuality->quality_image)}}" width="150"></a>
                          <div>
                              <h4>{{$ProductQuality->title}}</h4>
                              <p class="card-text">{{$ProductQuality->description}}</p>
                          </div>
                      </div>
                   </div>
               @endforeach
            </div>
        </div>
    </section>

     <!--  quality_control  end  -->


      <!--  rd_capacity  start  -->

    <section class="rd_capacity text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rd_title">
                        <h4>R&D CAPACITY</h4>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-12">
                 <h4 class="process">R&D Process</h4>
              </div>
                @foreach($productrnd as $rnd)
                    <div class="col-md-3">
                        <div class="litbox-inner">
                            <a id="firstlink" class="venobox" data-gall="gall1" title="Image 1" href="{{url('images',$rnd->rnd_image)}}">
                                <img src="{{url('images',$rnd->rnd_image)}}" width="150"></a>
                            <div>
                                <h4>{{$rnd->title}}</h4>
                                <p class="card-text">{{$rnd->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

             <div class="row">
             <div class="col-md-12">
                 <h4>Certification</h4>
              </div>
                <div class="col-md-12">
                    <div class="table_content text-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Document</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Issued By</th>
                                    <th scope="col">Business Scope</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($productcertifications as $productcertification)
                                <tr>
                                <td>
                             <embed src="{{url('documents',$productcertification->pdf)}}" alt="{{$productcertification->name}}" class="img-rounded" width="150" />
                               </td>
                                    <td>{{$productcertification->name}}</td>
                                    <td>{{$productcertification->issued_by}}</td>
                                    <td>{{$productcertification->business_scope}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

          <!--  rd_capacity  end  -->



     <!--  TRADE CAPABILITIES START  -->

    <section class="trade_capabilit text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rd_title">
                        <h4>TRADE CAPABILITIES</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="table_content text-center">
                        <table class="table table-bordered" style="background:#EEF8FF;">
                            <thead>
                                <tr>
                                    <th scope="col">Main Markets</th>
                                    <th scope="col">Total Revenue</th>
                                    <th scope="col">Main Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ProductTradeCapacity as $ProductTradeCapacitys)
                                <tr>
                                    <td>{{$ProductTradeCapacitys->main_markets}}</td>
                                    <td>BDT: {{$ProductTradeCapacitys->total_revenue}}</td>
                                    <td>{{$ProductTradeCapacitys->main_product}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

         <!--  TRADE CAPABILITIES END  -->

@endsection
