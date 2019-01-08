<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveJobApplicationDetails extends FormRequest
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
        if(isset($this->job_id) && ($this->job_id)>0){
                //echo 123;die;
            return [
                        'full_name' => 'required',
                        'email'=>'required|email|unique:users',
                        'date_of_birth'=>'required',
                        'mobile'=>'required|numeric|digits:10',
                        'qualification'=>'required',
                        'location'=>'required',
                        'resume_file'=>'required_without:resume_content',
                        'resume_content'=> 'required_without:resume_file',
            ];
        }else{
            return [
                        'full_name' => 'required',
                        'email'=>'required|email|unique:users',
                        'date_of_birth'=>'required',
                        'mobile'=>'required|numeric|digits:10',
                        'qualification'=>'required',
                        'location'=>'required',
                        'resume_file'=>'required_without:resume_content',
                        'resume_content'=> 'required_without:resume_file',
                        'department_id'=>'required|numeric|min:1',
                        'position_id'=>'required|min:1'
            ];

        }
        
    }
}
