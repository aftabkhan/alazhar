<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class DoctorsController extends Controller
{
    
    //Grid View
	public function index(){
		$user_name = Auth()->user()->name;
		$url = "getDoctors";
		return view('doctors.view_doctors')->with('url',$url)->with('user_name',$user_name);
    }

    //get Doctors List For Grid View
    public function getDoctors(){
    	$doctors = \Alazhar\Doctors::getDoctors();
       	return datatables($doctors)->make(true); 
    }

    //Add Doctors
    public function addDoctor(){
    	$user_name = Auth()->user()->name;
        $url = 'getJobApplications';
        return view('doctors.add_doctors')->with('user_name',$user_name)->with('url',$url);
    }

    //saveDoctors
    public function storeDoctor(\Alazhar\Http\Requests\SaveDoctors $request){

        $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
        $file = $request->file('profile_image');
        $upload = $file->move(base_path('public/imgs/profiles'));
        $attachment['attachment'] = substr($file,5,strlen($file)-1);
        $saving_files = \Alazhar\Attachments::create($attachment);
        $request['profile_image_id'] = $saving_files->id;

        $is_doctor_added = \Alazhar\Doctors::create($request->all());
    	if(isset($is_doctor_added->id)){
    		return redirect(route('doctors'))->with('status', 'Doctor has been added.');
        }else{
            return redirect()->route('doctors')->with('status', 'Something went wrong.');
    	}
    }

    public function getDoctorsDd(){
    	$doctors = \Alazhar\User::getDoctors()->get();
    	$doctors = ($doctors->toArray());
    	echo "<option value='0'>Select A Doctor</option>";
    	foreach($doctors as $doc){
    		echo '<option value='.$doc['id'].'>'.$doc['name'].'</option>';
    	}

    }

    public function editDoctor($doct_id){
    	$doc_details = \Alazhar\Doctors::find($doct_id);
        $user_name = Auth()->user()->name;
        $url = 'updateDoctor';
        $departments = \Alazhar\Http\Controllers\Common\CommonFunctions::getDepartments();
        $dept = array();
        $dept_ar = array();
        foreach($departments as $key=>$value){
        	$dept[$value['id']] = $value['name_en']; 
            $dept_ar[$value['id']] = $value['name_ar'];
        }
        $time = array();
        $timings = \Alazhar\Http\Controllers\Common\CommonFunctions::getTimings();
        foreach($timings as $key=>$value){
            $time[$value['id']] = $value['timing']; 
        }

        return view('doctors.edit_doctors')->with('data',$doc_details)->with('user_name',$user_name)->with('url',$url)->with('departments',$departments)->with('dept',$dept)->with('timings',$timings)->with('time',$time);
    }

    public function updateDoctor(\Alazhar\Http\Requests\SaveDoctors $request,$id){
    	$request = $request->except('_token','created_at','form_botcheck');
    	$is_doctor_added = \Alazhar\Doctors::where('id',$id)->update($request);
    	if(isset($is_doctor_added) && ($is_doctor_added>0)){
    		return redirect(route('doctors'))->with('status', 'Doctor has been updated.');
        }else{
            return redirect(route('doctors'))->with('status', 'Something went wrong try again.');
    	}
    }

    public function deleteDoctor($doc_id){
    	$is_doc_deleted = \Alazhar\User::where('id',$doc_id)->delete();
    	if(isset($is_doc_deleted) && ($is_doc_deleted>0)){
    		return redirect(route('doctors'))->with('status', 'Doctor Deleted SUccessfully.');
        }else{
            return redirect(route('doctors'))->with('status', 'Something went wrong try again.');
    	}
    }

    public function getDoctorsForBooking(){
        $doctors = \Alazhar\Doctors::getDoctors()->get();
        $doctors = $doctors->toArray();
        foreach($doctors as $doctor){
            $image_link = asset('public/imgs/profiles').'/'.$doctor['attachment'];
            $app_link = url('bookAnAppointment').'/'.$doctor['id'];
            echo '<div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="rounded overflow-hidden mb-2 p-2 bg-white border-grey"> 
                    <img src= "'.$image_link.'" class="" alt="" height="200"> </div>
                    <h4 class="dr-name">'.$doctor['name'].'</h4>
                    <p class="ms-timings">Timings: '.$doctor['timing'].'</p>
                    <p class="ms-days">Saturday - Friday</p>
                    <p class="department-name">Ophthalmologist</p> 
                        <a href="'.$app_link.'" class="btn btn-green-outline mb-3">Book Appointment
                        </a> 
                </div>';
        }
    }

    //to get the timings
    public function getDoctorTimings(){
        $timings = \Alazhar\DoctorTimings::all();
        $timings = $timings->toArray();
        echo "<option value = 0>Select Timings</option>";
        foreach($timings as $timing){
            echo '<option value='.$timing['id'].'>'.$timing['timing'].'</option>';
        }
    }

}
