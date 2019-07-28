@extends('front-end.page_master_layout')
@isset($subject)
    {{--    <span style="display:none;">{{$subject->name = lang() == 'ar' ? $subject->arname : $subject->enname}}</span>--}}
    @section('title',$subject->name)
@section('header')
    @component('front-end.header.pageHeader',['page_header'=>$subject->name])
        <span class=""><a href="#">@lang('front.subjects')</a></span>
        <span class="b-active"><i class="fa fa-angle-right"></i> {{$subject->name}}</span>
    @endcomponent
@endsection
@section('content')
    <div class="single-courses_v">
        <div class="single-courses-area">
            <div class="container">
                <div class="row">
                    {{--الجزء الرئيسي للصفحة--}}
                    @includeIf('front-end.subjects.subjectContent.mainBar.mainBar')
                    {{--الجزء الجانبي للصفحة--}}
                    @includeIf('front-end.subjects.subjectContent.sideBar.sideBar')
                </div>
            </div>
        </div>
    {{--كورسات متعلقه ب المساق--}}
    @includeIf('front-end.subjects.subjectContent.relatedCourses')
    <!-- ./ End Courses Area section -->
    </div>
@endsection
@endisset
