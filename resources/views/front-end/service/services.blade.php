@extends('front-end.page_master_layout')
@section('title','Subjects')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'Pages'])
        <span class="b-active">Subjects</span>
    @endcomponent
@endsection
@section('content')
    <body class="courses mean-container">
    <section class="courses-1">
        <div class="container">
            <div class="row courses-r-margin-bottom">
                @foreach($subjects as $subject)
                    <div class="col-sm-3 single-courses-box">
                        <div class="single-courses">
                            <figure>
                                <div class="figure-img"><img src="{{asset('frontend/images/index/courses-01.jpg')}}"
                                                             alt=""
                                                             class="img-responsive"></div>
                                <figcaption>
                                    <div><a href="{{route('front.subject',['id'=>$subject->id])}}"
                                            class="read_more-btn">Apply Now</a></div>
                                </figcaption>
                            </figure>
                            <div class="courses-content-box">
                                <div class="courses-content">
                                    <h3><a href="{{route('front.subject',['id'=>$subject->id])}}">{{$subject->name}}</a>
                                    </h3>
                                    <div class="rank-icons">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>20 Reviews</span>
                                    </div>
                                </div>
                                <div class="courses-content-bottom">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-user"></i> 80</li>
                                        <li><i class="fa fa-heart"></i> 35</li>
                                        <li><span>$90</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- Ends: .single courses -->
                    </div><!-- Ends: . -->
                @endforeach
            </div>
        </div>
    </section>

@endsection
