<?php

namespace Alazhar;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'email', 'password','role_id','department_id','mobile','location','profile_image_id','timings'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public static function getDoctors(){
        $result = User::select('users.id','users.name','users.email','users.mobile','departments.name_en AS dept_name','attachments.attachment','DoctorTimings.timing')
                        ->leftJoin('departments', 'users.department_id', '=', 'departments.id')
                        ->leftjoin('attachments','users.profile_image_id','=','attachments.id')
                        ->leftjoin('DoctorTimings','users.timings','=','DoctorTimings.id')
                        ->where('role_id',2);
        return $result;
    }
}
