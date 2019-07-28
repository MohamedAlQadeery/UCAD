@extends('front-end.otherPages')
<!-- Title for home page-->
@section('title','Course Page')
<!-- Slider -->
@section('header')
<!--==================SliderTop-images===================-->
@includeIf('front-end.header.headerContent.pageHeader')
@endsection
<!-- Home page Content -->
@section('body')

<section class="courses-1">
    <div class="container">

        <div class="row courses-r-margin-bottom">
            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-01.jpg')}}" alt="" class="img-responsive"></div>
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
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-02.jpg')}}" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">jQuery Mobile for Beginners</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>35 Reviews</span>
                            </div>
                        </div>
                        <div class="courses-content-bottom">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> 80</li>
                                <li><i class="fa fa-heart"></i> 35</li>
                                <li><span>Free</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-03.jpg')}}" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">Photography for Beginners</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>15 Reviews</span>
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
        <!--End .row-->

        <div class="row courses-r-margin-bottom">
            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-04.jpg')}}" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">Microsoft Excel 2018 Advan</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>88 Reviews</span>
                            </div>
                        </div>
                        <div class="courses-content-bottom">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> 80</li>
                                <li><i class="fa fa-heart"></i> 35</li>
                                <li><span>Free</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-05.jpg')}}" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">Android App Development</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>15 Reviews</span>
                            </div>
                        </div>
                        <div class="courses-content-bottom">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> 80</li>
                                <li><i class="fa fa-heart"></i> 35</li>
                                <li><span>$150</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="{{asset('frontend/images/index/courses-06.jpg')}}" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">Complete Photography Course</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>15 Reviews</span>
                            </div>
                        </div>
                        <div class="courses-content-bottom">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> 80</li>
                                <li><i class="fa fa-heart"></i> 35</li>
                                <li><span>$70</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->
        </div>


        <div class="row courses-r-margin-bottom">
            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="images/index/courses-01.jpg" alt="" class="img-responsive"></div>
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
                        <div class="figure-img"><img src="images/index/courses-02.jpg" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">jQuery Mobile for Beginners</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>35 Reviews</span>
                            </div>
                        </div>
                        <div class="courses-content-bottom">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-user"></i> 80</li>
                                <li><i class="fa fa-heart"></i> 35</li>
                                <li><span>Free</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->

            <div class="col-sm-4 single-courses-box">
                <div class="single-courses">
                    <figure>
                        <div class="figure-img"><img src="images/index/courses-03.jpg" alt="" class="img-responsive"></div>
                        <figcaption>
                            <div><a href="#" class="read_more-btn">Apply Now</a></div>
                        </figcaption>
                    </figure>
                    <div class="courses-content-box">
                        <div class="courses-content">
                            <h3><a href="#">Photography for Beginners</a></h3>
                            <div class="rank-icons">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>15 Reviews</span>
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

        <div class="row">
            <div class="col-md-12">
                <div class="view_more_btn">
                    <a href="#" class="view-more-item">view all courses</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
