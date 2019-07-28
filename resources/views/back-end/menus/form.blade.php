<div class="row">
    <div class="form-group col-md-6">
        <label for="ar_name"> {{trans($modelSingleName.'.Arname')}}</label>
        <input type="text" class="form-control" id="ar_name" placeholder="Enter the arabic name" name="ar_name" value="{{isset($row)?$row->ar_name : ''}} ">
    </div>

    {{--    <div id="addI"></div>--}}
    {{--    <button class="btn btn-primary" type="button" id="btnPH" >{{ trans('admin.addPH') }}</button>--}}


    <div class="form-group col-md-6">
        <label for="en_name">{{ trans($modelSingleName.'.Enname') }} </label>
        <input type="text" class="form-control"  name="en_name" id="en_name" placeholder="Enter the english name" value="{{isset($row)?$row->en_name : ''}} " >
    </div>


    <div class="form-group col-md-4">
        <label for="">@lang('admin.status')</label>
        <div class="radio ">
            <label>
                <input type="radio" name="active" id="optionsRadios1" value="1" {{isset($row) && $row->type ==1?'checked' : ''}}>
                @lang('admin.active')
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="active" id="optionsRadios2" value="0"{{isset($row) && $row->type ==0?'checked' : ''}}>
                @lang('admin.disable')
            </label>
        </div>
    </div>

</div>











    <div class="clearfix"></div>

