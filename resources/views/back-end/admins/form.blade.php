<div class="row">

   <div class="form-group col-md-6">
        <label for="name">@lang('admin.name')</label>
        <input type="text" class="form-control"  placeholder="Enter the name" name="name" value="{{isset($row)?$row->name : old('name')}} " >
    </div>
</div>


<div class="row">

    <div class="form-group col-md-6">
        <label for="email">@lang('admin.email')</label>
        <input type="text" class="form-control"  placeholder="Enter the email" name="email" value="{{isset($row)?$row->email : old('email')}} " >
    </div>
</div>

<div class="row">

    <div class="form-group col-md-6">
            <label for="phone">@lang('admin.phone')</label>
            <input type="text" class="form-control"  placeholder="Enter the Phone" name="phone" value="{{isset($row)?$row->phone : old('phone')}} " >
        </div>
</div>


    @if(\Request::segment(2) =="create")
<div class="row">

        <div class="form-group col-md-6">
                <label for="passsword">@lang('admin.password')</label>
                <input type="password" class="form-control"  placeholder="Enter the Password" name="password" >
            </div>
    </div>

    <div class="row">

    <div class="form-group col-md-6">

        <label for="password_confirmation">@lang('admin.password_confirmation')</label>
        <input type="password" class="form-control"  placeholder="" name="password_confirmation" >
    </div>
</div>
@endif


<div class="row">

        @php
           if(isset($row) &&$row->status==1){
                $status = 1;
           }elseif (isset($row) && $row->status==0) {
                $status = 0;
           }else{
                $status = 3;
           }
        @endphp

        <div class="form-group col-md-2">
                <label for="status">@lang('admin.status')</label>
                    <select class="form-control" name="status" id="">
                            <option {{$status==1?"selected":""}}   value="1">@lang('admin.active')</option>
                            <option {{$status==0?"selected":""}} value="0">@lang('admin.inActive')</option>
                    </select>
            </div>
    </div>

<div class="row">

        <div class="form-group col-md-2">
                <label for="group">@lang('admin.group')</label>
                    <select class="form-control" name="group" id="">
                            <option  value="1">@lang('admin.group')</option>
                            <option value="0">@lang('admin.group')</option>
                    </select>
            </div>
    </div>
<div class="clearfix"></div>
