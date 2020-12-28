@extends('layouts.app_main')

@section('content')



    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
{{--                       <h3>Blog Details </h3>--}}
                        <ul>
                            <li><a href="{{route('home')}}">home</a></li>
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
                        @php
                        $blog_id = 0;
                        $totalComent = 0;
                        @endphp
                            <article class="single_blog">
                                @foreach($blogs as $index => $blog)
                                    <figure>
                                        <div class="post_header">
                                            <h3 class="post_title">Aypi non habent claritatem insitam</h3>
                                            <div class="blog_meta">
                                                <p>Posted by : <a href="">{{$blog->user->fname}} {{$blog->user->lname}}</a> / On : <a href="">{{\Carbon\Carbon::parse($blog->created_at)->format('M d Y')}}</a></p>
                                            </div>
                                        </div>
                                        <div class="blog_thumb">
                                            <a href="#"><img src="{{url('images',$blog->blog_image)}}" alt="{{$blog->post}}" /></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <div class="post_content">
                                                <p>{{$blog->post}}.</p>
                                                @php
                                                    $blog_id = $blog->id;
                                                    $totalComent = $blog->coments->count();
                                                @endphp
                                            </div>
                                        </figcaption>
                                    </figure>
                                 @endforeach
                            </article>
                           <div class="comments_box">
                                <h3>{{$totalComent}} Comments</h3>
                                <div class="comment_list">
                                    @foreach($comments as $index => $comment)
                                        <div class="comment_content">

                                            <div class="comment_meta">
                                                <h5><a href="">{{$comment->user->fname}} {{$comment->user->lname}} </a></h5>
                                                <span>{{\Carbon\Carbon::parse($comment->created_at)->format('M d Y')}}</span>
                                                <p>{{$comment->comment}}</p>
                                            </div>

{{--                                            reply area--}}
                                            @foreach($comment->replies as  $reply)
                                                <div class="comment_list list_two">
                                                    <div class="comment_content">
                                                        <div class="comment_meta">
                                                            <h5><a href="">{{$reply->user->fname}} {{$reply->user->fname}}</a></h5>
                                                            <span>{{$reply->reply}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="comment_reply" id="reply_id">
                                                <span href="#reply_div" class="btn btn-success">Reply</span>
                                            </div>
                                            <div class="reply_div" id="reply_div">

                                                <form action="{{route('reply.store')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <textarea name="reply" id="" class="form-control" cols="5" rows="1"></textarea>
                                                        <input type="text" name="blog_id" hidden value="{{$blog_id}}">
                                                        <input type="text" name="comment_id" hidden value="{{$comment->id}}">
                                                        <input type="text" name="user_id" hidden value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

                                                    </div>
                                                    <div class="form-group">
                                                        <button class="button" type="submit">Post Reply</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                     @endforeach
                                </div>



                            </div>

                           <div class="comments_form">
                                <h3>Leave a Post </h3>
                                <form action="{{route('comment.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="review_comment">Comment </label>
                                            <textarea name="comment" id="review_comment"></textarea>
                                            <input type="text" name="blog_id" hidden value="{{$blog_id}}">
                                            <input type="text" name="user_id" hidden value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                        </div>
                                    </div>
                                    <button class="button" type="submit">Post Comment</button>
                                 </form>
                            </div>

                        <div class="related_posts" style="border-top:none">
                            <h3>User posts</h3>
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
