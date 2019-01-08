<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveJobPosts extends FormRequest
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
            'name_en' => 'required',
            'name_ar' => 'required',
            'category'=>'required|numeric|min:1',
            //'department_id'=>'required|numeric|min:1',
            'job_desc_en'=>'required|min:3|max:1000', 
            'job_desc_ar'=>'required|min:3|max:1000',

        ];
    }
}
