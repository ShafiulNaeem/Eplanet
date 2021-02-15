@extends('layouts.app_admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
            'title' => 'Create Event Product'
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
                                <h3 class="card-title">Create Event Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('eventproduct.store')}}" method="POST">
                                @csrf
                                <div class="card-body">

                                    <div id="copy">
                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Category</label>
                                            <select required name="category_id" id="cat_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="" >Select Category</option>
                                                @foreach($categories as $category )
                                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('event_category')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <select multiple="multiple"  name="product_id[]" id="product_id" data-placeholder="Select Products" class="form-control select2 select2-success" data-dropdown-css-class="select2-success" style="width: 100%;">
                                                <option value="">Select Product</option>
{{--                                                @foreach($products as $product)--}}
{{--                                                    <option value="{{$product->id}}">{{$product->product_name}}</option>--}}
{{--                                                @endforeach--}}
                                            </select>
                                            @error('product_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputEmail1">Event</label>
                                            <select  name="event_id" id="" class="form-control select2 select2-success" data-dropdown-css-class="select2-success" style="width: 100%;">
                                                <option selected>Select Event</option>
                                                @foreach($events as $event)
                                                    <option value="{{$event->id}}">{{$event->event_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('event_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
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
