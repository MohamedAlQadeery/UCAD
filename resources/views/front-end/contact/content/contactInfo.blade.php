<div class="col-sm-5 contact-info">
    <div class="col-sm-12 contact-title">
        <h2>@lang('front.contact_info')</h2>
        <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
    </div>
    <div class="col-sm-12 contact-box">
        <div class="row">
            <div class="col-sm-12 col-md-6 single-address-box">
                <div class="single-address">
                    <i class="fa fa-phone"></i>
                    <h4>@lang('front.phone')</h4>
                    <p>{{$settings[0]->phone_number1}}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6  single-address-box">
                <div class="single-address">
                    <i class="fa fa-envelope"></i>
                    <h4>@lang('front.email')</h4>
                    <p>{{$settings[0]->email}}</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 single-address-box">
                <div class="single-address">
                    <i class="fa fa-map-marker"></i>
                    <h4>@lang('front.location'):</h4>
                    <p>{{$settings[0]->location}}</p>
                </div>
            </div>
{{--            <li><a href="{{$setting[0]->facebook}}"><i class="fa fa-facebook teacher-icon"></i></a></li>--}}
{{--            <li><a href="{{$setting[0]->twitter}}"><i class="fa fa-twitter teacher-icon"></i></a></li>--}}
{{--            <li><a href="{{$setting[0]->instagram}}"><i class="fa fa-instagram teacher-icon"></i></a></li>--}}
            <div class="col-sm-12 single-address-box">
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
</div>
