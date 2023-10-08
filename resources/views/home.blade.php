@extends('master')
@section('title')
    Home
@endsection
@section('body')
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{asset($product->image)}}" height="200" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4>{{$product->name}}</h4>
                                <p>{{$product->price}}</p>
                                <hr/>
                                <a href="{{route('details',['id' => $product['id']])}}" class="btn btn-outline-primary rounded-0 px-5">Details</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

