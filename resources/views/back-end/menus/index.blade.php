@extends('admin.index')
@section('content')

    @component('back-end.shared.table',['modelDesc'=>$modelDesc , 'modelPluralName'=>$modelPluralName])

        @slot('table')

            <table class="table table-hover">
                @php $counter =1 ;@endphp

                <tbody>
                <tr>
                    <th>#</th>
                    <th>@lang('admin.arabic name')</th>
                    <th>@lang('admin.english name')</th>
                    <th>@lang('admin.status')</th>
                    <th style="text-align: center">@lang('admin.options')</th>
                </tr>

                @foreach($rows as $row)
                    <tr>
                        <td>{{$counter}}</td>
                        <td>{{$row->ar_name}}</td>
                        <td>{{$row->en_name}}</td>
                        <td>
                            @if($row->active==1)
                                Active
                            @else
                                Disabled
                            @endif

                        </td>
                        <td style="text-align: center">

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
