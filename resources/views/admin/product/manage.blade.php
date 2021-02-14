@extends('layouts.app_admin')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.admin_blade_title', [
                'title' => 'Manage Product',
                'link' => route('product.create'),
                'text' => "Product Create"
            ])

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped table-responsive">
                                    <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Brand</th>
                                        <th>Product Stock</th>
                                        <th>Product Tax</th>
                                        <th>Product Price</th>
                                        <th>Product Created</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($products as $index => $product)
                                        <tr>
                                            <td>{{$product->unique_id}}</td>
                                            <td><img src="{{asset('storage/app/public/images/'.$product->feature_image)}}" alt="{{$product->product_name}}" width="80"></td>
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$product->brand->brand_name}}</td>
                                            <td>{{$product->stock}} piece(s) </td>
                                            <td>{{$product->tax}}%</td>
                                            <td>BDT {{$product->product_price}}</td>
                                            <td>{{\Carbon\Carbon::parse($product->created_at)->format('M d Y')}}</td>
                                            <td class="text-center">
                                                <form action="{{ route('product.change.status') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="status" value="{{$product->status}}">
                                                    <input type="hidden" name="id" value="{{$product->id}}">

                                                    @if($product->status == 1)
                                                        <button type="submit" class="btn btn-success">Active</button>
                                                    @else
                                                        <button type="submit" class="btn btn-danger">Inactive</button>
                                                    @endif
                                                    <br>
                                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                                            data-target="#modal-xl{{$product->id}}">Description</button>
                                                </form>

                                                <div class="modal fade" id="modal-xl{{$product->id}}">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"> Product Description </h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="post" action="{{ route('product.change.specification', $product->id) }}">
                                                                    @csrf
                                                                    <textarea class="form-control" id="product_description{{$product->id}}" name="product_description" required rows="10">{{ old('product_description') }}</textarea>
                                                                    <button class="btn btn-block btn-primary" type="submit" >Save</button>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-info"
                                                                        data-dismiss="modal">Close
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>

                                                </div>

                                            </td>




                                            <td>
                                                <a href="{{route('product.edit',$product->id)}}" class="btn text-warning btn-app float-left">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="" class="btn btn-app text-danger float-left" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
                                                    <i class="fa fa-trash fa-2x"></i> DELETE
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Do You Want to Delete !!!</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('product.destroy',$product->id)}}" method="post">
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
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Brand</th>
                                        <th>Product Stock</th>
                                        <th>Product Tax</th>
                                        <th>Product Price</th>
                                        <th>Product Created</th>
                                        <th>Status</th>
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
    <!-- Content Wrapper. Contains page content -->
@endsection
