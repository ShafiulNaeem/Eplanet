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
                            <h3 class="box-title">Update Coupon</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{route('coupon.update',$coupon->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Coupon Code</label>
                                    <input type="text" name="coupon_code" require="require" autocomplete="off" value="{{$coupon->coupon_code}}" class="form-control"  placeholder="Coupon Code">
                                    @error('coupon_code')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label >Coupon Amount</label>
                                    <input type="text" name="amount" require="require" autocomplete="off" class="form-control" value="{{$coupon->amount}}" placeholder="Coupon Amount">
                                    @error('amount')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Coupon Status</label>
                                    <select name="status"  class="form-control">
                                        <option value="1" @if($coupon->status == 1) selected @endif>Active</option>
                                        <option value="0" @if($coupon->status == 0) selected @endif>InActive</option>
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
