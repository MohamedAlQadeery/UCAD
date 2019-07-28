<div class="row">


    <div class="form-group col-md-4">
        <label>@lang('admin.full name')</label>
        <input type="text" class="form-control" name="name" value="{{isset($row)?$row->name :''}} " disabled>
    </div>

    <div class="form-group col-md-4">
        <label>@lang('admin.subject')</label>
        <input type="text" class="form-control" name="subject" value="{{isset($row)?$row->subject->name : ''}} "
               disabled>
    </div>

    <div class="form-group col-md-4">
        <label>@lang('admin.student type')</label>

        <input type="email" class="form-control" name="type" value="{{$studentType}}"
               disabled>
    </div>


    @if($row->type=='0')
        <div class="form-group col-md-4">
            <label>@lang('admin.college')</label>
            <input type="text" class="form-control" name="college" value="{{isset($row)?$row->college : ''}} " disabled>
        </div>
        <div class="form-group col-md-4">
            <label>@lang('admin.student_number')</label>
            <input type="text" class="form-control" name="student_number"
                   value="{{isset($row)?$row->student_number: ''}} " disabled>
        </div>
    @endif

    <div class="form-group col-md-4">
        <label>@lang('admin.age')</label>
        <input type="text" class="form-control" name="subject" value="{{isset($row)?$row->age : ''}} "
               disabled>
    </div>

    <div class="form-group col-md-4">
        <label>@lang('admin.location')</label>
        <input type="text" class="form-control" name="location" value="{{isset($row)?$row->location : ''}} "
               disabled>
    </div>

    <div class="form-group col-md-4">
        <label>@lang('admin.phone')</label>
        <input type="text" class="form-control" name="phone" value="{{isset($row)?$row->phone : ''}} "
               disabled>
    </div>

    <div class="form-group col-md-4">
        <label>@lang('admin.mobile')</label>
        <input type="text" class="form-control" name="mobile" value="{{isset($row)?$row->mobile : ''}} "
               disabled>
    </div>


    <div class="form-group col-md-4">
        <label>@lang('admin.email')</label>
        <input type="text" class="form-control" name="email" value="{{isset($row)?$row->email : ''}} "
               disabled>
    </div>


</div>


<hr>
<div class="box box">
    <div class="box-header">
        <h3 class="box-title">@lang('admin.replay')
            <small>@lang('admin.replay message')</small>
        </h3>

        <!-- /. tools -->
    </div>
    <!-- /.box-header -->

    <form action="{{route('admin.applications.replay',$row->id)}}" method="post">
        @csrf
        <div class="box-body pad">
            <div class="form-group">
                <label>{{trans($modelSingleName.'.status')}}</label>
                <select name="status" class="form-control">
                    <option value="0">@lang('admin.accepted')</option>
                    <option value="1">@lang('admin.rejected')</option>
                    <option value="3">@lang('admin.delayed')</option>

                </select>
            </div>

            <textarea id="my-editor" name="message" class="form-control"
                      required>@lang('admin.enter your message here')</textarea>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">@lang('admin.replay')</button>

        </div>

    </form>

</div>


<div class="clearfix"></div>

