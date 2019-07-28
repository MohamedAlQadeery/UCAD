<!-- Preloader -->
{{--<div id="preloader">--}}
{{--    <div id="status">&nbsp;</div>--}}
{{--</div>--}}
<div class="header-top">
    <div class="container">
        <div class="row">
            @isset($settings)

            <div class="col-sm-6 col-xs-12 header-top-left">
                <ul class="list-unstyled">
                     <li><i class="fa fa-phone top-icon"></i> {{$settings[0]->phone_number1}}</li>
                     <li><i class="fa fa-envelope top-icon"></i> {{$settings[0]->email}}</li>
                </ul>
            </div>
            <div class="col-sm-6 col-xs-12 header-top-right">
                <ul class="list-unstyled">
                    <li><a href="register.html"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
                    <li><a href="login.html"><i class="fa fa-lock top-icon"></i>Login</a></li>
                </ul>
            </div>
                @endisset
        </div>
    </div>
</div>
