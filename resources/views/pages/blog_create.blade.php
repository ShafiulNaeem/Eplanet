@extends('layouts.app_main')

@section('content')

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
{{--                       <h3>Blog Create</h3>--}}
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>Blog Create</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

  <div class="customer_login">
    <div class="container">
        <div class="row">
            <!--register area start-->
            <div class="col-lg-6 col-md-6 offset-md-3">
                <div class="account_form register">
                    <h2>Create Blog</h2>
                    <form action="{{route('blog.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="">Title</label>
                            <input name="title" id="" cols="10" class="form-control" rows="5"></input>
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="post" id="" cols="10" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="blog_image">Blog Image</label>
                            <input name="blog_image" type="file" class="form-control-file">
                        </div>
                        <div class="create_submit">
                            <button type="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->

        </div>
    </div>
  </div>

@endsection
