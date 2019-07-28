<section class="students-say-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header">
                    <h2>What Students Parent SAY</h2>
                </div><!-- ends: .section-header -->
            </div>
        </div>

        <div class="row">
            <div class="img-full-box">
                <div class="col-sm-3 col-sm-offset-4">
                    <div class="carousel-images slider-nav">

                        {{--                        @foreach($carousel_images as $ci)--}}
                        {{--                            @if($loop->index < $carousel_images->count())--}}
                        {{--                                <div>--}}
                        {{--                                    <img src="{{asset('frontend/images/index/stu-parent-01.jpg')}}" alt="1"--}}
                        {{--                                         class="img-responsive img-circle">--}}
                        {{--                                </div>--}}
                        {{--                            @endif--}}
                        {{--                        @endforeach--}}

                        <div>
                            <img src="{{asset('frontend/images/index/stu-parent-01.jpg')}}" alt="1"
                                 class="img-responsive img-circle">
                        </div>
                        <div>
                            <img src="{{asset('frontend/images/index/stu-parent-02.jpg')}}" alt="2"
                                 class="img-responsive img-circle">
                        </div>
                        <div>
                            <img src="{{asset('frontend/images/index/stu-parent-03.jpg')}}" alt="3"
                                 class="img-responsive img-circle">
                        </div>
                        <div>
                            <img src="{{asset('frontend/images/index/stu-parent-04.jpg')}}" alt="3"
                                 class="img-responsive img-circle">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 col-sm-offset-2">
                <div class="carousel-text slider-for">

{{--                    @foreach($rows as $row)--}}
{{--                        <div class="single-box">--}}
{{--                            <p>{{$row->content}}</p>--}}
{{--                            <ul class="list-unstyled rank-icons">--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                                <li><i class="fa fa-star"></i></li>--}}
{{--                            </ul>--}}
{{--                            <h3>{{$row->name}}</h3>--}}
{{--                            <span>{{$row->student_name}}, {{$row->relation_type}}</span>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

                    <div class="single-box">
                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibh euismod
                            tincidunt ut laoreet dolor you magna aliquam eratm volutpat. Ut wisiyp oenim adefra miniumyp
                            veniam, quis nostrud exerci tation ullavolutpat ipsum.</p>
                        <ul class="list-unstyled rank-icons">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <h3>Jhonthan Smith</h3>
                        <span>Alexis, Parents</span>
                    </div>

                    <div class="single-box">
                        <p>Maecenas ut dui vitae magna vestibulum fermentum ut non est. Fusce finibus viverra enim, et
                            laoreet metus fringilla sit amet. Ut dui nunc, aliquet ut malesuada sit amet, sagittis
                            aliquam laoreet lorem. In hac habitasse platea dictumst.</p>
                        <ul class="list-unstyled rank-icons">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <h3>Jhon Doe</h3>
                        <span>Martin, Parent</span>
                    </div>

                    <div class="single-box">
                        <p>Aenean at leo hendrerit, congue erat ut, volutpat felis. Suspendisse et sapien purus. Aenean
                            tincidunt diam ac magna scelerisque dapibus. Quisque non elit et justo tristique semper. Sed
                            a urna eros. Etiam tempus tempus leo vel aliquam.</p>
                        <ul class="list-unstyled rank-icons">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <h3>Jhonthan Smith</h3>
                        <span>Alexis, Parents</span>
                    </div>

                    <div class="single-box">
                        <p>Cras ut ipsum et erat accumsan aliquam. Cras feugiat eu dolor a imperdiet. Vestibulum ornare,
                            nunc a pulvinar pellentesque, mi ipsum elementum velit, lobortis convallis lacus ipsum eget
                            nisl. Mauris eget est lorem praesent et metus laoreet.</p>
                        <ul class="list-unstyled rank-icons">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <h3>Jessica Alaba</h3>
                        <span>Martin, Parent</span>
                    </div>
                </div>
            </div><!-- /.block-text -->
        </div>
        <!--./End row-->
    </div>
</section>