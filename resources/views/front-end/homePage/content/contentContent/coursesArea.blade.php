<section class="Courses-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header">
                    <h2>@lang('front.popular_courses')</h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>

        @foreach($subjects as $subject)
            <div class="row courses-r-margin-bottom">
                <div class="col-sm-4 single-courses-box">
                    <div class="single-courses">
                        <figure>
                            <div class="figure-img"><img src="{{asset('frontend/images/index/courses-01.jpg')}}" alt=""
                                                         class="img-responsive"></div>
                            <figcaption>
                                <div><a href="#" class="read_more-btn">@lang('front.apply_now')</a></div>
                            </figcaption>
                        </figure>
                        <div class="courses-content-box">
                            <div class="courses-content">
                                <h3><a href="#">WordPress Theme Development</a></h3>
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
            </div>
        @endforeach
        <div class="row courses-r-margin-bottom">
            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-01.jpg')}}" alt=""
                                                     class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">@lang('front.apply_now')</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">WordPress Theme Development</a></h3>
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
            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-01.jpg')}}" alt=""
                                                     class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">WordPress Theme Development</a></h3>
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
            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-01.jpg')}}" alt=""
                                                     class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">WordPress Theme Development</a></h3>
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
        </div>

    </div>
</section><!-- Ends: . -->