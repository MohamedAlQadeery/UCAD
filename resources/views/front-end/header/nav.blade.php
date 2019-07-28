<div id="sticky-wrapper" class="sticky-wrapper" style="height: 105px;">
    <nav class="navbar edu-navbar">
        <div class="container">
            {{--شعار الكلية و الاسم--}}
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('home')}}" class="navbar-brand  data-scroll"><img
                            src="{{asset('frontend/images/logo.png')}}" alt=""><span
                            style="color: #0a0a0a">@lang('front.cda')</span></a>
            </div>
            {{--محتويات ال navbar--}}
            <div class="collapse navbar-collapse edu-nav main-menu navbar-right" id="bs-example-navbar-collapse-1"
                 style="float:left">
                <ul class="nav navbar-nav pull-right">
                    @isset($menus)
                        @foreach($menus as $menu)
                            @if($menu->active == 1)
                                <span style="display: none">{{$menu_name = app()->getLocale()== 'ar' ? $menu->ar_name : $menu->en_name}}</span>
                                <li class="{{request()->is(strtolower($menu->en_name)) ? 'active' : ''}}">
                                    {{--عشان اللغه العربيه و تحويل ال شسمه من اليمين للشمال--}}
                                    <a data-scroll=""
                                       href="{{$menu->en_name == 'Home' ? route('front.home') : '#' }}">{{$menu_name}}</a>
                                    <ul class="dropdown list-unstyled">

                                        @isset($items)
                                            @foreach($items as $item)
                                                <span style="display: none">{{$item_name = app()->getLocale()== 'ar' ? $item->ar_name : $item->en_name}}</span>
                                                <span style="display: none">{{$item_id = app()->getLocale()== 'ar' ? $item->arpage_id : $item->enpage_id}}</span>

                                                @if($menu->id == $item->menu_id && $item->active == 1)
                                                    <li class="dropdown-list-box-02">
                                                        @if(!$subitems->where('item_id',$item->id)->isEmpty())
                                                            <a href="#">{{$item_name}}
                                                                <i class="fa fa-angle-right menu-icon"></i> </a>
                                                        @else
{{--                                                            <a href="{{route('front.'.strtolower($menu->en_name),['id' => $item_id])}}">{{$item_name}}</a>--}}
                                                           <a href="{{route('front.'.strtolower($menu->en_name),['id' => $item_id])}}">{{$item_name}}</a>

{{--                                                            <a href="{{route('front.pages.show',[$item->arPage->id,$item->arPage->getLang()])}}"></a>--}}

                                                            {{-- <a href="{{route('front.home',['id' => $item_id])}}">{{$item_name}}</a>--}}
                                                            {{--                                                            <a href="{{ locale_route('home') }}">{{$item_name}}</a>--}}

                                                        @endif
                                                        @isset($subitems)
                                                            <ul class="dropdown-list_2 list-unstyled">
                                                                @foreach($subitems as $subitem)
                                                                    <span style="display: none">
                                                            {{$subitem_name = app()->getLocale()== 'ar' ? $subitem->ar_name : $subitem->en_name}}</span>
                                                                    <span style="display: none">
                                                            {{$subitem_id = app()->getLocale()== 'ar' ? $subitem->arpage_id : $subitem->enpage_id}}</span>
                                                                    @if($item->id == $subitem->item_id && $subitem->active == 1)
                                                                        <li>
                                                                            {{--   <a href="{{route('front.'.strtolower($menu->en_name),['id'=>$subitem_id])}}">--}}
                                                                            {{--  {{$subitem_name}}</a>--}}
                                                                            <a href="{{route('front.home',['id'=>$subitem_id])}}">
                                                                                {{$subitem_name}}</a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endisset
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endisset
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    @endisset
                    {{--اللغه--}}
                    <li class="navlang"><a data-scroll=""
                                           href="#">{{app()->getLocale() == 'en' ? 'Lang' : 'اللغة'}}</a>
                        <ul class="dropdown list-unstyled">
                            <li>
                                <a data-scroll=""
                                   href="{{route('lang',['front.lang'=>'ar'])}}">{{app()->getLocale() == 'en' ? 'Arabic' : 'العربية'}}</a>
                            </li>
                            <li>
                                <a data-scroll=""
                                   href="{{route('lang',['front.lang'=>'en'])}}">{{app()->getLocale() == 'en' ? 'English' : 'الانجليزية'}}</a>
                            </li>
                        </ul>
                    </li>
                    {{--البحث--}}
                    <li><a data-scroll="" href="#"><i
                                    class="fa fa-search search_btn"></i></a>
                        <div id="search">
                            <button type="button" class="close">×</button>
                            <form>
                                <input type="search" value="" placeholder="Search here...."
                                       required="">
                                <button type="submit" class="btn btn_common blue">Search
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</div>

