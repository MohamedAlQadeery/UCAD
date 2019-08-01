<div class="row">
    <div class="form-group col-md-6">
        <label for="ar_name"> {{trans($modelSingleName.'.name')}}</label>
        <input type="text" class="form-control" id="ar_name" placeholder="Enter the arabic name" name="name"
               value="{{isset($row)?$row->name : old('name')}} ">
    </div>

    {{--    <div id="addI"></div>--}}
    {{--    <button class="btn btn-primary" type="button" id="btnPH" >{{ trans('admin.addPH') }}</button>--}}

    <div class="form-group col-md-6">
        <label>@lang('admin.pages')</label>
        <select name="page_id" class="form-control">
            @isset($row->page)
                <option value="{{$row->page->id}}">{{$row->page->name}}</option>
            @else
                <option value="" selected>None</option>

            @endisset
            @foreach($pages as $page)
                <option value="{{$page->id}}">{{$page->name}}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group col-md-4">
        <label for="">@lang('admin.status')</label>
        <div class="radio ">
            <label>
                <input type="radio" name="active" id="optionsRadios1"
                       value="1" {{isset($row) && $row->active ==1?'checked' : ''}}>
                @lang('admin.active')
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="active" id="optionsRadios2"
                       value="0"{{isset($row) &&$row->active ==0?'checked' : ''}}>
                @lang('admin.disable')
            </label>
        </div>
    </div>


</div>
<hr>


<div class="clearfix"></div>

