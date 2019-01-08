<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = 'job_applications';
    protected $fillable = ['job_id','applicant_id','attachment_id','department_id','car_exp'];

    public static function getJobApplications(){
    	$result = JobApplication::select('job_applications.id AS app_id','users.name','users.email','jobs.name_en AS job_title','attachments.id AS attachment_id','attachments.attachment','departments.name_en AS dept_name','users.location AS location')
    				->leftjoin('users','job_applications.applicant_id', '=', 'users.id')
    				->leftjoin('jobs','job_applications.job_id','=','jobs.id')
    				->leftjoin('attachments','job_applications.attachment_id', '=', 'attachments.id')
                    ->leftJoin('departments', 'jobs.department_id', '=', 'departments.id');
    	return $result;	
    }
}
