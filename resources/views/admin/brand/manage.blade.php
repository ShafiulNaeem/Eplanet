@extends('layouts.app_admin')

@section('content')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.admin_sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="{{route('brand.create')}}" class="btn btn-primary">Create Brand</a>
        </section>

        <div class="col-xs-12 print">
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-primary pull-right" id="download" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="box-body table-responsive" id="invoice">
                <table  id="example" class="table text-center display  table-bordered table-hover">

                    <thead style="background-color: #000;color:#fff">
                        <tr>
                            <th>SL</th>
                            <th>Brand Name</th>
                            <th>Brand Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp

                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td>
                                @if($brand->status == 1)
                                <span class="btn btn-success">Active</span>
                                @endif

                                @if($brand->status == 0)
                                <span class="btn btn-danger">InActive</span>
                                @endif
                            </td>
                            <td>{{ date('Y-m-d', strtotime($brand->create_at)) }}</td>
                            <td>
                                <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$brand->id}}">Delete</a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$brand->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete This Brand</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('brand.destroy',$brand->id)}}" method="post">
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
