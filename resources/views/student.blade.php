@extends('master')
@section('title')
    Student
@endsection

@section('body')
    <section class="py-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('return-info')}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Student Name</label>
                                <div class="col-md-9">
                                    <input name="name"   type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Subject Name</label>
                                <div class="col-md-9">
                                    <label><input type="checkbox" name="subject[]" value="bangla">Bangla</label>
                                    <label><input type="checkbox" name="subject[]" value="english">English</label>
                                    <label><input type="checkbox" name="subject[]" value="math">math</label>
                                    <label><input type="checkbox" name="subject[]" value="physics">physics</label>
                                    <label><input type="checkbox" name="subject[]" value="biology">biology</label>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>student name</th>
                                <th>subject list</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{session('name')}}</td>
                                <td>
                                    <ul>
                                        @if(session('subjects'))
                                        @foreach(session('subjects') as $subject)
                                            <li>{{$subject}}</li>
                                        @endforeach
                                            @endif
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
