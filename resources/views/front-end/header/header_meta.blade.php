<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="@yield('meta_description')">
<meta name="keywords" content="@yield('meta_keyword')">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/assets/bootstrap.min.css')}}">
@if(lang()== 'ar')
    <link rel="stylesheet" href="{{asset('frontend/css/assets/rtl/bootstrap-rtl.min.css')}}">
@endif
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('frontend/css/assets/font-awesome.min.css')}}">
<!-- Popup -->
<link rel="stylesheet" href="{{asset('frontend/css/assets/magnific-popup.css')}}">
<!-- Revolution Slider -->
<link rel="stylesheet" href="{{asset('frontend/css/assets/revolution/layers.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/assets/revolution/navigation.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/assets/revolution/settings.css')}}">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">
<!-- Slick Slider -->
<link href="{{asset('frontend/css/assets/slick.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/assets/slick-theme.css')}}" rel="stylesheet">
<!-- Mean Menu-->
<link rel="stylesheet" href="{{asset('frontend/css/assets/meanmenu.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
<!-- owl corousel -->
<link href="{{asset('frontend/css/assets/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/assets/owl.theme.css')}}" rel="stylesheet">
<!-- rtl files -->
@if(lang() == 'ar')
    <link href="{{asset('frontend/css/assets/rtl/style-ar.css')}}" rel="stylesheet">
@endif