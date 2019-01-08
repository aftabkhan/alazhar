<?php

namespace Alazhar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveAppointments extends FormRequest
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
        if(isset($this->id)){
                return [
                    'full_name' => 'required',
                    'email'=>'required|email|unique:users',
                    'mobile'=>'required|numeric|digits:10',
                    'appointment_date'=>'required',
                    'appointment_reason'=>'required|min:3|max:1000'
                ];

        }else{
            return [
                    'full_name' => 'required',
                    'email'=>'required|email|unique:users',
                    'mobile'=>'required|numeric|digits:10',
                    'doctor_id'=>'numeric',
                    'appointment_date'=>'required',
                    'department_id'=>'numeric',
                    'appointment_reason'=>'required|min:3|max:1000'
        ];
        }
        
    }
}
