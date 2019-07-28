@extends('front-end.page_master_layout')
@section('title','Subjects')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'Teachers'])
        <span class="b-active">Teachers</span>
    @endcomponent
@endsection
@section('content')
    <div class="teachers-01">
        <section class="teachers-area">
            <div class="container">
                @foreach($teachers->chunk(3) as $chunk)
                    <div class="row teachers-wapper-01">
                        @foreach($chunk as $teacher)
                            <div class="col-sm-6 col-md-4 teacher-single">
                                <div class="teacher-body">
                                    <img src="{{asset('frontend/images/teachars/teachar-01.jpg')}}" alt=""
                                         class="img-responsive">
                                    <div class="teachars-info">
                                        <h3>{{$teacher['name']}}</h3>
                                        <span>{{$teacher['content']}}</span>
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin teacher-icon"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram teacher-icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
