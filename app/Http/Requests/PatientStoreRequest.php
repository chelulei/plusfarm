<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
class PatientStoreRequest extends FormRequest
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
            'user_id'    => 'required',
            'type'    => 'required',
            'idno'    => 'nullable',
            'name' => 'required|string|max:255',
            'age'    => 'required',
            'sex'    => 'required',
            'status'    => 'required',
            'address'    => 'required',
            'date_birth'    => 'required',
            'weight'    => 'nullable',
            'height'    => 'nullable',
            'course'    => 'nullable',
            'year'    => 'nullable',
            'religion'    =>'nullable',
            'work'    =>'nullable',
            'name2'    => 'required',
           'contact' => 'required',
                // array(
                //     'required',
                //     'regex:/^(09|\+639)\d{9}$/u'
                // ),
            'address2'    => 'required',
            'allergies'    => 'nullable',
            'illness'    => 'nullable',
            'medics'    => 'nullable',
            'hospital'    => 'nullable'


    ];

    }
}
