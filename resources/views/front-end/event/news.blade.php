@extends('front-end.page_master_layout')
@section('title','News')
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>'News'])
        <span class="b-active">News</span>
    @endcomponent
@endsection
@section('content')
    <div class="blog_1">
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    {{--Newssss--}}
                    <div class="col-sm-8 bolg_side-left">
                        @foreach($news as $row)
                            <div class="col-sm-12 single-item-box">
                                <div class="single-item">
                                    <div class="img-box">
                                        <a href="#"><img src="{{asset('frontend/images/blog/blog-02.jpg')}}" alt=""
                                                         class="img-responsive"></a>
                                        <span><a href="#" class="overlay"></a></span>
                                        <div class="img-caption">
                                            <p class="date"><span>22</span><span>Aug</span></p>
                                        </div>
                                    </div>
                                    <div class="single-text-box">
                                        <h3><a href="#">{{$row->name}}</a></h3>
                                        <ul class="list-unstyled">
                                            <li><a href="#">By Admin</a></li>
                                            <li><a href="#">22Aug, 2018</a></li>
                                            <li><a href="#">20 comments</a></li>
                                            <li><a href="#">122 likes</a></li>
                                        </ul>
                                        <p>{{$row->content}}</p>
                                        <div class="blog-btn-box">
                                            <a href="{{route('front.single.news',['id'=>$row->id])}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-sm-12 single-item-box">
                            <div class="blog-comment">
                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                    est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, magnam dolor
                                    sit amet, consectetur adipisicing…</p>
                                <span>Jhone Done</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    {{--sider content--}}
                    <div class="col-sm-4 blog_side-right">
                        <div class="sidebar-content">
                            {{--categories--}}
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="categories-item">
                                        <h3>Categories</h3>
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Branding <span>(23)</span></a>
                                            </li>
                                            <li><a href="#"><i
                                                            class="fa fa-angle-right"></i>Advices<span>(23)</span></a>
                                            </li>
                                            <li><a href="#"><i
                                                            class="fa fa-angle-right"></i>Advices<span>(23)</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Audio<span>(23)</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Uncategorized
                                                    <span>(23)</span></a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Video <span>(23)</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{--other content--}}
                            <div class="row">
                                {{--Social Widget--}}
                                <div class="col-sm-12">
                                    <div class="social-icon">
                                        <h3>Social Widget</h3>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li><a href="#" class="rss"><i class="fa fa-rss"></i>rss feed</a>
                                                    </li>
                                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i>Follow
                                                            us</a></li>
                                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i>like
                                                            us</a></li>
                                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i>follow
                                                            us</a></li>
                                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i>follow
                                                            us</a></li>
                                                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i>plus
                                                            1 us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--Recent Works--}}
                                <div class="col-sm-12 recent-work">
                                    <h3>Recent Works</h3>
                                    <div class="blog-img-wrapper owl-carousel owl-theme" id="bolg-carousel-01"
                                         style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 2160px; left: 0px; display: block;">
                                                <div class="owl-item" style="width: 360px;">
                                                    <div class="item">
                                                        <div class="row-padding-bottom">
                                                            <img src="images/blog/recent-work-01.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-02.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-03.jpg" alt=""
                                                                 class="img-responsive">
                                                        </div>
                                                        <div class="row-padding-bottom">
                                                            <img src="images/blog/recent-work-04.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-05.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-06.jpg" alt=""
                                                                 class="img-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 360px;">
                                                    <div class="item">
                                                        <div class="row-padding-bottom">
                                                            <img src="images/blog/recent-work-01.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-02.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-03.jpg" alt=""
                                                                 class="img-responsive">
                                                        </div>
                                                        <div class="row-padding-bottom">
                                                            <img src="images/blog/recent-work-04.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-05.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-06.jpg" alt=""
                                                                 class="img-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 360px;">
                                                    <div class="item">
                                                        <div class="row-padding-bottom">
                                                            <img src="images/blog/recent-work-01.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-02.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-03.jpg" alt=""
                                                                 class="img-responsive">
                                                        </div>
                                                        <div class="row-padding-bottom">
                                                            <img src="images/blog/recent-work-04.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-05.jpg" alt=""
                                                                 class="img-responsive">
                                                            <img src="images/blog/recent-work-06.jpg" alt=""
                                                                 class="img-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="owl-controls clickable">
                                            <div class="owl-buttons">
                                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--Recent Posts--}}
                                <div class="col-sm-12 recent-post-01">
                                    <h3>Recent Posts</h3>
                                    <div class="row">
                                        <div class="col-sm-12 recent-single">
                                            <div class="recent-content-item">
                                                <div class="img-box"><a href="#"><img src="images/blog/recent-01.jpg"
                                                                                      alt=""></a></div>
                                                <div class="recent-text pull-right">
                                                    <a href="#">There are many variaons of are many ...</a>
                                                    <p>22Aug, 2018 <span class="content"><i class="fa fa-comments"></i>12</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- /.recent-single-item -->

                                        <div class="col-sm-12 recent-single">
                                            <div class="recent-content-item">
                                                <div class="img-box"><a href="#"><img src="images/blog/recent-01.jpg"
                                                                                      alt=""></a></div>
                                                <div class="recent-text pull-right">
                                                    <a href="#">There are many variaons of are many ...</a>
                                                    <p>22Aug, 2018 <span class="content"><i class="fa fa-comments"></i>12</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- /.recent-single-item -->

                                        <div class="col-sm-12 recent-single">
                                            <div class="recent-content-item">
                                                <div class="img-box"><a href="#"><img src="images/blog/recent-01.jpg"
                                                                                      alt=""></a></div>
                                                <div class="recent-text pull-right">
                                                    <a href="#">There are many variaons of are many ...</a>
                                                    <p>22Aug, 2018 <span class="content"><i class="fa fa-comments"></i>8</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- /.recent-single-item -->

                                        <div class="col-sm-12 recent-single">
                                            <div class="recent-content-item">
                                                <div class="img-box"><a href="#"><img src="images/blog/recent-01.jpg"
                                                                                      alt=""></a></div>
                                                <div class="recent-text pull-right">
                                                    <a href="#">There are many variaons of are many ...</a>
                                                    <p>22Aug, 2018 <span class="content"><i class="fa fa-comments"></i>15</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- /.recent-single-item -->
                                    </div>
                                </div>
                                {{--tags--}}
                                <div class="col-sm-12">
                                    <h3>Populer tags</h3>
                                    <div class="populer-tags">
                                        <div class="tagcloud">
                                            {!! $keywords = $news->pluck('keywords')->first()!!}

                                            {{--                                            <a href="#">{{$key}}</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
