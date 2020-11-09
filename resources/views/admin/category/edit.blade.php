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
                            <h3 class="box-title">Update Category</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('category.update',$category->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}" placeholder="Brand Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Status</label>
                                    <select name="status" id="" class="form-control">
                                    <option value="1" @if($category->status == 1 ) selected @endif>Active</option>
                                        <option value="0" @if($category->status == 0 ) selected @endif>InActive</option>
                                    </select>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save Change</button>
                            </div>
                        </form>
                    </div><!-- /.box -->

                  </div>
            	</div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection