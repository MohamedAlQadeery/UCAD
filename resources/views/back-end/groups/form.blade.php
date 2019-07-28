

    <div class="">
        <label class="" for="name">@lang('admin.groupName')</label>
        <input type="text" name="name">
    </div>
    <br>



<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">@lang('admin.adminAndGroupRole')</a></li>
        <li><a href="#tab_2" data-toggle="tab">@lang("admin.menusRole")</a></li>
        <li><a href="#tab_3" data-toggle="tab">@lang("admin.messagesRole")</a></li>
        <li><a href="#tab_4" data-toggle="tab">@lang("admin.galleryRole")</a></li>
        <li><a href="#tab_5" data-toggle="tab">@lang("admin.sliderRole")</a></li>
    </ul>
    <div class="tab-content">

        @php

        $role = "role[]";

        @endphp

        <div class="tab-pane active" id="tab_1">

            <label class="" for=""> @lang("admin.showRole")</label>
            <input name="{{$role}}" value="1" type="checkbox" >

            <label class="" for=""> @lang('admin.createRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label class="" for=""> @lang('admin.editRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label class="" for=""> @lang('admin.deleteRole')</label>
            <input name="{{$role}}" value="3" type="checkbox" >

        </div>

        <div class="tab-pane" id="tab_2">

            <label class="" for=""> @lang("admin.showRole")</label>
            <input name="{{$role}}" value="1" type="checkbox" >

            <label class="" for=""> @lang('admin.createRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label class="" for=""> @lang('admin.editRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >


            <label  for=""> @lang('admin.deleteRole')</label>
            <input name="{{$role}}" value="3" type="checkbox" >
        </div>


        <div class="tab-pane" id="tab_3">
            <label  for=""> @lang("admin.showRole")</label>
            <input name="{{$role}}" value="1" type="checkbox" >

            <label  for=""> @lang('admin.createRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label  for=""> @lang('admin.editRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label for=""> @lang('admin.deleteRole')</label>
            <input name="{{$role}}" value="3" type="checkbox" >

        </div>

        <div class="tab-pane" id="tab_4">

            <label  for=""> @lang("admin.showRole")</label>
            <input name="{{$role}}" value="1" type="checkbox" >

            <label  for=""> @lang('admin.createRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label  for=""> @lang('admin.editRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label  for=""> @lang('admin.deleteRole')</label>
            <input name="{{$role}}" value="3" type="checkbox" >
        </div>


        <div class="tab-pane" id="tab_5">

            <label  for=""> @lang("admin.showRole")</label>
            <input name="{{$role}}" value="1" type="checkbox" >

            <label  for=""> @lang('admin.createRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label for=""> @lang('admin.editRole')</label>
            <input name="{{$role}}" value="2" type="checkbox" >

            <label  for=""> @lang('admin.deleteRole')</label>
            <input name="{{$role}}" value="3" type="checkbox" >

           </div>

        </div>
    </div>
