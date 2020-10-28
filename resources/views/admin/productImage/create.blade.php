@extends('layouts.app_admin')

@section('content')
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
                                <h3 class="box-title">Add Product Image</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('productImage.store')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Product Name</label>
                                        <select name="product_name" id="" class="form-control">
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Product Image (Upload Multiple images) </label>
                                        <input type="file" name="product_image[]" class="form-control-file" id="exampleFormControlFile1" multiple>
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
