<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Page;
use App\Http\Requests\BackEnd\Pages\StoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController  extends BackEndController
{
    //

    public function __construct(Page $model)
    {
        parent::__construct($model);
    }


    public function store(StoreRequest $request){
        $this->model->create($request->all());
        alert()->success('The Page Has Been Created Successfully', 'Success');
        return redirect()->route('admin.pages.index');
    }

    public function update(StoreRequest $request,Page $page){
        $page->update($request->all());
        alert()->success('The Page Has Been updated Successfully', 'Success');
        return redirect()->route('admin.pages.index');
    }



}
