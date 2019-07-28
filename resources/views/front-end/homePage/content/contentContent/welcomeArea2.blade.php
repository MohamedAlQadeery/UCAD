<section class="Welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header">
                    {{--<h2>Welcome to EduRead</h2>--}}

                    <h2>@lang('front.welcome')</h2>
                    <p>@lang('front.welcomeCollage')</p>
                </div><!-- ends: .section-header -->
            </div>
        </div>
        <div class="row">
            @isset($items)
                @foreach($items as $item)
                @if($item->menu_id == 2)
                        <div class="col-sm-6 wel-ful-box-2">
                            <div class="wel-text-box">
                                <div class="wel-icon">
                                    <img src="{{asset('frontend/images/index-02/welcome-01.png')}}" alt="">
                                </div>
                                <div class="wel-text">
                                    <h3>{{lang() == 'ar' ? $item->ar_name : $item->en_name}}</h3>
                                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra Pede phasellus
                                        eget Etiam
                                        maecenas.</p>
                                    <a href="#">@lang('front.read_more')<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </div>
</section>