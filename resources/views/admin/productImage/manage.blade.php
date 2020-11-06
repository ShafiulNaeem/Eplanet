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

                <div class="box-body table-responsive">
                    <table id="example2" class="table text-center  table-bordered table-hover">

                        <thead style="background-color: #000;color:#fff">
                        <tr>
                            <th>SL</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i=1; @endphp

                        @foreach($productImages as $productImage)
                            <tr>
                                <td>{{$i}}</td>
                                <td><img src="{{url('images',$productImage->product_image)}}" alt="" width="80"></td>
                                <td>{{$productImage->product->product_name}}</td>
                                <td>
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
                            @php $i++; @endphp
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
@endsection
