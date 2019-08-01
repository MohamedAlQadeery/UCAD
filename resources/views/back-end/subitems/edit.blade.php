@extends('admin.index')
@section('content')




    @component('back-end.shared.edit',['modelSingleName'=>$modelSingleName,'modelPageDesc'=>$modelPageDesc])


        @slot('editForm')

            <form action="{{route('admin.'.$modelPluralName.'.update',[$parent,$row])}}" method="POST">
                @csrf
                @method('PATCH')
                @include('back-end.'.$modelPluralName.'.form')

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> @lang('admin.update')</button>

                </div>
            </form>
        @endslot
    @endcomponent


{{--    <div class="row">--}}

{{--        <div class="col-lg-12">--}}

{{--            <div class="box box-primary">--}}
{{--                <div class="box-header with-border">--}}
{{--                    <h3 class="box-title"> Add SubItem to {{$row->ar_name}} Item</h3>--}}
{{--                </div>--}}
{{--                <div class="box-body">--}}

{{--                    <form action="{{route('admin.subitems.store',[$row])}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @include('back-end.subitems.addItem')--}}

{{--                        <button type="submit" class="btn btn-primary">Add SubItem</button>--}}
{{--                    </form>--}}
{{--                </div>--}}


{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}








@endsection
