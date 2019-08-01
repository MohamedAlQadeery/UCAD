@extends('admin.index')
@section('content')

    @component('back-end.shared.table',['modelDesc'=>$modelDesc , 'modelPluralName'=>$modelPluralName])

        @slot('search')
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="search" placeholder="@lang('site.search')"
                               class="form-control">
                    </div>

                    <div class="col-md-3">
                        <select name="lang" class="form-control">
                            <option value="" disabled selected>@lang('admin.choose_language')</option>
                            <option value="ar">@lang('admin.arabic')</option>
                            <option value="en">@lang('admin.english')</option>

                        </select>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('admin.search')</button>
                        <a href="{{ route('admin.menus.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('admin.create')</a>



                    </div>
                </div>
            </form>

        @endslot

        @slot('table')

            <table class="table table-hover">

                <tbody>

                <tr>
                    <th>#</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.status')</th>
                    <th>@lang('admin.related_items')</th>
                    <th >@lang('admin.options')</th>
                </tr>

                @foreach($rows as $index => $row)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                            @if($row->active==1)
                               @lang('admin.active')
                            @else
                                @lang('admin.disabled')
                            @endif

                        </td>
                        <td><a href="{{route('admin.items.index',$row->id)}}" class="btn btn-primary btn-sm">@lang('admin.related_items')</a></td>

                        <td >

                            @include('back-end.shared.buttons.edit',['pluralModel'=>$modelPluralName,'row'=>$row])

                            @include('back-end.shared.buttons.delete',['pluralModel'=>$modelPluralName,'row'=>$row])

                        </td>

                    </tr>

                @endforeach
                </tbody>


            </table>

            {{$rows->links()}}
        @endslot

    @endcomponent


@endsection
