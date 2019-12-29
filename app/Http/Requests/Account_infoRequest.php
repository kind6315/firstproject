<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Account_infoRequest extends FormRequest
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
            'account'=> 'required|unique:account_info',
            'name'=> 'required',
            'sex'=> 'required',
            'birth'=> 'required',
            'mail' =>  'required|email|unique:account_info',
        ];
    }
}
