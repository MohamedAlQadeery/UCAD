@extends('front-end.page_master_layout')
@section('title','Subjects')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'Teachers'])
        <span class="b-active">Teachers</span>
    @endcomponent
@endsection
@section('content')
    <div class="t-profile-01 mean-container">
        <section class="teacher-prolile-01">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 t-profile-left">
                        <div class="teacher-contact">
                            <img src="{{asset('frontend/images/teachars/t-profile-01.jpg')}}" alt="" class="img-responsive">
                            <h3>Contact Info</h3>
                            <p><span>Email:</span> martin@EduRead.com</p>
                            <p><span>Phone:</span> 61 3 8376 6284</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter "></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 t-profile-right">
                        <div class="row all-corsess-wapper">
                            <div class="col-sm-12">
                                <div class="all-courses">
                                    <h3>Ddvid Martin</h3>
                                    <div class="profile__courses__inner">
                                        <ul class="profile__courses__list list-unstyled">
                                            <li><i class="fa fa-graduation-cap"></i>Degree:</li>
                                            <li><i class="fa fa-star"></i>Experience:</li>
                                            <li><i class="fa fa-heart"></i>Hobbies:</li>
                                            <li><i class="fa fa-bookmark"></i>My Courses:</li>
                                            <li><i class="fa fa-bookmark"></i>Projects:</li>
                                        </ul>
                                        <ul class="profile__courses__right list-unstyled">
                                            <li>PHD in Mathmatics</li>
                                            <li>20 Years in university Math</li>
                                            <li>Music, Dancing and Family</li>
                                            <li>Higher Math, Math Puzzle</li>
                                            <li>Map Creation</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus
                                        neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum
                                        interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum
                                        vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies
                                        massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis
                                        lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla
                                        eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui </p>
                                    <p>lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis
                                        risus erat. lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices
                                        mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate
                                        mattis risus erat.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="teacher_skill clearfix">
                                <div class="col-md-6 col-lg-6">
                                    <h3>My Shedule</h3>
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="progress-bar-linear">
                                                <p class="progress-bar-text">Playing Science</p>
                                                <div class="progress-cont">
                                                    <span class="main-color progress-bar-text">98%</span>
                                                </div>
                                                <div class="progress-bar-skills">
                                                    <div class="progress-bar-line main-color-bg"
                                                         data-percent="98"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="progress-bar-linear">
                                                <p class="progress-bar-text">Arts And Craft</p>
                                                <div class="progress-cont">
                                                    <span class="main-color progress-bar-text">85%</span>
                                                </div>
                                                <div class="progress-bar-skills">
                                                    <div class="progress-bar-line main-color-bg"
                                                         data-percent="85"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="progress-bar-linear">
                                                <p class="progress-bar-text">Creative Writing</p>
                                                <div class="progress-cont">
                                                    <span class="main-color progress-bar-text">96%</span>
                                                </div>
                                                <div class="progress-bar-skills">
                                                    <div class="progress-bar-line main-color-bg"
                                                         data-percent="96"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="progress-bar-linear">
                                                <p class="progress-bar-text">Laravel</p>
                                                <div class="progress-cont">
                                                    <span class="main-color progress-bar-text">90%</span>
                                                </div>
                                                <div class="progress-bar-skills">
                                                    <div class="progress-bar-line main-color-bg"
                                                         data-percent="90"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="progress-bar-linear">
                                                <p class="progress-bar-text">Bootstrap</p>
                                                <div class="progress-cont">
                                                    <span class="main-color progress-bar-text">92%</span>
                                                </div>
                                                <div class="progress-bar-skills">
                                                    <div class="progress-bar-line main-color-bg"
                                                         data-percent="92"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- End Row -->
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="teacher_shedule_list">
                                        <h3>My Shedule</h3>
                                        <ul class="list-unstyled teachers-time-shedule">
                                            <li>Monday <span>9AM - 3PM</span></li>
                                            <li>Tuesday <span>9AM - 3PM</span></li>
                                            <li>Wednesday <span>9AM - 3PM</span></li>
                                            <li>Thursday <span>9AM - 3PM</span></li>
                                            <li>Friday <span>9AM - 3PM</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row courses-instuctor">
                            <div class="col-sm-12">
                                <h3 class="courses-title">Courses By Martin</h3>
                                <div class="row item-margin">
                                    <div class="col-sm-6 instractor-single">
                                        <div class="instractor-courses-single">
                                            <div class="img-box">
                                                <img src="{{asset('frontend/images/teachars/latest-01.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="instractor-courses-text">
                                                <div class="instractor-parson">
                                                    <div class="parson-img">
                                                        <img src="{{asset('frontend/images/teachars/instractor-01.jpg')}}" alt=""
                                                             class="img-circle">
                                                    </div>
                                                    <p><a href="#">Derek Spafford</a> / <span>Professor</span></p>
                                                </div>
                                                <div class="text-bottom">
                                                    <h3><a href="#">Mathematics and Statistics</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at
                                                        ipsum at ligula vestibulum sodales Sed luctus.</p>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-user"></i>50 Students</li>
                                                    <li>$50.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-6 instractor-single">
                                        <div class="instractor-courses-single">
                                            <div class="img-box">
                                                <img src="{{asset('frontend/images/teachars/latest-02.jpg')}}" alt="" class="img-responsive">
                                            </div>
                                            <div class="instractor-courses-text">
                                                <div class="instractor-parson">
                                                    <div class="parson-img">
                                                        <img src="{{asset('frontend/images/teachars/instractor-01.jpg')}}" alt=""
                                                             class="img-circle">
                                                    </div>
                                                    <p><a href="#">Derek Spafford</a> / <span>Professor</span></p>
                                                </div>
                                                <div class="text-bottom">
                                                    <h3><a href="#">Mathematics and Statistics</a></h3>
                                                    <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at
                                                        ipsum at ligula vestibulum sodales Sed luctus.</p>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-user"></i>50 Students</li>
                                                    <li>$50.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection