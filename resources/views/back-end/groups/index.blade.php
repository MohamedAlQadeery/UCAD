@extends('admin.index')
@section('content')

    @component('back-end.shared.table',['modelDesc'=>$modelDesc,'modelPluralName'=>$modelPluralName])

        @slot('table')

            <table class="table table-hover">
                @php $counter =1 ;@endphp

                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Options</th>
                </tr>

                @foreach($rows as $row)
                    <tr>
                        <td>{{$counter}}</td>
                        <td>{{$row->name}}</td>

                        <td>
                            @include('back-end.shared.buttons.edit',['pluralModel'=>$modelPluralName,'row'=>$row])
                            @include('back-end.shared.buttons.delete',['pluralModel'=>$modelPluralName,'row'=>$row])
                        </td>

                    </tr>
                    @php $counter++; @endphp

                @endforeach
                </tbody>

            </table>

            {{$rows->links()}}
        @endslot



    @endcomponent



@endsection


