@extends('layouts.app_admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('layouts.admin_blade_title', [
                'title' => 'Create Brand'
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
                                <h3 class="card-title">Create Brand</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('brand.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group col-md-6 float-left">
                                        <label for="exampleInputEmail1">Brand Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="brand_name" placeholder="Enter Brand Name" required />

                                        @error('brand_name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 float-left">
                                        <label for="exampleSelectRounded0">Status</label>
                                        <select name="status" class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
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










    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.admin_sidebar')

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">


            <!-- Main content -->
            <section class="content">

            	<div class="row">
            		<div class="col-md-12">
                            <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Create Brand</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('brand.store')}}" method="POST">
                            @csrf
                        <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Brand Name</label>
                                    <input type="text" name="brand_name" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Brand Name">
                                    @error('brand_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Brand Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                  </div>
            	</div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection
