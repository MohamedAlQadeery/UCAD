@extends('admin.index')
@section('content')

    @component('back-end.shared.table',['modelDesc'=>$modelDesc,'modelPluralName'=>$modelPluralName])

        @slot('table')

            <table class="table table-hover">
                @php $counter =1 ;@endphp

                <tbody>
                <tr>
                    <th>#</th>
                    <th>@lang('admin.subject')</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.email')</th>
                    <th>@lang('admin.status')</th>

                    <th>Options</th>
                </tr>

                @foreach($rows as $row)
                    <tr>
                        <td>{{$counter}}</td>
                        <td>{{$row->subject}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>
                            @if($row->read==0)
                                <span class="label label-warning"  style="font-size: 13px">@lang('admin.unread')</span>
                            @else
                                <span class="label label-success " style="font-size: 13px">@lang('admin.read')</span>
                            @endif
                        </td>
                        <td >

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
