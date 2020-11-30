@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        @include('layouts.admin_blade_title', [
                'title' => 'Edit Product Video'
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
                                    <h3 class="card-title">Edit Product Video</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                            <form role="form" action="{{route('productVideo.update',$productvideo->id)}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <select name="product_name" id="" class="form-control">
                                            @foreach($products as $product)
                                                <option
                                                @if( $product->id == $productvideo->product_id )
                                                    selected
                                                @endif

                                                 value="{{$product->id}}">{{$product->product_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Product Video</label>
                                        <input type="file" name="product_image" class="form-control-file" id="exampleFormControlFile1">
                                        <span>
                                            <iframe width="200"  src="{{url('videos',$productvideo->product_video)}}" frameborder="0" allowfullscreen></iframe>
                                        </span>

                                    </div>

                                </div><!-- /.box-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-dark btn-block">Save And Changes</button>
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
@endsection
