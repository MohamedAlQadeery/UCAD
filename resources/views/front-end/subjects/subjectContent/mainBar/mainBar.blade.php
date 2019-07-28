<div class="col-sm-8 sidebar-left">
    <div class="single-curses-contert">
        {{--        اسم المساق او الماده--}}
        <h2>{{$subject->name}}</h2>
        {{--        معلومات المدرس--}}
        <div class="review-option">
            <div class="row">
                {{--                اسم الدكتور او الاستاذ و صورته--}}
                <div class="col-sm-3 col-xm-12 teacher-info border-left review-item-singel">
                    <img src="{{asset('frontend/images/index/teachar-s-01.jpg')}}" alt="" class="img-circle">
                    <div class="teacher-name">
                        <span>@lang('front.teacher')</span><br><span>سعيد سبانخ</span>
                    </div>
                </div>
                {{--تقييمه ب النجوم--}}
                <div class="col-sm-3 col-xm-12  review-rank border-left  review-item-singel">
                    <span>@lang('front.review')</span>
                    <div class="rank-icons">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-star review-icon"></i></li>
                            <li><i class="fa fa-star review-icon"></i></li>
                            <li><i class="fa fa-star review-icon"></i></li>
                            <li><i class="fa fa-star review-icon"></i></li>
                            <li><i class="fa fa-star review-icon"></i></li>
                            <li><i class="fa fa-star review-icon"></i></li>
                            <li><span>(8 @lang('front.reviews'))</span></li>
                        </ul>
                    </div>
                </div>
                {{--المساق الذي يدرسه--}}
                <div class="col-sm-2 col-xm-12  categories border-left  review-item-singel">
                    <span>همممم</span>
                    <span>المادة الفلانيه</span>
                </div>
                {{--عدد الطلاب عنده--}}
                <div class="col-sm-2 col-xm-12 students_105 border-left  review-item-singel">
                    <span>@lang('front.students')</span>
                    <span>105</span>
                </div>
            </div>
        </div>
        {{--        صوره ما مع كلام --}}
        <div class="details-img-bxo">
            <img src="{{asset('frontend/images/Single_cources/curses-details.jpg')}}" alt="" class="img-responsive">
        </div>
        {{--         عن المساق--}}
        <div class="description-content">
            {!! $subject->content !!}
        </div>
        {{--فيديوهات للمساق دروس مصوره--}}
        <div class="curriculum-text-box">
            <h2>Curriculum: </h2>
            <div class="curriculum-section">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title click">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"
                                   class="">
                                    Section 1: Welcome to the Courses<span>0/5</span></a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="row curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"
                                   class="collapsed">
                                    Section 2: How to use Wordpress<span>0/4</span></a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"
                                   class="collapsed">
                                    Section 3: Final chapters<span>0/3</span></a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  curriculum-single">
                                    <div class="con-sm-12">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="lecture">
                                                    <span><i class="fa fa-file-text-o"></i>Lecture 2. 1</span>
                                                    <span><i class="fa fa-clock-o"></i>Duration: 30mins</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="lecture-btn pull-right">
                                                    <a href="#">Preview</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- .curriculum-section-text END -->
            </div>
        </div>
        {{--   مراجعه و تقييم و حجات     --}}
        <div class="review-content">
            <h2>Reviews</h2>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="five-star-rating">
                                <div class="rating-box">
                                    <span class="five">5</span>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>8 Ratings</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 rating-btom-colum">
                            <div class="row">
                                <div class="col-sm-12 rating-btom-padding">
                                    <div class="right-rating-text">
                                        <span>5 Stars</span>
                                        <span class="rating-color-yellow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12 rating-btom-padding">
                                    <div class="right-rating-text">
                                        <span>4 Stars</span>
                                        <span class="right-rating-color"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12 rating-btom-padding">
                                    <div class="right-rating-text">
                                        <span>3 Stars</span>
                                        <span class="right-rating-color"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12 rating-btom-padding">
                                    <div class="right-rating-text">
                                        <span>2 Stars</span>
                                        <span class="right-rating-color"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12 rating-btom-padding">
                                    <div class="right-rating-text">
                                        <span>1 Stars</span>
                                        <span class="right-rating-color"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        تعليقات للمساق او شيء هيك  لناس--}}
        <div class="comments">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Comments</h3>
                    <div class="row">
                        <div class="col-sm-12 comment-single-item">
                            <div class="col-sm-2 img-box">
                                <img src="{{asset('frontend/images/index/stu-parent-01.jpg')}}" alt=""
                                     class="img-circle">
                            </div>
                            <div class="col-sm-10 comment-left-bar">
                                <div class="comment-text">
                                    <ul class="list-unstyled">
                                        <li class="name">James Smith
                                            <div class="comment-author">
                                                <ul class="list-unstyled">
                                                    <li>Rated:</li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-date">20 July 2018 AT 10.45 AM</li>
                                    </ul>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Maecenas in finibus neque. Vivamus in ipsum quis elit
                                        vehicula tempus vitae quis lacus. Vestibulum interdum diam
                                        non mi cursus venenatis. Morbi lacinia libero et elementum
                                        vulputate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 comment-single-item">
                            <div class="col-sm-2 img-box">
                                <img src="{{asset('frontend/images/index/stu-parent-02.jpg')}}" alt=""
                                     class="img-circle">
                            </div>
                            <div class="col-sm-10 comment-left-bar">
                                <div class="comment-text">
                                    <ul class="list-unstyled">
                                        <li class="name">James Smith
                                            <div class="comment-author">
                                                <ul class="list-unstyled">
                                                    <li>Rated:</li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-date">20 July 2018 AT 10.45 AM</li>
                                    </ul>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Maecenas in finibus neque. Vivamus in ipsum quis elit
                                        vehicula tempus vitae quis lacus. Vestibulum interdum diam
                                        non mi cursus venenatis. Morbi lacinia libero et elementum
                                        vulputate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 comment-single-item">
                            <div class="col-sm-2 img-box">
                                <img src="{{asset('frontend/images/index/stu-parent-03.jpg')}}" alt=""
                                     class="img-circle">
                            </div>
                            <div class="col-sm-10 comment-left-bar">
                                <div class="comment-text">
                                    <ul class="list-unstyled">
                                        <li class="name">James Smith
                                            <div class="comment-author">
                                                <ul class="list-unstyled">
                                                    <li>Rated:</li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="comment-date">20 July 2018 AT 10.45 AM</li>
                                    </ul>
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Maecenas in finibus neque. Vivamus in ipsum quis elit
                                        vehicula tempus vitae quis lacus. Vestibulum interdum diam
                                        non mi cursus venenatis. Morbi lacinia libero et elementum
                                        vulputate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        عشان تعلق--}}
        <div class="leave_a_comment">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Leave A Comment</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="input-label">name</label>
                                            <input type="text" placeholder="Enter your name"
                                                   id="name" name="name" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="input-label">E-mail</label>
                                            <input type="email" placeholder="Enter your E-mail"
                                                   name="email" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="input-label">Website</label>
                                            <input type="text" placeholder="https://" name="web"
                                                   required>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="input-label">Message</label>
                                            <textarea placeholder="Type your comment" name="message"
                                                      required></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
