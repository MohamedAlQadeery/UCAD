@extends('admin.index')
@section('content')


    @component('back-end.shared.create',['modelSingleName'=>$modelSingleName,'modelPageDesc'=>$modelPageDesc])

        @slot('createForm')

            <form action="{{route('admin.'.$modelPluralName.'.store')}}" method="POST">
                @csrf
                @include('back-end.'.$modelPluralName.'.form')
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">@lang('admin.create')</button>

                </div>

            </form>
            @endslot
    @endcomponent


@endsection

