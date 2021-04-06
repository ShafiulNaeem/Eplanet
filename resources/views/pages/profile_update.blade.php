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
                        <div class="user_info_title text-center">
                            <h4>Update Your Information</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="user_info_inner">
                            <form role="form" action="{{route('profile.update',$user->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')
                                @php  $className = "form-group col-md-6 float-left" @endphp
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="{{$className}}">
                                            <label for="exampleInputPassword1">First Name</label>
                                            <input type="text" name="fname" class="form-control" value="{{$user->fname}}">
                                        </div>
                                        <div class="{{$className}}">
                                            <label for="exampleInputPassword2">Last Name</label>
                                            <input type="text" name="lname" class="form-control" value="{{$user->lname}}">
                                        </div>
                                        <div class="{{$className}}">
                                            <label for="exampleInputPassword3">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                                        </div>

                                        <div class="{{$className}}">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                        </div>

                                        <div class="{{$className}}">
                                            <label for="exampleInputPassword1">City</label>
                                            <input type="text" name="city" class="form-control" value="{{$user->city}}">
                                        </div>

                                        <div class="{{$className}}">
                                            <label for="exampleInputPassword1">Country</label>
                                            <input type="text" name="country" class="form-control" value="{{$user->country}}">
                                        </div>

                                        <div class="form-group col-md-12 float-left">
                                            <label for="exampleInputPassword1">Address</label>
                                            <textarea name="address" id=""  class="form-control" cols="20" rows="10">{{$user->address}}</textarea>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Save Change</button>
                                </div>
                            </form>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Change Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!--  User information end  -->

@endsection
