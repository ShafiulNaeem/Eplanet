@extends('layouts.app_main')

@section('content')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>Blog Details </h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!-- blog detail start-->


    <div class="blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog_wrapper blog_wrapper_details">
                        <article class="single_blog">
                            <figure>
                                <div class="post_header">
                                    <h3 class="post_title">Aypi non habent claritatem insitam</h3>
                                    <div class="blog_meta">
                                        <p>Posted by : <a href="#">admin</a> / On : <a href="#">April 10, 2019</a></p>
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                    <a href="#"><img src="assets/img/slider/main1.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <div class="post_content">
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="comments_box">
                            <h3>3 Comments </h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Demo</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span>
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment"></textarea>
                                    </div>
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                            </form>
                        </div>
                        
                        
                        <div class="related_posts" style="border-top:none">
                            <h3>Related posts</h3>
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
    </div>

    <!--   blog details end    -->

@endsection