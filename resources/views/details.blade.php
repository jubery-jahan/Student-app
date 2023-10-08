@extends('master')
@section('title')
    details
@endsection
@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($product->image)}}" height="300" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h1>{{($product->name)}}</h1>
                        <h4>tk. {{($product->price)}}</h4>
                        <p>{{($product->description)}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

