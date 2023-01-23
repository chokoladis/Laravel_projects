<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrateRequest extends FormRequest
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
            'fio'  => 'required|min:2|max:120',
            'email'   => 'required|min:8|max:70|email:rfc,filter,dns',
            'password' => 'required|min:6',
            'password_conf' => 'required|same:password',
        ];
    }
}
