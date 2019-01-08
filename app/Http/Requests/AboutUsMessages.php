<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsMessages extends FormRequest
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
            'page_title_en' =>'required_without:page_title_ar',
            'page_title_ar' =>'required_without:page_title_en',
            'message_en'=>'required_without:message_ar',
            'message_ar'=>'required_without:message_en',
            'profile_image'=> 'required',
        ];
    }
}
