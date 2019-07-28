@extends('front-end.page_master_layout')
@section('title','Application')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'Application'])
        <span class="b-active">Application</span>
    @endcomponent
@endsection
@section('content')
    <div class="register">
        <section class="register-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form action="{{route('front.store.application')}}" class="learnpro-register-form"
                              method="post">
                            @method('POST')
                            @csrf
                            <p class="lead">ِApplication</p>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Name" type="text"
                                       name="name" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Age" type="text" name="age"
                                       value="{{old('age')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Type" type="text"
                                       name="type" value="{{old('type')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="College" type="text"
                                       name="college" value="{{old('college')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Student number" type="text"
                                       name="student_number" value="{{old('student_number')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Phone number" type="text"
                                       name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Mobile" type="text"
                                       name="mobile" value="{{old('mobile')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="Email" type="text"
                                       name="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="subject_id" type="text"
                                       name="subject_id" value="{{old('subject_id')}}">
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" placeholder="knowabout_id" type="text"
                                       name="knowabout_id" value="{{old('knowabout_id')}}">
                            </div>
                            <div class="form-group register-btn">
                                <button class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-offset-3">
                        @if(session()->has('success'))
                            <div class="alert alert-primary">
                                {{session()->get('success')}}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-offset-3">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

