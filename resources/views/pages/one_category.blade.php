@extends('layouts.app_main')

@section('content')

<section class="category">

   <div class="container">
       <div class="row">
           <div class="col-md-2">
               <div class="left-category">
                     <h6><strong>Featured Categories</strong></h6>
                     <ul class="cat-ul">
                         <li><a href="#">Cloth</a></li>
                         <li><a href="#">Shoes</a></li>
                         <li><a href="#">Watches</a></li>
                         <li><a href="#">Women's Fashion</a></li>
                         <li><a href="#">Boys' Fashion</a></li>
                         <li><a href="#">Accessories</a></li>
                     </ul>
                     <div class="left-cat-image">
                        <a href="#"><img src="assets/img/category/banner.jpg" width="200" alt=""></a>
                    </div>
               </div>

           </div>
           <div class="col-md-10">
              <div class="row">
                  <div class="col-md-12">
                      <div class="category-title">
                          <h4>Price and other details may vary based on size</h4>
                      </div>
                  </div>
              </div>
              <div class="right-main-cat">
                    <div class="row">

                   </div>
                  @foreach($categories as $category)
                    <div class="row">

                    <div class="col-md-12">
                        <h4>All {{$category->subcategory_name}} Collection</h4>
                    </div>

                        @foreach($category->products as $product)
                            <div class="col-md-3">
                                <div class="right-category">
                                    <div class="card">
                                      <a href="{{route('pages.show',$product->id)}}"><img src="{{asset('images/'.$product->feature_image)}}" class="card-img-top" alt="{{$product->product_name}}"></a>
                                      <div class="card-body">
                                       <a href="{{route('pages.show',$product->id)}}"><p>{{$product->product_description}}</p></a>
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
              </div>
           </div>
       </div>
   </div>

      <div class="blog_pagination">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">&gt;&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

 </section>

     <!-- category area End -->

   <!-- related-section area Start -->

<section class="related-section">
    <div class="product_area ">
        <div class="container">
             <div class="row">
               <div class="col-md-12">
                   <h3  class="text-dark text-center mb-20">Related Product</h3>
               </div>
           </div>
            <div class="product_container">
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
</section>

   <!-- related-section area End -->

@endsection
