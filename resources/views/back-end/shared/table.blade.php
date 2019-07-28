<div class="box">
    <div class="box-header">
        <h3 class="box-title">@lang('admin.'.$modelDesc)</h3>
        @if($modelPluralName=='arpages' || $modelPluralName=='enpages')

            <div class="box-tools">
                <div class="input-group input-group-md" style="width: 150px;">
                    <form action="{{route('admin.'.$modelPluralName.'.index')}}" method="GET">
                        <input type="text" name="name" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
 @endif 
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        {{$table}}
    </div>
    <!-- /.box-body -->
</div>
