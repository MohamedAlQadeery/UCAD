@extends('admin.index')
@section('content')



    @component('back-end.shared.edit',['modelSingleName'=>$modelSingleName,'modelPageDesc'=>$modelPageDesc])


        @slot('editForm')

            <form action="{{route('admin.'.$modelPluralName.'.update',$row->id)}}" method="POST">
                @csrf
                @method('PATCH')
                @include('back-end.'.$modelPluralName.'.form')

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">@lang('admin.update') </button>

                </div>
            </form>
        @endslot
    @endcomponent

    



@endsection
