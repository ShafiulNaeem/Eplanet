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
                            <li>All Blogs</li>
                            <li><a href="{{route('blog.create')}}">Create BLog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->



    <!--   all blog start  -->

    <div class="blog_page_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog_wrapper">
                        <div class="row">
                            @foreach($blogs as $index => $blog)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <article class="single_blog">
                                        <figure>
                                            <div class="blog_thumb">
                                                <a href="{{route('blog.show',$blog->blog_slug)}}">
                                                    <img src="{{url('images',$blog->blog_image)}}" alt="{{$blog->post}}" />
                                                </a>
                                            </div>
                                            <figcaption class="blog_content">
                                                <h1 class="post_title">
                                                    <a href="{{route('blog.show',$blog->blog_slug)}}">{{$blog->title}}</a>
                                                </h1>
                                                <p>
                                                    {{$blog->post}}
                                                </p>
                                                <div class="articles_date">
                                                    <p class="text-success">Created by {{$blog->user->fname}} : {{$blog->user->lname}} </p>
                                                    <p>{{\Carbon\Carbon::parse($blog->created_at)->format('M d Y')}}
                                                        | <a href="{{route('home')}}">Eplanet</a></p>

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

    <!--    All blog end -->

@endsection
