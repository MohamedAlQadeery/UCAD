@extends('admin.index')
@section('content')

    @component('back-end.shared.table',['modelDesc'=>$modelDesc,'modelPluralName'=>$modelPluralName])


        @slot('search')
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="search" placeholder="@lang('admin.search')"
                               class="form-control">
                    </div>

                    <div class="col-md-2">
                        <select name="lang" class="form-control" >
                            <option value="" disabled selected >@lang('admin.choose_language')</option>
                            <option value="ar">@lang('admin.arabic')</option>
                            <option value="en">@lang('admin.english')</option>

                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="type" class="form-control" >
                            <option value="" disabled selected >@lang('admin.choose_type')</option>
                            <option value="0">@lang('admin.article')</option>
                            <option value="1">@lang('admin.news')</option>
                            <option value="2">@lang('admin.advertisement')</option>

                        </select>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>@lang('admin.search')</button>
                        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary  " style="{{app()->getLocale()=='ar'?'margin-right: 160px;':'margin-left:160px;'}}"><i class="fa fa-plus"></i> @lang('admin.create_page')</a>


                    </div>
                </div>
            </form>

        @endslot



        @slot('table')

            <table class="table table-hover">
                @php $counter =1 ;@endphp

                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Page Title</th>
                    <th>Type</th>

                    <th>Options</th>
                </tr>

                @foreach($rows as $row)
                    <tr>
                        <td>{{$counter}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                            @if($row->type==0)
                                {{trans('admin.article')}}
                            @elseif($row->type==1)
                                {{trans('admin.news')}}
                            @else
                                {{trans('admin.advertisement')}}

                            @endif

                        </td>
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


