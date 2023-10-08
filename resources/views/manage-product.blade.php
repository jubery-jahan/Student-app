@extends('master')
@section('title')
   Manage Products
@endsection
@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <p class="text-center text-danger">{{session('message')}}</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category}}</td>
                                <td>{{$product->price}}</td>
                                <td><img src="{{asset($product->image)}}" height="50" width="70"></td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('edit-product',['id'=> $product->id])}}" class="btn btn-success btm-sm">Edit</a>
                                    <a href="{{route('delete-product',['id'=> $product->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btm-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
