@extends('master')
@section('title')
    Edit Products
@endsection
@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <p class="text-center text-success">{{session('message')}}</p>
                        <form action="{{route('update-product',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input name="name" value="{{$product->name}}"  type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input name="category" type="text" value="{{$product->category}}"  class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Product Price</label>
                                <div class="col-md-9">
                                    <input name="price" type="number" value="{{$product->price}}" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Product image</label>
                                <div class="col-md-9">
                                    <input name="image" type="file" value="" class="form-control">
                                    <img src="{{asset($product->image)}} " height="100" width="120"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea  class="form-control" name="description" >{{$product->description}}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ''}} value="1">Published</label>
                                    <label><input type="radio" name="status" {{$product->status == 0 ? 'checked' : ''}} value="0">Unpublished</label>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Product Info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
