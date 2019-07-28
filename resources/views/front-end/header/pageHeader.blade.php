<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="intro-text ">
                <h1>{{$page_header}}</h1>
                <p><span><a href="{{route('home')}}">@lang('front.home') <i class="fa fa-angle-right"></i></a></span>
                     {{$slot}}</p>
            </div>
        </div>
    </div><!-- /.row -->
</div>