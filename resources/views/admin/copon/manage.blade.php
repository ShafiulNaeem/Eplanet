@extends('layouts.app_admin')

@section('content')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.admin_sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="{{route('coupon.create')}}" class="btn btn-primary">Create Coupon</a>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box-body table-responsive">
                <table id="example2" class="table text-center  table-bordered table-hover">
                    <thead style="background-color: #000;color:#fff">
                        <tr>
                            <th>SL</th>
                            <th>Coupon Code</th>
                            <th>Coupon  Amount</th>
                            <th>Coupon  Status</th>
                            <th>Coupon  Created</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp

                        @foreach($copons as $copon)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$copon->coupon_code}}</td>
                            <td>{{$copon->amount}}</td>
                            <td>{{date('Y-m-d',strtotime($copon->created_at))}}</td>
                            <td>
                                @if($copon->status == 1)
                                <span class="btn btn-success">Active</span>
                                @endif

                                @if($copon->status == 0)
                                <span class="btn btn-danger">InActive</span>
                                @endif
                            </td>


                            <td>
                                <a href="{{route('coupon.edit',$copon->id)}}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$copon->id}}">Delete</a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$copon->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete !!!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('coupon.destroy',$copon->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Confirm</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>

                </table>
            </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@endsection
