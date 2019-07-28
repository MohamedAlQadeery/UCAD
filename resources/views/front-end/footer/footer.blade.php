<footer>
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 footer-content-box">
                <div class="col-sm-3">
                    <h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span>@lang('front.cda')</h3>
                    <p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream.
                        Please send email and get latest news.</p>
                    @isset($settings)

                        <ul class="list-unstyled">
                            <li><span><i class="fa fa-phone footer-icon"></i></span>{{$settings[0]->phone_number1}}</li>
                            <li><span><i class="fa fa-envelope footer-icon"></i></span>{{$settings[0]->email}}</li>
                            <li><span><i class="fa fa-map-marker footer-icon"></i></span>{{$settings[0]->location}}</li>
                        </ul>
                    @endisset
                </div>
                @isset($subjects)
                    <div class="col-sm-2">
                        <h3>@lang('front.subjects')</h3>
                        <ul class="list-unstyled">
                            @foreach($subjects as $subject)
                                <li><a href="#"><span><i
                                                    class="fa fa-long-arrow-right footer-icon"></i></span>{{$subject->name}}
                                    </a></li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <h3>@lang('front.links')</h3>
                        <ul class="list-unstyled">
                            @isset($menus)
                                @foreach($menus as $menu)
                                    <span style="display: none">{{$menu_name = lang() == 'ar' ? $menu->ar_name : $menu->en_name}}</span>
                                    <li><a href="#"><span><i
                                                        class="fa fa-long-arrow-right footer-icon"></i></span>{{$menu_name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Language
                                    Packs</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Release
                                    Status</a></li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a>
                            </li>
                            <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h3>Get in touch</h3>
                        <p>Enter your email and we'll send you more information.</p>

                        <form action="#">
                            <div class="form-group">
                                <input placeholder="Your Email" type="email" required="">
                                <div class="submit-btn">
                                    <button type="submit" class="text-center">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endisset
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="row">
                    <div class="col-md-6 col-sm-12 footer-no-padding">
                        {{--                        <p>&copy; Copyright 2018 EcologyTheme | All rights reserved</p>--}}
                        <p>&copy; حقوق النشر لشركة ال هه لتكنولوجيا المعلومات | جميع الحقوق محفوظة</p>

                    </div>
                    <div class="col-md-6 col-sm-12 footer-no-padding">
                        <ul class="list-unstyled footer-menu text-right">
                            {{--                            <li>Follow us:</li>--}}
                            <li>تعال هان هه:</li>
                            <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
                            {{--                            <li><a href="{{$settings[0]->facebook}}"><i class="fa fa-facebook facebook"></i></a></li>--}}
                            {{--                            <li><a href="{{$settings[0]->twitter}}"><i class="fa fa-twitter twitter"></i></a></li>--}}
                            {{--                            <li><a href="{{$settings[0]->instagram}}"><i class="fa fa-instagram instagram"></i></a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-google-plus google"></i></a></li>--}}
                            {{--                            <li><a href="#"><i class="fa fa-skype skype"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ./ End footer-bottom -->
</footer><!-- ./ End Footer Area-->
