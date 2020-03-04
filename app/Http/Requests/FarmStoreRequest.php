<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FarmStoreRequest extends FormRequest
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
            'farm_name'=>'required',
            'size'=>'required',
            'ownership'=>'required',
			'soiltype'=>'required',
            'soilph'=>'required',
            'humidity'=>'required',
            'mechanization'=>'required',
            'county'=>'required',
            'sub_county'=>'required',
            'ward'=>'required',
            'street'=>'required',

        ];

    }


}
