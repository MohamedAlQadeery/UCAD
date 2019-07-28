<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Enpage;
use App\Http\Requests\BackEnd\Pages\StoreRequest;

class EnPagesController extends BackEndController
{
    //

    public function __construct(Enpage $model)
    {
        parent::__construct($model);
    }


    public function store(StoreRequest $request){
        $this->model->create($request->all());
        alert()->success('The Page Has Been Created Successfully', 'Success');
        return redirect()->route('admin.enpages.index');
    }

    public function update(StoreRequest $request,Enpage $enpage){
        $enpage->update($request->all());
        alert()->success('The Page Has Been updated Successfully', 'Success');
        return redirect()->route('admin.enpages.index');
    }

}
