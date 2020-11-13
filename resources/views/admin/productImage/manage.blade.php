@extends('layouts.app_admin')

@section('content')
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.admin_sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <a href="{{route('productImage.create')}}" class="btn btn-primary">Add ProductImage</a>
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="col-xs-12 print">
                <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                <button class="btn btn-primary pull-right" id="download" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>
                <div class="box-body table-responsive" id="invoice">
                    <table id="example2" class="table text-center  table-bordered table-hover">

                        <thead style="background-color: #000;color:#fff">
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp

                        @foreach($productImages as $productImage)
                            @if(count($productImage->productImages) >0)
                            <tr>
                                <td style="width: 5%">{{$i}}</td>
                                <td style="width: 19%">{{$productImage->product_name}}</td>
                                <td style="width: 57%">
                                    @php
                                        $width = 100/count($productImage->productImages);
                                    @endphp
                                    @foreach($productImage->productImages as $images)
                                        <img src="{{url('images',$images->product_image)}}" alt="{{$productImage->product_name}}" class="img-rounded" style=" width:{{$width-1}}%" />
                                    @endforeach
                                </td>
                                <td style="width: 19%">
                                    <a href="{{route('productImage.edit',$productImage->id)}}" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$productImage->id}}">Delete</a>
                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="">Views</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$productImage->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete !!!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('productImage.destroy',$productImage->id)}}" method="post">
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
                            @endif
                            @php $i++; @endphp
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection
