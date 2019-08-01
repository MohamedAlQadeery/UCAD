<div class="row">

    <div class="col-lg-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> @lang('admin.'.$modelPageDesc) @isset($parent->name){{$parent->name}} @endisset</h3>
            </div>
            <div class="box-body">
                {{$createForm}}

            </div>



        </div>



    </div>

</div>
