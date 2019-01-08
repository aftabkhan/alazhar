<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'doctors';  
    protected $fillable = ['name_en','name_ar','email','mobile','profile_image_id','department_id','timing_id'];


    public static function getDoctors(){
        $result = Doctors::select('doctors.id','doctors.name_en','doctors.name_ar','email','mobile','departments.name_en AS dept_name_en','departments.name_ar AS dept_name_ar','attachments.attachment','DoctorTimings.timing')
                        ->leftJoin('departments', 'doctors.department_id', '=', 'departments.id')
                        ->leftjoin('attachments','doctors.profile_image_id','=','attachments.id')
                        ->leftjoin('DoctorTimings','doctors.timing_id','=','DoctorTimings.id');
        return $result;
    }

}
