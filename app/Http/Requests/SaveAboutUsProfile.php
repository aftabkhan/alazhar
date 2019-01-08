<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveAboutUsProfile extends FormRequest
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
            'page_title_en' =>'required_without:page_title_ar',
            'page_title_ar' =>'required_without:page_title_en',
            'profile_en'=>'required_without:profile_ar',
            'profile_ar'=> 'required_without:profile_en',
            'profile_image'=> 'required',
        ];
    }
}
