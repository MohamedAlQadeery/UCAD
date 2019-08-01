<div class="row">
    <div class="form-group col-md-6">
        <label for="name">@lang('admin.name')</label>
        <input type="text" class="form-control"  placeholder="Enter the name" name="name" value="{{isset($row)?$row->name : old('name')}} " required>
    </div>



    <div class="form-group col-md-6 ">
        <label>@lang('admin.language')</label>
        <select  name="lang" class="form-control">
            <option value="ar" selected>@lang('admin.arabic')</option>
            <option value="en" >@lang('admin.english')</option>
        </select>
    </div>
</div>

<div class="form-group col-md-4">
    <label for="">@lang('admin.status')</label>
    <div class="radio ">
        <label>
            <input type="radio" name="active" id="optionsRadios1" value="1" {{isset($row) && $row->active ==1?'checked' : ''}}>
            @lang('admin.active')
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="active" id="optionsRadios2" value="0"{{isset($row) && $row->active ==0?'checked' : ''}}>
            @lang('admin.disable')
        </label>
    </div>
</div>











<div class="clearfix"></div>















