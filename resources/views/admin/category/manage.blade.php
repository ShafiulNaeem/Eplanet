@extends('layouts.app_admin')

@section('content')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.admin_sidebar')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
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
                            <th>Category Image</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Create Date</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp

                        @foreach($categorys as $category)
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                                <img src="{{url('images',$category->category_image)}}" alt="{{$category->category_name}}" class="img-rounded" width="80" />
                            </td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                @if($category->status == 1)
                                <span class="btn btn-success">Active</span>
                                @endif

                                @if($category->status == 0)
                                <span class="btn btn-danger">InActive</span>
                                @endif
                            </td>

                            <td>{{date('Y-m-d', strtotime($category->created_at))}}</td>
                            <td>
                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$category->id}}">Delete</a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete this !!!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('category.destroy',$category->id)}}" method="post">
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
                        @php $i++; @endphp
                        @endforeach
                    </tbody>

                </table>
            </div>

        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@endsection
