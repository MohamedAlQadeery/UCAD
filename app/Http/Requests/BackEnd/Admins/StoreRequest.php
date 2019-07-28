<?php

namespace App\Http\Requests\BackEnd\Admins;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {



        return [
            'name'=>['required','min:3'],
            'email'=>['required','email','unique:users'],
            'password'=>'required|confirmed',
            'phone'=>['required'],
            'status'=>['required',"min:0" , "max:2"],
            'group'=>['required']
        ];
    }
}
