<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveDoctors extends FormRequest
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
                    'name_en'=>'required_without:name_ar',
                    'name_ar'=>'required_without:name_en',
                    'email'=>'required|email|unique:users,email,'.$this->id,
                    'mobile'=>'required|numeric|digits:10',
                    'department_id'=>'required|numeric|min:1',
                    'timing_id'=>'required|numeric|min:1'
        ];
    }
}
