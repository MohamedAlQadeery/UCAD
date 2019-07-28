<div class="row">
    <div class="form-group col-md-6">
        <label for="name">@lang('admin.name')</label>
        <input type="text" class="form-control"  placeholder="Enter the name" name="name" value="{{isset($row)?$row->name : old('name')}} " required>
    </div>



    <div class="form-group col-md-6">
        <label >@lang('admin.meta_key')</label>
        <input type="text" class="form-control"   name="meta_key" value="{{isset($row)?$row->meta_key : old('meta_key')}} " required>
    </div>

    <div class="form-group col-md-6">
        <label>@lang('admin.meta_desc')</label>
        <textarea name="meta_desc" class="form-control" rows="2" placeholder="Enter ..." required> {{isset($row)?$row->meta_desc : old('meta_desc')}}</textarea>
    </div>

    <div class="form-group">
        <label for="">@lang('admin.type')</label>
        <div class="radio">
            <label>
                <input type="radio" name="type" id="optionsRadios1" value="0" {{isset($row) && $row->type ==0?'checked' : ''}}>
                @lang('admin.article')
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="type" id="optionsRadios2" value="1"{{isset($row) && $row->type ==1?'checked' : ''}}>
                @lang('admin.news')
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="type" id="optionsRadios3" value="2"{{isset($row) && $row->type ==2?'checked' : ''}} >
                @lang('admin.advertisement')
            </label>
        </div>
    </div>
</div>

    <div class="box box">
        <div class="box-header">
            <h3 class="box-title">@lang('admin.content')
                <small>@lang('admin.enter'.$modelSingleName.' content')</small>
            </h3>

            <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <textarea id="my-editor" name="content" class="form-control" required>{{isset($row)?$row->content : old('content')}}</textarea>
        </div>
    </div>






    <div class="clearfix"></div>

