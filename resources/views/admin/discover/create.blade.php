@extends('layouts.app_admin')

@section('content')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
            'title' => 'Create Discover'
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
                                <h3 class="card-title">Create Discover</h3>
                            </div>
                            <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('discover.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">

                                <div class="form-group col-md-6 float-left">
                                    <label for="exampleInputPassword1"> Vendor </label>
                                    <select name="admin_id" id="admin_id" class="form-control select2 select2-success" data-dropdown-css-class="select2-success" style="width: 100%;">
                                        <option selected>Select Vendor</option>
{{--                                        @foreach($admins as $admin)--}}
{{--                                            <option value="{{$admin->id}}">{{$admin->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    @error('admin_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 float-left">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <input type="text" name="description" value="{{ old('description') }}" required autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Note ..">
                                    @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 float-left">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div><!-- /.box-body -->

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
@endsection
