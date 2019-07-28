<?php

namespace App\Http\Requests\BackEnd\Settings;

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
            //
            'email'=>'required|email|min:5',
            'phone_number1'=>'required|min:9|max:15',
            'phone_number2'=>'nullable|min:9|max:15',
            'location'=>'required|string',
            'mobile_number'=>'nullable|min:9|max:15',
            'facebook'=>'nullable|string',
            'twitter'=>'nullable|string',
            'instagram'=>'nullable|string'


        ];
    }
}
