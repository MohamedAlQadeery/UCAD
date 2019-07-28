@extends('front-end.page_master_layout')
@section('title',$page->name)
@if(lang() == 'en')
    @push('css')
        <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style-page.css')}}">
    @endpush
@endif
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
                    <div class="col-sm-9">
                        <div class="single-courses_v">
                            <div class="single-curses-contert">
                                <div class="description-content">
                                    {!! $page->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

