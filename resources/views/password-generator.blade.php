@extends('master')
@section('title')
    Password Generator
@endsection

@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('make-password')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Password Length</label>
                                <div class="col-md-9">
                                    <input type="number" value="{{session('password_length')}}" class="form-control" name="password_length"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Your Password</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{session('your_password')}}" class="form-control" readonly/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success rounded-0 px-5" value="Create Password"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
