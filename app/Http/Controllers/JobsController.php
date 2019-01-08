<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Services\DataTable;
use App;

class JobsController extends Controller
{
    //View Job Vacancies
    public function index()
    {
        $url = '/alazhar/showAllJobs'; 
        return view('jobs.available-vacancies')->with('url',$url);
    }
    //Job Application Form
    public function viewJobs(){
    	return view('jobs.apply-job');
    }
    public function getJobs(){
    	$jobs = \Alazhar\jobs::all();
    	$jobs = $jobs->toArray();
    	foreach($jobs as $job){
    		echo '<li>'.$job['name_en'].'</li>';
    	}

    }
    //Jobs search
    public function jobSearch(Request $request){

    	$jobs = \Alazhar\jobs::jobSearch($request->job_key,$request->exp_id,$request->dept_id);
        $jobs = $jobs->get();
        //echo "<pre>";
        //print_r($jobs);die;
        if(count($jobs)>0){
            foreach($jobs as $job){
                $url = 'apply/'.$job['id'];
                echo '<div class="job-box p-3 mb-3">
                                    <h3 class="job-title"><a href="'.$url.'">'.$job['job_name'].'</a></h3>
                                    <div class="job-footer">
                                        <div class="d-inline-block pr-2">
                                            <span>
                                                   <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path></svg>
                                            </span>
                                            2 days ago
                                        </div>
                                        <div class="d-inline-block pr-2">
                                            <span>
                                                   <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path></svg>
                                            </span>
                                            Full Time
                                        </div>
                                    </div>
                                    <div class="job-description pt-4 pb-3">
                                        <p class="text-grey m-0">'.$job['job_desc'].'</p>
                                    </div>
                                </div>';
            }
        }else{
            return "NO JOBS FOUND.";
        }
        //return datatables($jobs->get())->make(true);
    }

    public function showJobDetails($job_id){
    	//return view('jobs.job-details');
    	$job_details = \Alazhar\jobs::all()->where('id',$job_id)->toArray();
    	$job_details = current($job_details);
    	return view('jobs.job-details')->with('data',$job_details);
    }

    public function applyForThisJob($job_id){
        //get job name.
        $job_details = \Alazhar\jobs::find($job_id);
        return view('jobs.apply-job')->with('job_id',$job_id)->with('job_name',$job_details->name_en);
    }
    public function saveJobApplication(\Alazhar\Http\Requests\SaveJobApplicationDetails $request,$job_id = '')
    {
        $uniqueFileName = uniqid() . $request->file('resume_file')->getClientOriginalName() . '.' . $request->file('resume_file')->getClientOriginalExtension();
        $file = $request->file('resume_file');
        $upload = $file->move(base_path('public/files/resumes'));
        $attachment['attachment'] = substr($file,5,strlen($file)-1);
        //save file name to DB:
        $saving_files = \Alazhar\Attachments::create($attachment);
        if(isset($job_id) && ($job_id>0)){
            $job_application_details['job_id'] = $job_id;  
        }else{
            $job_application_details['job_id'] = $request->position_id;  
        }
        //saveUserDetails
        $result = \Alazhar\Http\Controllers\Common\CommonFunctions::saveUserDetails($request->all());
        $job_application_details['applicant_id'] = $result;
        $job_application_details['attachment_id'] = $saving_files->id;
        $job_application_details['car_exp'] = $saving_files->car_exp; 
        $job_application_created = \Alazhar\JobApplication::create($job_application_details); 
        if($job_application_created->id){
            return redirect()->route('vewsJobs')->with('status', 'You have successfully applied.');
        }else{
            return redirect()->route('vewsJobs')->with('status', 'Something went wrong.');
        }
    } 
    

    public function showJobApplications(){
        $user_name = Auth()->user()->name;
        $url = 'getJobApplications';
        return view('jobs.job_applications')->with('user_name',$user_name)->with('url',$url);
    }
    public function getJobApplications(){
        $applications = \Alazhar\JobApplication::getJobApplications();
        return datatables($applications)->make(true);
    }
    public function postJob(){
        $user_name = Auth()->user()->name;
        return view('jobs.post_job')->with('user_name',$user_name);
    }
    
    public function savePostedJob(\Alazhar\Http\Requests\SaveJobPosts $request){
            $request = $request->all();
            $request['department_id'] = $request['category'];
            $is_job_posted = \Alazhar\jobs::create($request);
            if(isset($is_job_posted->id) && ($is_job_posted->id >0)){
                    return redirect(route('viewAllJobs'))->with('status', 'You have successfully posted a job.');
            }else{
                    return redirect(route('viewAllJobs'))->with('status', 'Some Thing Went Wrong tryagain later...');
            }
    }
    //jobs grid view.
    public function viewAllJobs(){
        $user_name = Auth()->user()->name;
        $url = '/alazhar/showPostedJobs';
        return view('jobs.view_posted_jobs')->with('user_name',$user_name)->with('url',$url);
    }

    public function getPostedJobs (){
        $jobs = \Alazhar\jobs::getAllJobs();
        return datatables($jobs)->make(true);
    }

    //get jobs data
    public function getAllJobs(){
        $jobs = \Alazhar\jobs::all();
        $jobs = $jobs->all();
        $language = App::getLocale();
        $name = 'name_'.$language; 
        $job_desc =  'job_desc_'.$language;
        
        foreach($jobs as $job){
                $url = 'apply/'.$job->id;
                echo '<div class="job-box p-3 mb-3">
                                    <h3 class="job-title"><a href="'.$url.'">'.$job->$name.'</a></h3>
                                    <div class="job-footer">
                                        <div class="d-inline-block pr-2">
                                            <span>
                                                   <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path></svg>
                                            </span>
                                            2 days ago
                                        </div>
                                        <div class="d-inline-block pr-2">
                                            <span>
                                                   <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path></svg>
                                            </span>
                                            Full Time
                                        </div>
                                    </div>
                                    <div class="job-description pt-4 pb-3">
                                        <p class="text-grey m-0">'.$job->$job_desc.'</p>
                                    </div>
                                </div>';
        }
    }

    public function editJob($job_id){
        $user_name = Auth()->user()->name;
        $job_det = \Alazhar\jobs::find($job_id);
        $departments = \Alazhar\Departments::all('id','name_en');
        $departments = $departments->toArray();
        $department_array = array();
        foreach($departments as $department){
                $department_array[$department['id']] = $department['name_en'];
        }
        return view('jobs.edit_job')->with('user_name',$user_name)->with('departments',$departments)->with('department_array',$department_array)->with('job_det',$job_det);
    }
    public function updateJob(\Alazhar\Http\Requests\SaveJobPosts $request,$job_id){
        $job_det_array = array();
        $job_det_array = $request->except('_token','created_at','form_botcheck','job_title','job_desc');
        $job_det_array['name_en'] = $request->job_title;
        $job_det_array['job_desc_en'] = $request->job_desc;
        $is_job_updated = \Alazhar\jobs::where('id',$job_id)->update($job_det_array);


        if(isset($is_job_updated) && ($is_job_updated>0)){
            return redirect(route('viewAllJobs'))->with('status', 'Job has been updated.');
        }else{
            return redirect(route('viewAllJobs'))->with('status', 'Something went wrong try again.');
        }
    }

    public function deleteJob($job_id){
        $is_doc_deleted = \Alazhar\jobs::where('id',$job_id)->delete();
        if(isset($is_doc_deleted) && ($is_doc_deleted>0)){
            return redirect(route('viewAllJobs'))->with('status', 'Job Deleted SUccessfully.');
        }else{
            return redirect(route('viewAllJobs'))->with('status', 'Something went wrong try again.');
        }
    }   

    public function downloadResume($attachment_id){
        $attachment = \Alazhar\Attachments::find($attachment_id);
        $pathToFile  = base_path('public/files/resumes/').$attachment->attachment;
        return response()->download($pathToFile);
    }

    /*public function deleteJobApplication($job_id){
        $is_application_deleted = \Alazhar\JobApplication::where('id',$job_id)->delete();
        if(isset($is_application_deleted)&&($is_application_deleted>0)){
            return redirect()->route('vewsJobs')->with('status', 'You have successfully applied.');
        }else{
            return redirect()->route('vewsJobs')->with('status', 'Something went wrong.');
        }
    }*/

    public function getDeptBasedJob($dept_id){
        $jobs = \Alazhar\jobs::where('department_id',$dept_id);
        $jobs = $jobs->get();
        echo "<option value='0'>Select Job</option>";
        foreach($jobs as $job){
            echo '<option value='.$job['id'].'>'.$job['name_en'].'</option>';
        }
    }

    public function viewJobApplication($application_id){

        $user_name = Auth()->user()->name;

        $job_application_details = array();
        $application_details = \Alazhar\JobApplication::find($application_id);
        $job_details = \Alazhar\jobs::find($application_details->job_id);
        $job_application_details['job'] = $job_details->name_en;
        $job_application_details['job_description'] = $job_details->job_desc_en; 
        $department = \Alazhar\Departments::find($job_details->department_id);
        $job_application_details['department'] = $department->name_en;
        $job_applicant_details = \Alazhar\User::find($application_details->applicant_id); 
        $job_application_details['applicant_name'] = $job_applicant_details->name;
        $job_application_details['applicant_mobile'] = $job_applicant_details->mobile;
        $job_application_details['applicant_email'] = $job_applicant_details->email;
        $resume_attachment = \Alazhar\Attachments::find($application_details->attachment_id);
        $job_application_details['attachment'] = $resume_attachment->attachment;
        return view('applications.view_jobapplication')->with('job_application_details',$job_application_details)->with('user_name',$user_name);

    }

    public function deleteJobApplication($application_id){
         $is_dept_deleted = \Alazhar\JobApplication::where('id',$application_id)->delete();
        if(isset($is_dept_deleted) && ($is_dept_deleted>0)){
            return redirect(route('applications'))->with('status', 'Application Deleted Successfully.');
        }else{
            return redirect(route('applications'))->with('status', 'Something went wrong try again.');
        }
    }
}