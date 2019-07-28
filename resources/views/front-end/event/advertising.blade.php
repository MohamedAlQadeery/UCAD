@extends('front-end.page_master_layout')
@section('title','Advertising')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'Advertising'])
        <span class="b-active">Advertising</span>
    @endcomponent
@endsection
@section('content')
    <div class="event-01">
        <section class="events-list-03">
            <div class="container">
                <div class="row event-body-content">
                    @foreach($advs as $adv)
                        <div class="col-sm-12 events-full-box">
                            <div class="events-single-box">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <img src="{{asset('frontend/images/event/events-l-01.jpg')}}" alt="" class="img-responsive">
                                    </div>

                                    <div class="col-sm-7 event-info">
                                        <h3>{{$adv->name}}</h3>
                                        <p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									1st January
								</span>
                                            <span>
									<i class="fa fa-clock-o event-icon"></i>
									8:00am - 5:00pm
								</span>
                                            <span>
									<i class="fa fa-map-marker event-icon"></i>
									New York
								</span>
                                        </p>

                                        <p>{{$adv->content}}</p>

                                        <a class="event-btn" href="{{route('front.advertising',['id'=>$adv->id])}}">Read More<i
                                                    class="fa fa-long-arrow-right events-btn-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-bottom-btn">
                            <a href="#" class="view-more-item">view all events</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
