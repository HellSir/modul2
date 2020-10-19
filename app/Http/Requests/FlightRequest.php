<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *
     */
    /**
     * Get the validation rules that apply to the request.
     *
     *
     */
    public function rules()
    {
        return [
            'from'=>'required|exists:airports,iata',
            'to'=>'required|exists:airports,iata',
            'data1'=>'required|data-format:Y-m-d',
            'data2'=>'data_format:Y-m-d',
            'passengers'=>'required|digits_between:1,8'
        ];
    }
}
