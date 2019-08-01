<form   action="{{route('admin.'.$pluralModel.'.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are you sure?');">
    @csrf
    @method('delete')
    <button type="submit" rel="tooltip" title=""  style="margin-right:8px " class="btn btn-danger" data-original-title="Remove {{$modelName}}">
        <i class="fa fa-times"></i>
    </button>
</form>


{{--<a  rel="tooltip" title=""  style="margin-left:5px " class="btn btn-danger delete-{{$modelName}}">--}}
{{--    <i class="fa fa-times"></i>--}}
{{--    <input type="hidden" value="{{$modelName}}" id="modelName">--}}
{{--    <input type="hidden" value="{{$row->id}}" id="id">--}}

{{--</a>--}}


@push('js')

    @endpush
