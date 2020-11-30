@extends('layouts.app_admin')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
            'title' => 'Edit Brand'
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
                    <form role="form" action="{{route('brand.update',$brands->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                    <div class="card-body">

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Brand Name</label>
                                <input type="text" name="brand_name" class="form-control" value="{{$brands->brand_name}}" placeholder="Brand Name">
                            </div>

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Brand Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1" @if($brands->status == 1 ) selected @endif>Active</option>
                                    <option value="0" @if($brands->status == 0 ) selected @endif>InActive</option>
                                </select>
                            </div>

                    </div><!-- /.box-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-block btn-outline-dark">Save Change</button>
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
        <!-- /.content -->
@endsection
