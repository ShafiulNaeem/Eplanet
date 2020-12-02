@extends('layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
                'title' => 'Manage Orders'
            ])

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">

                                    <thead style="background-color: #000;color:#fff">
                                    <tr>
                                        <th>SL</th>
                                        <th>User Email</th>
                                        <th>Quantity</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Total Price</th>
                                        <th>Admin Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                            $total = 0;
                                    @endphp
                                    @foreach($orders as $index => $order)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$order->user->email}}</td>
                                            <td>{{$order->quantity}}</td>
                                            @foreach($order->products as $product)
                                                <td><img src="{{url('images',$product->feature_image)}}" alt="{{$product->product_name}}" width="80"></td>
                                                <td>{{$product->product_name}}</td>
                                                <td>BDT {{$product->product_price}}</td>
                                                @php
                                                    $total = $product->product_price ;
                                                @endphp
                                            @endforeach
                                            <td>BDT {{$total * $order->quantity}}</td>
                                            <td>{{$order->user->email}}</td>
                                            <td>
                                                <a href="" class="btn btn-success float-left" data-toggle="modal" data-target="#exampleModal{{$order->id}}">
                                                    Shift
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Do You Want to Shit !!!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="" method="post">
                                                                    @csrf
                                                                    <button class="btn btn-danger">Confirm</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>User Nmae</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Product Price</th>
                                        <th>Total Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

