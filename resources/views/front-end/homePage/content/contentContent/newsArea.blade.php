<section class="news-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header">
                    <h2>@lang('front.latest_news')</h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>

        <div class="row">

{{--            @foreach($news as $row)--}}
{{--                @if($loop->index < 4)--}}
{{--                <div class="col-sm-4 news-single">--}}
{{--                    <div class="news-single-box">--}}
{{--                        <div class="news-img-box">--}}
{{--                            <img src="{{asset('frontend/images/index/news-01.jpg')}}" alt="" class="img-responsive">--}}
{{--                        </div>--}}
{{--                        <div class="news-content">--}}
{{--                            <h3><a href="{{route('front.news',['id'=>$row->id])}}">{{$row->name}}</a></h3>--}}
{{--                            <p class="news-time">--}}
{{--                                <span>--}}
{{--                                    <i class="fa fa-calendar event-icon"></i>--}}
{{--                                    {{$row->date}}--}}
{{--                                </span>--}}
{{--                                <span>--}}
{{--                                    <i class="fa fa-user"></i>--}}
{{--                                    {{$row->auther}}--}}
{{--                                </span>--}}
{{--                                <span>--}}
{{--                                    <i class="fa fa-comment"></i>--}}
{{--                                    {{$row->commeents_number}}--}}
{{--                                </span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endif--}}
{{--            @endforeach--}}

            <div class="col-sm-4 news-single">
                <div class="news-single-box">
                    <div class="news-img-box">
                        <img src="{{asset('frontend/images/index/news-01.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="news-content">
                        <h3><a href="#">المستقبل الذي ينتظرك يا صديق</a></h3>
                        <p class="news-time">
                                <span>
                                    <i class="fa fa-calendar event-icon"></i>
                                    يوم 12 من عام الفيل
                                </span>
                            <span>
                                    <i class="fa fa-user"></i>
                                    شخص ما غريب
                                </span>
                            <span>
                                    <i class="fa fa-comment"></i>
                                    7مليار
                                </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 news-single">
                <div class="news-single-box">
                    <div class="news-img-box">
                        <img src="{{asset('frontend/images/index/news-02.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="news-content">
                        <h3><a href="#">The future of Web Design</a></h3>
                        <p class="news-time">
                                <span>
                                    <i class="fa fa-calendar event-icon"></i>
                                    12 July, 2018
                                </span>
                            <span>
                                    <i class="fa fa-user"></i>
                                    John Doe
                                </span>
                            <span>
                                    <i class="fa fa-comment"></i>
                                    12
                                </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 news-single">
                <div class="news-single-box">
                    <div class="news-img-box">
                        <img src="{{asset('frontend/images/index/news-03.jpg')}}" alt="" class="img-responsive">
                    </div>
                    <div class="news-content">
                        <h3><a href="#">The future of Web Design</a></h3>
                        <p class="news-time">
                                <span>
                                    <i class="fa fa-calendar event-icon"></i>
                                    12 July, 2018
                                </span>
                            <span>
                                    <i class="fa fa-user"></i>
                                    John Doe
                                </span>
                            <span>
                                    <i class="fa fa-comment"></i>
                                    12
                                </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>