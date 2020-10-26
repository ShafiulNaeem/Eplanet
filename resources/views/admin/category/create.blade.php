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
                            <h3 class="box-title">Create Category</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Name</label>
                                    <input type="text" name="category_name" require="require" autocomplete="off" class="form-control" id="exampleInputPassword1" placeholder="Category Name">
                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Status</label>
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
