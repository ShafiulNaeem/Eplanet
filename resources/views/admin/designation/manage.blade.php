@extends('layouts.app_admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
@include('layouts.admin_blade_title', [
            'title' => 'Manage Designations'
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
                                        <th>SL</th>
                                        <th>Designation Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                @foreach($designations as $index => $designation)
                                <tr>
                                    <td class="text-center">{{$index + 1}}</td>
                                    <td class="text-center">{{$designation->designation_name}}</td>
                                    <td class="text-center">{{  \Carbon\Carbon::parse($designation->created_at)->format('M d Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('designation.edit', $designation->id) }}" class="btn btn-app float-left">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <form class="float-left" action="{{ route('designation.destroy', $designation->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger btn btn-app" >
                                                <i class="fa fa-trash fa-2x"></i> DELETE
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Designation Name</th>
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
