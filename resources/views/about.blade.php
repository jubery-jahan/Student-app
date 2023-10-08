@extends('master')
@section('title')
    About
@endsection

@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('make-full-name')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input name="first_name" value="{{session('first_name')}}"  type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input name="last_name" type="text" value="{{session('last_name')}}"  class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input name="full_name" type="text" value="{{session('full_name')}}" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Make Full Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

