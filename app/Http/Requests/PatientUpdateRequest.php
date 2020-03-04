<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
class PatientUpdateRequest extends FormRequest
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
            'work'    =>'nullable',
            'religion'    =>'nullable',
            'name2'    => 'required',
            'contact'    => 'required',
            'address2'    => 'required',
            'allergies'    => 'nullable',
            'illness'    => 'nullable',
            'medics'    => 'nullable',
            'hospital'    => 'nullable'
        ];
    }
}
