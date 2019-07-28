@extends('admin.index')
@section('content')



    @component('back-end.shared.edit',['modelSingleName'=>$modelSingleName,'modelPageDesc'=>$modelPageDesc])


        @slot('editForm')


                @include('back-end.'.$modelPluralName.'.form')


        @endslot
    @endcomponent




@endsection
