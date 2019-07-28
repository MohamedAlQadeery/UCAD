@php
    $angle = Session::get('lang') == "ar" ? "left" : "right"
@endphp
<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        @include('admin.layout.menu')
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('design/adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{--}}{{ admin()->user()->name }}{{--}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>


            <li class=" {{ active_menu('')[0] }}">
                <a href="{{url('admin')}}">
                    <i class="fa fa-list"></i> <span>{{ trans('admin.dashboard') }}</span>
                    <span class="pull-{{ $angle }}-container">
          </span>
                </a>
            </li>


            <li class="treeview {{ active_menu('admin')[0] }}">
                <a href="#">
                    <i class="fa fa-users"></i> <span>{{ trans('admin.admin') }}</span>
                    <span class="pull-{{ $angle }}-container">
        <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i>
      </span>
                </a>
                <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
                    {{--<li class="">
                        <a href="{{ aurl('admin/admins') }}"><i class="fa fa-users"></i> @lang('admin.show')</a>
                    </li>

                    <li class="">
                        <a href='{{route('admin.registerForm')}}"><i class="fa fa-plus"></i> @lang('admin.create') </a>
                    </li>--}}
                </ul>
            </li>



            <li class="treeview {{ active_menu('admin')[0] }}">
                <a href="#">
                    <i class="fa fa-group"></i> <span>{{ trans('admin.group') }}</span>
                    <span class="pull-{{ $angle }}-container">
        <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i>
      </span>
                </a>

                <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
                    <li class="">
                        <a href="{{route('admin.groups.index') }}"><i class="fa fa-users"></i> @lang('admin.showGroups')</a>
                    </li>

                    <li class="">
                            <a href="{{route('admin.groups.create')}}"><i class="fa fa-plus"></i> @lang('admin.createGroup') </a>
                        </li>
                </ul>
            </li>



            <li class="treeview {{ active_menu('cities')[0] }}">
                <a href="#">
                    <i class="fa fa-building"></i> <span>{{ trans('admin.menus') }}</span>
                    <span class="pull-right-container">
        <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i>
      </span>
                </a>

                <ul class="treeview-menu" style="{{ active_menu('cities')[1] }}">
                    <li class=""><a href="{{route('admin.menus.index')}}"><i
                                class="fa fa-building"></i> {{ trans('admin.menusIndex') }}</a></li>
                    <li class=""><a href="{{route('admin.menus.create')}}"><i
                                class="fa fa-plus"></i> {{ trans('admin.createMenu') }}</a></li>

                    @foreach(\App\Front\Menu::all() as $menu)
                        <li class="treeview {{ active_menu('cities')[0] }}">
                            <a href="#">
                                <i class="fa fa-building"></i>
                                <span>{{app()->getLocale()=='ar'?$menu->ar_name : $menu->en_name}}</span>
                                <span class="pull-right-container">
                                <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i></span></a>
                            <ul class="treeview-menu" style="{{ active_menu('cities')[1] }}">
                                <li class="">
                                    <a href="{{route('admin.items.index',$menu->id)}}"><i class="fa fa-building"></i> @lang('admin.showItems')</a>
                                    <a href="{{route('admin.items.create',$menu->id)}}"><i class="fa fa-plus"></i>@lang("admin.addItem")</a>
                                    @foreach($menu->items as $item)
                                        <a href="{{route('admin.items.edit',[$item->menu->id,$item->id])}}"><i
                                                class="fa fa-building"></i>
                                            <span>{{app()->getLocale()=='ar'?$item->ar_name : $item->en_name}}</span>
                                        </a>
                                @if($item->subitems->count())
                                    @foreach($item->subitems as $subitem)
                                        <li class=""><a
                                                href="{{route('admin.subitems.edit',[$subitem->item->id,$subitem->id])}}"><i
                                                    class="fa fa-search"></i> {{$subitem->ar_name}}</a>
                                        </li>
                                    @endforeach
                                 @endif
                                @endforeach
                            </ul>
                            @endforeach
                        </li>
                </ul>
                <!-- show all menus  and if press any menu display create item form-->
            </li>

            <li class="treeview {{ active_menu('admin')[0] }}">
                <a href="#">
                    <i class="fa fa-window-restore"></i> <span>@lang('admin.pages')</span>
                    <span class="pull-{{ $angle }}-container">
        <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i>
      </span>
                </a>
                <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
                    <li class=""><a href="{{route('admin.pages.index')}}"><i class="fa fa-users"></i>@lang('admin.showAllPages')
                    <li class=""><a href="{{route('admin.pages.create')}}"><i class="fa fa-plus"></i>@lang('admin.createPage')
                        </a></li>
                </ul>
            </li>




            <li class="treeview {{ active_menu('admin')[0] }}">
                <a href="#">
                    <i class="fa fa-sliders"></i> <span>@lang('admin.slider')</span>
                    <span class="pull-{{ $angle }}-container">
        <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i>
      </span>
                </a>
                <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
                    <li class=""><a href="#"><i class="fa fa-users"></i>@lang('admin.showSliders')
                    <li class=""><a href="#"><i class="fa fa-plus"></i>@lang('admin.createSilder')
                        </a></li>
                </ul>
            </li>




            <li class="treeview {{ active_menu('admin')[0] }}">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>@lang('admin.messages')</span>
                    <span class="pull-{{ $angle }}-container">
        <i class="fa fa-angle-{{ $angle }} pull-{{ $angle }}"></i>
      </span>
                </a>
                <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
                    <li class=""><a href="{{route('admin.messages.index')}}"><i class="fa fa-users"></i>@lang('admin.showMessages')
                        </a></li>
                    <li class=""><a href="{{route('admin.applications.index')}}"><i class="fa fa-users"></i>@lang('admin.showApplications')
                        </a></li>
                </ul>
            </li>



            <li class=""><a href="{{ aurl('admin/albam') }}">
                    <i class="fa fa-folder"></i> <span>{{ trans('admin.albam') }}</span>
                    <span class="pull-{{ $angle }}-container">
                  </span>
                </a>
            </li>


            
            <li class=""><a href="{{ aurl('admin/settings/1/edit') }}">
                <i class="fa fa-cog"></i> <span>{{ trans('admin.settings') }}</span>
                <span class="pull-{{ $angle }}-container">
                  </span>
            </a>
        </li>


        </ul>





    </section>
    <!-- /.sidebar -->
</aside>
