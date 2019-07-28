<div class="row">

    <div class="form-group col-md-4">
        <label for="name">@lang('admin.name')</label>
        <input type="text" class="form-control" name="name" value="{{isset($row)?$row->name : old('name')}} " disabled>
    </div>


    <div class="form-group col-md-4">
        <label>@lang('admin.subject')</label>
        <input type="text" class="form-control" name="subject" value="{{isset($row)?$row->subject : old('subject')}} "
               disabled>
    </div>

    <div class="form-group col-md-4">
        <label>@lang('admin.email')</label>
        <input type="email" class="form-control" name="email" value="{{isset($row)?$row->email : old('email')}} "
               disabled>
    </div>


    <div class="form-group col-md-12">
        <label>@lang('admin.message content')</label>
        <textarea name="body" class="form-control" rows="10" disabled>{{isset($row)?$row->body : old('body')}}</textarea>
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

    <form action="{{route('admin.messages.replay',$row->id)}}" method="post">
        @csrf
        <div class="box-body pad">
            <textarea id="my-editor" name="message" class="form-control"
                      required>@lang('admin.enter your message here')</textarea>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">@lang('admin.replay')</button>

        </div>

    </form>

</div>


<div class="clearfix"></div>

