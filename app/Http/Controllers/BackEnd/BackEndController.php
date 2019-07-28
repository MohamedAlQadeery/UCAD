<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BackEndController extends Controller
{
    //


    protected $model;



    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $rows = $this->model->paginate(10);
        $modelName = $this->getSingleModelName();
        $modelPluralName = $this->getPluralModelName();
        $modelDesc = ucfirst($modelPluralName) . ' Control Page';
        $with = $this->with();

        if(!empty($with)){

            $rows =  $this->model->with($with)->paginate(10);

        }

        return view('back-end.' . $this->getPluralModelName() . '.index',
            [
                'rows' => $rows,
                'modelName' => $modelName,
                'modelPluralName' =>$modelPluralName,
                'modelDesc' => $modelDesc

            ]);
    }
    /*
         *
         * gets the pluarl of the model name and make it lower case
         */


    public function create(){
        $modelSingleName = $this->getSingleModelName();
        $modelPageDesc =$modelSingleName. " Create Page";
        $modelPluralName = $this->getPluralModelName();

        $append = $this->append();

        return view('back-end.'.$modelPluralName.'.create',
            [
                'modelSingleName' =>$modelSingleName,
                'modelPluralName'=>$modelPluralName,
                'modelPageDesc'=>$modelPageDesc

            ])->with($append);

    }


    public function edit($id){

        $row = $this->model->findOrFail($id);
        $modelSingleName = $this->getSingleModelName();
        $modelPageDesc =$modelSingleName. " Edit Page";
        $modelPluralName = $this->getPluralModelName();
        $append = $this->append();

        return view('back-end.'.$modelPluralName.'.edit',
            [
                'modelSingleName' =>$modelSingleName,
                'modelPluralName'=> $modelPluralName,
                'modelPageDesc'=>$modelPageDesc,
                'row'=>$row
            ])->with($append);

    }


//    public function show($id)
//    {
//        $row = $this->model->findOrFail($id);
//
//        return view('back-end.' . $this->getPluralModelName() . '.show', ['row' => $row]);
//    }

    public function destroy($id)
    {
        try{
            $row=  $this->model->findOrFail($id);

        }catch (ModelNotFoundException $exception){
            alert()->Error('There Was An Error Occurred', 'Error');
            return redirect()->route($this->model.$this->getPluralModelName().'.index');
        }
        $row->delete();
        alert()->success('The '.$this->getSingleModelName().' Has Been Deleted Successfully', 'Success');
        return redirect()->route($this->getPluralModelName().'.index');
    }

    public function getPluralModelName()
    {

        return str_plural(strtolower($this->getSingleModelName()));
    }


    /**
     * return single model Name
     * @return string
     */
    public function getSingleModelName()
    {
        return class_basename($this->model);
    }

    /**
     * this function used for eager loading
     * @return array
     */
    protected function with(){
        return [];
    }


    /**
     * use this function to append any model
     * @return array
     */
    protected function append(){
        return [];
    }




}
