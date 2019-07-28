<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <title>@yield('title')</title>
    @includeIf('front-end.header.header_meta')
    @stack('css')
</head>
<body class="home_version_01">
<header id="header">
    @includeIf('front-end.header.headerTop')
    <div class="header-body">
        @includeIf('front-end.header.nav')
        @yield('header')
    </div>
    @yield('header1')
</header>
<!-- Home page Content -->
@yield('body')
<!-- Footer Content -->
@includeIf('front-end.footer.footer')
@includeIf('front-end.footer.footer_meta')
</body>
@stack('js')
</html>