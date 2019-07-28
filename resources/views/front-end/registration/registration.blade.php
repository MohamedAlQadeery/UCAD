@extends('front-end.page_master_layout')
@section('title',''.$page->name)
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>$page->name])
        <span class="b-active">{{$page->name}}</span>
    @endcomponent
@endsection
@section('content')
    <div class="single-courses_v">
        <div class="single-courses-area">
            <div class="container">
                <div class="row">
                    {{--الوصف و حجات هيك يلي بعدها مع التعداد--}}
                    <div class="col-sm-9 sidebar-righ">
                        <div class="single-courses_v">
                            <div class="single-curses-contert">
                                <div class="description-content">
                                    <h2>Description: </h2>
                                    <p>{{$page->content}}</p>
                                    <div class="requirements">
                                        <h3>Requirements</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li>Lens of landscape theory and design
                                                        practice.
                                                    </li>
                                                    <li>Research the conditions of urbanism.</li>
                                                    <li>Employ advanced design techniques.</li>
                                                    <li>Innovative methodologies.</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li>Lens of landscape theory and design
                                                        practice.
                                                    </li>
                                                    <li>Research the conditions of urbanism.</li>
                                                    <li>Employ advanced design techniques.</li>
                                                    <li>Innovative methodologies.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="count-list">
                                        <h3>Learning Outcomes</h3>
                                        <ol class="list-unstyled">
                                            <li>Over 37 lectures and 55.5 hours of content!</li>
                                            <li>Live project end to end software testing training
                                                Included.
                                            </li>
                                            <li>Learn Software Testing and Automation basics from a
                                                professional
                                                trainer from your own desk.
                                            </li>
                                            <li>Information packed practical training starting from
                                                basics
                                                to
                                                advanced testing techniques.
                                            </li>
                                            <li>Best suitable for beginners to advanced level users
                                                and who
                                                learn faster when demonstrated.
                                            </li>
                                            <li>Course content designed by considering current
                                                software
                                                testing
                                                technology and the job market.
                                            </li>
                                            <li>Practical assignments at the end of every session.
                                            </li>
                                            <li>Practical learning experience with live project work
                                                and
                                                examples.
                                            </li>
                                            <li>Lorem ipsum dolor sit amet consectetuer adipiscing
                                                elit sed
                                                diam
                                                nonummy nibh.
                                            </li>
                                        </ol>
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

