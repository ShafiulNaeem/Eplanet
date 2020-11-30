@extends('layouts.app_admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
                'title' => 'Manage Product Videos'
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
                            <th>Product Video</th>
                            <th>Product Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( count($productvideos) > 0 )
                            @foreach($productvideos as $index => $productvideo)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>
                                        <iframe width="600"  src="{{url('videos',$productvideo->product_video)}}" frameborder="0" allowfullscreen>
                                        </iframe>
                                    </td>
                                    <td>{{$productvideo->product->product_name}}</td>
                                    <td>
                                        <a href="{{route('productVideo.edit',$productvideo->id)}}" class="btn btn-success">Edit</a>
                                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$productvideo->id}}">Delete</a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$productvideo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete !!!</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('productVideo.destroy',$productvideo->id)}}" method="post">
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
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Product Video</th>
                            <th>Product Name</th>
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
