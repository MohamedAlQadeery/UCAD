<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from ecologytheme.com/theme/eduread/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 08:54:33 GMT -->
<title>@yield('title')</title>
@includeIf('front-end.header.header_meta')
<!--Page title-->

<body class="courses mean-container">
    <!-- PreLoader - TopHeader - nav bar - Slider -->
    <header id="header">
        @includeIf('front-end.header.headerTop')
        <div class="header-body">
            <!--==================Nav bar===================-->
            @includeIf('front-end.header.nav')
            @yield('header')
        </div>
    </header>
    <!-- Home page Content -->
    @yield('body')
    <!-- Footer Content -->
    @includeIf('front-end.footer.footer')
    @includeIf('front-end.footer.footer_meta')
</body>
<!-- Mirrored from ecologytheme.com/theme/eduread/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Aug 2018 08:54:34 GMT -->

</html>