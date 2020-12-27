@extends('layouts.app_main')

@section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>My Account</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
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
                        <div class="user_name">
                            <p>First Name: Prof. Lillie Batz IV</p>
                        </div>
                        <div class="user_name">
                            <p>Last Name: Emilio Satterfield DDS</p>
                        </div>
                        <div class="user_name">
                            <p>Phone number: (525) 710-9922 x197</p>
                        </div>
                        <div class="user_name">
                            <p>Email: nora.howell@example.com</p>
                        </div>
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
                           <h3>Orders</h3>
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th>Order SL</th>
                                           <th>Image</th>
                                           <th>Product</th>
                                           <th>Price</th>
                                           <th>Quantity</th>
                                           <th>Total</th>
                                           <th>Date</th>
                                           
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td><img src="assets/img/slider/main1.jpg" alt="" width="75"></td>
                                           <td>Samsung</td>
                                           <td><span class="success">50000</span></td>
                                           <td>3</td>
                                           <td>56000</td>
                                           <td>May 10, 2018 </td>
                                       </tr>
                                       <tr>
                                           <td>2</td>
                                           <td><img src="assets/img/slider/main1.jpg" alt="" width="75"></td>
                                           <td>1</td>
                                           <td><span class="success">70000</span></td>
                                           <td>1</td>
                                           <td>76000</td>
                                           <td>May 10, 2019 </td>
                                       </tr>
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
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_related">
                                    <figure>
                                        <div class="related_thumb">
                                            <a href="blog_details.html"><img src="assets/img/slider/main1.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="related_content">
                                            <h4><a href="#">Post with Gallery</a></h4>
                                            <div class="blog_meta">
                                                <span class="author">By : <a href="#">admin</a> / </span>
                                                <span class="meta_date"> April 11, 2019 </span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_related">
                                    <figure>
                                        <div class="related_thumb">
                                            <a href="blog_details.html"><img src="assets/img/slider/main1.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="related_content">
                                            <h4><a href="#">Post with Audio</a></h4>
                                            <div class="blog_meta">
                                                <span class="author">By : <a href="#">admin</a> / </span>
                                                <span class="meta_date"> April 11, 2019 </span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="single_related">
                                    <figure>
                                        <div class="related_thumb">
                                            <a href="blog_details.html"><img src="assets/img/slider/main1.jpg" alt=""></a>
                                        </div>
                                        <figcaption class="related_content">
                                            <h4><a href="#">Maecenas ultricies</a></h4>
                                            <div class="blog_meta">
                                                <span class="author">By : <a href="#">admin</a> / </span>
                                                <span class="meta_date"> April 11, 2019 </span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- User Blog Post End-->

@endsection