@extends('layouts.app_main')

@section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{'home'}}">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--breadcrumbs area end-->

<!--  User information start  -->

    <section class="user_info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user_info_title">
                        <h2>User Information</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="user_info_inner">
                        @foreach($users as $user)
                        <div class="user_name">
                            <h4>Name: {{$user->fname." ".$user->lname}}</h4>
                        </div>
                        <div class="user_name">
                            <p>Number: +880{{$user->phone}}</p>
                        </div>
                        <div class="user_name">
                            <p>Email: {{$user->email}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  User information end  -->


<!--  Order table star -->


   <section class="order_complete">
       <div class="container">
           <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                   <div class="dashboard_content">
                       <div class="tab-pane">
                           <h3>Orders Details</h3>
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th>Order ID</th>
                                           <th>Order Date</th>
                                           <th>Image</th>
                                           <th>Product</th>
                                           <th>Size</th>
                                           <th>Price</th>
                                           <th>Quantity</th>
                                           <th>Total</th>


                                       </tr>
                                   </thead>
                                   <tbody>
                                       @php
                                           $total_price = 0;
                                       @endphp
                                       @foreach($orders as $index => $order)
                                           <tr>
                                               <td>{{$order->unique_id}}</td>
                                               <td>{{\Carbon\Carbon::parse($order->created_at)->format('M d Y')}} </td>
                                               @foreach($order->products as $product)
                                                   <td>
                                                       <img src="{{url('images',$product->feature_image)}}" alt="{{$product->product_name}}" class="img-rounded" width="80" />
                                                   </td>
                                                   <td>{{$product->product_name}}</td>
                                                   <td>{{$product->size}}</td>
                                                   <td>BDT: {{$product->product_price}}</td>
                                                   @php
                                                       $total_price = $order->quantity * $product->product_price;
                                                   @endphp
                                               @endforeach
                                               <td>{{$order->quantity}}</td>
                                               <td>BDT: {{$total_price}}</td>
                                           </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>


<!--  Order table end -->

<!-- User Blog Post Start-->

<section class="user_post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user_post_inner">
                    <div class="related_posts" style="border-top:none">
                        <h3>User Posts</h3>
                        <div class="row">
                            @foreach($userPBlogs as $userBlog)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_related">
                                        <figure>
                                            <div class="related_thumb">
                                                <a href="{{route('blog.show',$userBlog)}}"><img src="{{url('images',$userBlog->blog_image)}}" alt="{{$userBlog->title}}"></a>
                                            </div>
                                            <figcaption class="related_content">
                                                <h4><a href="#">{{$userBlog->title}}</a></h4>
                                                <div class="blog_meta">
                                                    <span class="author">By : <a href="{{route('blog.show',$userBlog->id)}}">{{$userBlog->user->fname . " " . $userBlog->user->lname}}</a> / </span>
                                                    <span class="meta_date"> {{\Carbon\Carbon::parse($userBlog->created_at)->format('M d Y')}} </span>
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
</section>

    <!-- User Blog Post End-->

@endsection
