@extends('layouts.app_admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
                'title' => 'Manage Event Product',
                'link' => route('eventProduct.create'),
                'text' => 'Create Event Product',
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
                                    <thead>

                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Event</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($eventProducts as $eventProduct)
                                        <tr>
                                            <td class="text-center" >
                                                <img width="90" src="{{ asset('storage/images/' . $eventProduct->product->feature_image) }}" alt=">{{$eventProduct->product->product_name}}">
                                            </td>
                                            <td class="text-center">{{$eventProduct->product->product_name}}</td>
                                            <td class="text-center">{{$eventProduct->event->event_name}}</td>
                                            <td class="text-center">{{  \Carbon\Carbon::parse($eventProduct->event->start_date)->format('M d Y') }}</td>
                                            <td class="text-center">{{  \Carbon\Carbon::parse($eventProduct->event->end_date)->format('M d Y') }}</td>
                                            <td class="text-center">{{  \Carbon\Carbon::parse($eventProduct->created_at)->format('M d Y') }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('eventProduct.edit', $eventProduct->id) }}" class="btn btn-app float-left">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>

                                                <a href="" class="btn btn-app text-danger" data-toggle="modal" data-target="#exampleModal{{$eventProduct->id}}">
                                                    <i class="fa fa-trash fa-2x"></i> DELETE
                                                </a>

                                                <div class="modal fade" id="exampleModal{{$eventProduct->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete this !!!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('eventProduct.destroy',$eventProduct->id)}}" method="post">
                                                                    @csrf
                                                                    @method("DELETE")
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
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Event</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Date</th>
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
