<div class="row">
    <div class="form-group col-md-12">
        <label for="ar_name"> {{trans($modelSingleName.'.Arname')}}</label>
        <input type="text" class="form-control" id="ar_name" placeholder="Enter the arabic name" name="ar_name" value="{{isset($row)?$row->ar_name : old('ar_name')}} ">
    </div>

    {{--    <div id="addI"></div>--}}
    {{--    <button class="btn btn-primary" type="button" id="btnPH" >{{ trans('admin.addPH') }}</button>--}}


    <div class="form-group col-md-12">
        <label for="en_name">{{ trans($modelSingleName.'.Enname') }} </label>
        <input type="text" class="form-control"  name="en_name" id="en_name" placeholder="Enter the english name" value="{{isset($row)?$row->en_name : old('en_name')}} " >
    </div>






    <div class="form-group col-md-4">
        <label>Item Arabic Pages  </label>
        <select id="item_ar_page" name="arpage_id" class="form-control">
                @isset($row->arPage)
                <option value="{{$row->arPage->id}}">{{$row->arPage->name}}</option>
                    @else
                <option value="" selected>None</option>

            @endisset
            @foreach($arPages as $arpage)
                <option value="{{$arpage->id}}">{{$arpage->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-4">
        <label>Item English Pages (optional) </label>
        <select  id="item_en_page" name="enpage_id" class="form-control en_page">
            @isset($row->enPage)
                <option value="{{$row->enPage->id}}">{{$row->enPage->name}}</option>
            @else
                <option value="" selected>None</option>

            @endisset
            @foreach($enPages as $enpages)
                <option value="{{$enpages->id}}">{{$enpages->name}}</option>
            @endforeach
        </select>
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
                <input type="radio" name="active" id="optionsRadios2" value="0"{{isset($row) &&$row->active ==0?'checked' : ''}}>
                @lang('admin.disable')
            </label>
        </div>
    </div>



</div>
<hr>





    <div class="clearfix"></div>

