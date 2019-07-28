<?php

namespace App\Http\Controllers\BackEnd;



use App\Front\Setting;
use App\Http\Requests\BackEnd\Settings\StoreRequest;
use Illuminate\Database\Eloquent\Model;

class SettingsController extends BackEndController
{
    //
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }


    public function update(StoreRequest $request,Setting $setting){
        $setting->update($request->all());
        alert()->success('The Settings Has Been updated Successfully', 'Success');
        return redirect()->route('admin.settings.edit',$setting->id);
    }


}
