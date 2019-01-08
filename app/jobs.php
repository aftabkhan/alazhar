<?php

namespace Alazhar;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class jobs extends Model
{
    protected $dates = ['deleted_at'];
    protected $table = 'jobs';

    protected $fillable = ['name_en','name_ar','department_id','job_desc_en','job_desc_ar'];

    public static function jobSearch($job_key = '',$exp_id = '',$dept_id = ''){

    	$jobs = jobs::select('jobs.id','jobs.name_en AS job_name','departments.name_en AS dept_name','job_desc_en AS job_desc')
    					->leftJoin('departments', 'jobs.department_id', '=', 'departments.id');
    					if(isset($dept_id)){
    						$jobs->where('jobs.department_id',$dept_id);
    					}
    					if(isset($job_key)){
    						$jobs->where('jobs.department_id','LIKE',$dept_id.'%');
    					}
    	//$jobs = $jobs->get();
    	return $jobs;

    }

public static function getAllJobs(){
        $jobs = jobs::select('jobs.id','jobs.name_en AS job_name','departments.name_en AS dept_name','job_desc_en AS job_desc','jobs.created_at','job_desc_en AS job_desc')
                        ->leftJoin('departments', 'jobs.department_id', '=', 'departments.id');
        return $jobs;
    }
}
