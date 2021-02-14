@extends('layouts.app_admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
            'title' => 'Edit Event Product'
        ])

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="card-title">Edit Event Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('eventProduct.update',$eventProduct->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div id="copy">
                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Category</label>
                                            <select required name="category_id" id="cat_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="" >Select Category</option>
                                                @foreach($categories as $category )
                                                    <option
                                                        @if( $category->id == $eventProduct->category_id )
                                                        selected
                                                        @endif

                                                        value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <select name="product_id" id="product_id" data-product="{{$eventProduct->product_id}}" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="">Select Product</option>
                                                @foreach($products as $category)
                                                    @foreach($category->products as $product)
                                                    <option
                                                        @if( $product->id == $eventProduct->product_id )
                                                        selected
                                                        @endif

                                                        value="{{$product->id}}">{{$product->product_name}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputEmail1">Event</label>
                                            <select  name="event_id" id="" class="form-control select2 select2-success" data-dropdown-css-class="select2-success" style="width: 100%;">
                                                <option selected>Select Event</option>
                                                @foreach($events as $event)
                                                    <option
                                                        @if( $event->id == $eventProduct->event_id )
                                                        selected
                                                        @endif

                                                        value="{{$event->id}}">{{$event->event_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

{{--                                    <div id="others"></div>--}}

{{--                                    <div class="form-group ">--}}
{{--                                        --}}{{--                                            <label for="exampleFormControlFile1"> </label>--}}
{{--                                        <div class="btn-group " style="margin-top: 30px">--}}
{{--                                            <label for=""> </label>--}}
{{--                                            <button type="button" class="btn btn-success" id="add_button">Add</button>--}}
{{--                                            <button type="button" class="btn btn-danger" id="delete_button">Delete</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
