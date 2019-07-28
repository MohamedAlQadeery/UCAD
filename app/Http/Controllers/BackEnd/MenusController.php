<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\Arpage;
use App\Front\Enpage;
use App\Front\Menu;
use App\Http\Requests\BackEnd\Menus\StoreRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class MenusController extends BackEndController
{
    //
    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }



    public function store(StoreRequest $request){

        $this->model->create($request->all());
        alert()->success('The Menu Has Been Created Successfully', 'Success');
        return redirect()->route('admin.admin.menus.index');
    }


    public function update(StoreRequest $request,$id){
       try{
         $row=  $this->model->findOrFail($id);

       }catch (ModelNotFoundException $exception){
           alert()->Error('There Was An Error Occurred', 'Error');
           return redirect()->route('admin.menus.index');
       }


       $row->update($request->all());
        alert()->success('The Menu Has Been Updated Successfully', 'Success');
        return redirect()->route('admin.menus.index');

    }



    protected function append()
    {
        $array=[
            'arPages'=>Arpage::all(),
            'enPages'=>Enpage::all()
        ];

        return $array;
    }




}
