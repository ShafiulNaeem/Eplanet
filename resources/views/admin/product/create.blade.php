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
                    <div class="col-md-12" >
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Add Product</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <div class="col-md-9 card">
                                <form role="form" action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Name</label>
                                            <input type="text" name="product_name" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Product Name">
                                            @error('product_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Product Description</label>
                                            <textarea class="form-control" name="product_description" require ="require" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            @error('product_description')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Brand</label>
                                            <select name="product_brand" id="" class="form-control">
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Category</label>
                                            <select name="product_category" id="" class="form-control">
                                                @php $categorys = \App\Models\Category::orderBy('category_name','asc')->get() @endphp
                                                @foreach($categorys as $category )
                                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Coupon</label>
                                            <select name="product_coupon" id="" class="form-control">
                                                @php $coupons = \App\Models\Coupon::orderBy('coupon_code','asc')->get() @endphp
                                                @foreach($coupons as $coupon )
                                                    <option value="{{$coupon->id}}">{{$coupon->coupon_code}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Stock</label>
                                            <input type="text" name="product_stock" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Product available">
                                            @error('product_stock')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Size</label>
                                            <input type="text" name="product_size" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Enter your product size">
                                            @error('product_size')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Model</label>
                                            <input type="text" name="product_model" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Product Model">
                                            @error('product_model')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Price</label>
                                            <input type="text" name="product_price" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('product_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Tax</label>
                                            <input type="text" name="product_tax" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('product_tax')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Manufacture</label>
                                            <input type="text" name="manufactured_by" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('manufactured_by')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Product Color</label>
                                            <input type="text" name="product_color" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1">
                                            @error('product_color')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Product Feature Image</label>
                                            <input type="file" name="feature_image" class="form-control-file" id="exampleFormControlFile1">
                                        </div>

                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.box -->

                    </div>
                </div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection
