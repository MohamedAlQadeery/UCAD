<?php

namespace App\Http\Controllers\BackEnd;



use App\Front\Arpage;
use App\Http\Requests\BackEnd\Pages\StoreRequest;
use Illuminate\Database\Eloquent\Model;

class ArPagesController extends BackEndController
{
    //

    public function __construct(Arpage $model)
    {
        parent::__construct($model);
    }


    public function store(StoreRequest $request){
        $this->model->create($request->all());
        alert()->success('The Page Has Been Created Successfully', 'Success');
        return redirect()->route('admin.arpages.index');
    }

    public function update(StoreRequest $request,Arpage $arpage){
        $arpage->update($request->all());
        alert()->success('The Page Has Been updated Successfully', 'Success');
        return redirect()->route('admin.arpages.index');
    }



}
