@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        @include('layouts.admin_blade_title', [
                'title' => 'Edit Discover'
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
                                    <h3 class="card-title">Edit Discover</h3>
                                </div>
                                <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('discover.update',$discover->id)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="card-body">

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputPassword1">Vendor</label>
                                <select name="admin_id" id="" class="form-control select2 select2-success" data-dropdown-css-class="select2-success" style="width: 100%;">
                                    @foreach($admins as $admin)
                                        <option

                                            @if( $admin->id == $discover->admin_id )
                                            selected
                                            @endif

                                            value="{{$admin->id}}">{{$admin->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6 float-left ">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <input type="text" name="description" value="{{$discover->description}}" required autocomplete="off" class="form-control" id="exampleInputPassword1">

                            </div>

                            <div class="form-group col-md-6 float-left">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <span><img src="{{assetImageAndVideo('images').$discover->image}}" alt="{{$discover->description}}" width="80"></span>
                            </div>

                            </div><!-- /.box-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-dark btn-block">Save Change</button>
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
