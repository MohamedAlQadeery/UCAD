<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Latest Messages</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                @php $counter =1 ;@endphp
                <thead>
                <tr>
                    <th>#</th>
                    <th>@lang('admin.subject')</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.email')</th>
                    <th>@lang('admin.status')</th>
                </tr>
                </thead>
                <tbody>

                @foreach($rows as $row)
                    <tr>
                        <td>{{$counter}}</td>

                        <td> <a href="{{route('admin.messages.edit',$row->id)}}">{{$row->subject}}</a></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>
                            @if($row->read==0)
                                <span class="label label-warning"  style="font-size: 13px">@lang('admin.unread')</span>
                            @else
                                <span class="label label-success " style="font-size: 13px">@lang('admin.read')</span>
                            @endif
                        </td>
                    <tr>

                        @endforeach


                    </tr>

                </tbody>
            </table>

        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <a href="{{route('admin.messages.index')}}" class="btn btn-sm btn-default btn-flat pull-right">View All Messages</a>
    </div>
    <!-- /.box-footer -->
</div>
