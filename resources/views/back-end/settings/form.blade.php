<div class="row">

    <div class="form-group col-md-4">
        <label>@lang('admin.email')</label>
        <input type="text" class="form-control" placeholder="Enter the name" name="email"
               value="{{isset($row)?$row->email : old('email')}} " required>
    </div>

    <div class="form-group col-md-4">
        <label for="name">@lang('admin.first phone number')</label>
        <input type="text" class="form-control" name="phone_number1"
               value="{{isset($row)?$row->phone_number1 : old('phone_number1')}} " required>
    </div>


    <div class="form-group col-md-4">
        <label>@lang('admin.second phone number') (@lang('admin.optional'))</label>
        <input type="text" class="form-control" name="phone_number2"
               value="{{isset($row)?$row->phone_number2 : old('phone_number2')}} ">
    </div>

    <hr>

    <div class="form-group col-md-4">
        <label>@lang('admin.location')</label>
        <input type="text" class="form-control" placeholder="Enter the name" name="location"
               value="{{isset($row)?$row->location : old('location')}} " required>
    </div>

    <div class="form-group col-md-4">
        <label for="name">@lang('admin.facebook') (@lang('admin.optional'))</label>
        <input type="text" class="form-control" placeholder="Enter the name" name="facebook"
               value="{{isset($row)?$row->facebook : old('facebook')}} " >

    </div>


    <div class="form-group col-md-4">
        <label>@lang('admin.twitter') (@lang('admin.optional'))</label>
        <input type="text" class="form-control" name="twitter" value="{{isset($row)?$row->twitter : old('twitter')}} "
               >
    </div>


    <div class="form-group col-md-4">
        <label>@lang('admin.instagram ') (@lang('admin.optional'))</label>
        <input type="text" class="form-control" placeholder="Enter the name" name="instagram "
               value="{{isset($row)?$row->instagram  : old('instagram')}} " >
    </div>

    <div class="form-group col-md-4">
        <label for="name">@lang('admin.mobile_number') (@lang('admin.optional'))</label>
        <input type="text" class="form-control" placeholder="Enter the name" name="mobile_number"
               value="{{isset($row)?$row->mobile_number : old('mobile_number')}} " >

    </div>


    <div class="form-group col-md-4">
        <label>@lang('admin.fax') (@lang('admin.optional')) </label>
        <input type="text" class="form-control" name="fax" value="{{isset($row)?$row->fax : old('fax')}} ">
    </div>


    <div class="form-group col-md-2">
        <label>@lang('admin.status')</label>
        <select id="item_ar_page" name="status" class="form-control">
            <option value="1" selected>@lang('admin.enable')</option>

            <option value="0">@lang('admin.disable')</option>

        </select>
    </div>

    <div class="form-group col-md-2">
        <label>@lang('admin.default lang')</label>
        <select id="item_ar_page" name="default_lang" class="form-control">
            <option value="ar" selected>@lang('admin.arabic')</option>
            <option value="en">@lang('admin.english')</option>

        </select>
    </div>


</div>




<div class="clearfix"></div>

