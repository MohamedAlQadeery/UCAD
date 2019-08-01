@extends('admin.index')
@section('content')

    @component('back-end.shared.table',['modelDesc'=>$modelDesc,'modelPluralName'=>$modelPluralName])


        @slot('search')
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" placeholder="@lang('admin.search')"
                               class="form-control">
                    </div>


                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('admin.search')</button>
                        <a href="{{ route('admin.items.create',$parent->id) }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('admin.create_item')</a>


                    </div>
                </div>
            </form>

        @endslot

        @slot('table')

            <table class="table table-hover">
                @php $counter =1 ;@endphp

                <tbody>
                <tr>
                    <th>#</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.status')</th>
                    <th>@lang('admin.related_subitems')</th>

                    <th style="text-align: center">@lang('admin.options')</th>
                </tr>

                @foreach($rows as $row)
                    <tr>
                        <td>{{$counter}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                            @if($row->active==1)
                                Active
                            @else
                                Disabled
                            @endif

                        </td>
                        <td><a href="{{route('admin.subitems.index',$row->id)}}" class="btn btn-primary btn-sm">@lang('admin.related_items')</a></td>


                        <td>

                            <a  href="{{route('admin.items.edit',[$row->getParent()->id,$row->id])}}"  style="float: left"  rel="tooltip" title="" class="btn btn-success" data-original-title="Edit {{$modelName }}">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form action="{{route('admin.items.destroy',[$row->getParent()->id,$row])}}" method="post" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('delete')
                                <button type="submit" rel="tooltip" style="margin-left:5px " title="" class="btn btn-danger" data-original-title="Remove {{$modelName}}">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>

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
