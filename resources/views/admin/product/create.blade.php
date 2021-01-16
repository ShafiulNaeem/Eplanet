@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
        @include('layouts.admin_blade_title', [
                'title' => 'Create Product'
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
                                    <h3 class="card-title">Create Product</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                            <div class="col-md-12 card">
                                <form role="form" action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="card-body">

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Name</label>
                                            <input type="text" name="product_name" value="{{old('product_name')}}" required autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Product Name">
                                            @error('product_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Brand</label>
                                            <select name="product_brand" id="" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="" selected>Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>

                                            @error('product_brand')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Category</label>
                                            <select name="product_category" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="" selected>Select Category</option>
                                                @foreach($categories as $category )
                                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('product_category')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6 float-left">
                                            <label for="">Sub Category</label>

                                            <select name="product_sub_category" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option selected="selected">Select Sub Category</option>
                                                @foreach($subcategory as $category )
                                                    <option value="{{$category->id}}">{{$category->subcategory_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('product_sub_category')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="">Second Sub Category</label>

                                            <select name="secondary_sub_categories_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option selected="selected">Select Second Sub Category</option>
                                                @foreach($secondary_sub as $category )
                                                    <option value="{{$category->id}}">{{$category->secondary_subcategory_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Coupon</label>
                                            <select name="product_coupon" id="" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option value="" selected>Select Coupon</option>
                                                @foreach($coupons as $coupon )
                                                    <option value="{{$coupon->id}}">{{$coupon->coupon_code}}</option>
                                                @endforeach
                                            </select>

                                            @error('product_coupon')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Stock</label>
                                            <input type="text" name="product_stock" value="{{ old('product_stock') }}" required autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Product available">
                                            @error('product_stock')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Size</label>
                                            <input type="text" name="product_size" value="{{ old('product_size') }}" required autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Enter your product size">
                                            @error('product_size')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Model</label>
                                            <input type="text" name="product_model" value="{{ old('product_model') }}" required autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Product Model">
                                            @error('product_model')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Price</label>
                                            <input type="text" name="product_price" value="{{ old('product_price') }}" required autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('product_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Tax (%) </label>
                                            <input type="text" value="{{ old('product_tax') }}" name="product_tax" required autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('product_tax')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Manufacture</label>
                                            <input type="text" name="manufactured_by" required value="{{ old('manufactured_by') }}" autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('manufactured_by')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleInputPassword1">Product Color</label>
                                            <input type="text" name="product_color" required value="{{ old('product_color') }}" autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('product_color')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleSelectRounded0">Status</label>
                                            <select name="status" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" id="exampleSelectRounded0">
                                                <option selected value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>


                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleFormControlFile1">Product Feature Image</label>
<!-- {{--                                            <input type="file" name="feature_image" class="form-control-file" id="exampleFormControlFile1">--}} -->
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="feature_image" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6 float-left">
                                            <label for="exampleFormControlTextarea1">Product Description</label>
                                            <textarea class="form-control" name="product_description" required id="exampleFormControlTextarea1" rows="3">{{ old('product_description') }}</textarea>
                                            @error('product_description')
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
                </div>
            </section>
            <!-- /.content -->
@endsection
