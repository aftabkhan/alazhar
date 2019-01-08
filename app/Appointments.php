<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $table = 'appointments';
    protected $fillable = ['patient_id','doctor_id','department_id','appointment_date','appointment_reason'];

    public static function getAppointments(){
    	$result = Appointments::select('users.name as patient_name','departments.name_en AS dept_name','appointments.appointment_reason','appointments.created_at')
                        ->leftJoin('departments', 'appointments.department_id', '=', 'departments.id')
                        ->leftJoin('users', 'appointments.patient_id', '=', 'users.id');
        return $result;
    }
}

/*
		{ "data": 'patient_id' },
                    { "data": 'created_at' },
                    { "data": 'department_id' },
                    { "data": 'appointment_reason' },

*/
