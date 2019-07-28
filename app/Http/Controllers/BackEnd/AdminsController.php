<?php

namespace App\Http\Controllers\BackEnd;

use App\Front\User;
use App\Http\Requests\BackEnd\Admins\UpdateRequest;
use Illuminate\Http\Request;
use App\Http\Requests\BackEnd\Admins\StoreRequest;
class AdminsController extends BackEndController
{

    public function __construct(User $model)
    {

        parent::__construct($model);

        $this->middleware("web");

    }


    public function store(StoreRequest $request){

        $requestArray = $request->all();
        $requestArray['password']= bcrypt($requestArray['password']);
        $this->model->create($requestArray);
        alert()->success("Added" , "you have been add an admin");
        return redirect("admin/admins");
    }

    public function update(UpdateRequest $request , $id)
    {
        $update =   User::where("id" , $id)->update($request->except([ "password", '_method',"_token","password_confirmation" , "group"]));
        alert()->success("Updated" , "you have been Updated an admin");

        return redirect()->route('admin.admins.index');
    }


    public function showRegistrationForm()
    {
        return view('back-end/admins/create' , [
            'modelSingleName'=>'Admin',
            'modelPageDesc'=>"Create Admin Form",
            'modelPluralName'=>'admins'
        ]);
    }


    public function getPluralModelName()
    {

        return "admins";
    }


    /**
     * return single model Name
     * @return string
     */
    public function getSingleModelName()
    {
        return "Admin";
    }

}
