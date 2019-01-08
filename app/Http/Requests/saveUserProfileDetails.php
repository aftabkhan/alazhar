<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveUserProfileDetails extends FormRequest
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
                    'name' => 'required',
                    'email'=>'required|email|unique:users,email,'.Auth()->user()->id,
                    'mobile'=>'required|numeric|digits:10',
                    'profile_image'=>'required'
        ];
    }
}
