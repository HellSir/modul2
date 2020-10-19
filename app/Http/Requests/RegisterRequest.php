<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     */
    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function rules()
    {
        return [
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'phone'=>'required|string|unique:users,phone',
            'document_number'=>'required|string|size:10|regex:/^[0-9]+$/',
            'password'=>'required|string'
        ];
    }
}
