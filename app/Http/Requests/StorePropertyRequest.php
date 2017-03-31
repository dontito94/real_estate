<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
            'propertyName'=>'required|max:255',
            'region'=>'required|max:255',
            'plotNo'=>'required|max:255',
            'floorNo'=>'required|max:255',
            'status'=>'required|max:500',

        ];
    }
}