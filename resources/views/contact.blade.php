@extends('master')
@section('title')
    Contact
@endsection

@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('creat-series')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input name="starting_number" value="{{session('starting_number')}}"  type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input name="ending_number" type="text" value="{{session('ending_number')}}"  class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="odd">Odd</label>
                                    <label><input type="radio" name="choice" value="even">Even</label>
                                    <label><input type="radio" name="choice" value="all">All</label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea  class="form-control" >{{session('result')}}</textarea>
                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Creat Series">
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

