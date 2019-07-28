@extends('front-end.master_layout')
<!-- Title for home page-->
@section('title','Home Page')
<!-- Slider -->
@section('header1')
    <!--==================SliderTop===================-->
    @includeIf('front-end.homePage.slider')
@endsection
<!-- Home page Content -->
@section('body')
    @includeIf('front-end.homePage.content.content')
@endsection