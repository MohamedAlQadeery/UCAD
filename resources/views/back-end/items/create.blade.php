@extends('admin.index')
@section('content')


    @component('back-end.shared.create',['modelSingleName'=>$modelSingleName,'modelPageDesc'=>$modelPageDesc,'parent'=>$parent])

        @slot('createForm')


            <form action="{{route('admin.'.$modelPluralName.'.store',$parent)}}" method="POST">
                @csrf

                @include('back-end.items.form')

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">@lang('admin.create')</button>

                </div>

            </form>
            @endslot
    @endcomponent



@endsection
