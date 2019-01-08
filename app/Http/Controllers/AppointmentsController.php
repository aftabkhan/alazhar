<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function store(\Alazhar\Http\Requests\SaveAppointments $request){

        if(isset($request->doc_id)){
            //get department id using doctor-id
            $dept_details = \Alazhar\User::find($request->doc_id);            
            $result = \Alazhar\Http\Controllers\Common\CommonFunctions::saveUserDetails($request->all());

            $request['department_id'] = $dept_details->department_id;
            $request['doctor_id'] = $request->doc_id;
            $request['patient_id'] = $result;

            $mytime = \Carbon\Carbon::now();
            $mytime = $mytime->toDateTimeString();
            $request['appointment_date'] = $mytime;

            $is_appointment_booked = \Alazhar\Appointments::create($request->all());
            if(isset($is_appointment_booked->id) && ($is_appointment_booked->id > 0)){
                return redirect(route('appointment'))->with('status', 'You Appointment has been booked.');
            }else{
                return redirect(route('appointment'))->with('status', 'Some Thing Went Wrong tryagain later...');
            }


        }else{
                $result = \Alazhar\Http\Controllers\Common\CommonFunctions::saveUserDetails($request->all());
                $request['patient_id'] = $result;
                $mytime = \Carbon\Carbon::now();
                $mytime = $mytime->toDateTimeString();
                $request['appointment_date'] = $mytime;

                $is_appointment_booked = \Alazhar\Appointments::create($request->all());
        
                if(isset($is_appointment_booked->id) && ($is_appointment_booked->id > 0)){
                    return redirect(route('appointment'))->with('status', 'You Appointment has been booked.');
                }else{
                    return redirect(route('appointment'))->with('status', 'Some Thing Went Wrong tryagain later...');
                }

        }	
    }

    public function showAppointments(){
        $user_name = Auth()->user()->name;
        $url =  "getAppointments";
        //$result = \Alazhar\Appointments::all();
        //print_r($result->toArray());die; 
        return view('appointments.view_appointments')->with('url',$url)->with('user_name',$user_name);
    }

    public function getAppointments(){
       $result = \Alazhar\Appointments::getAppointments(); 
       return datatables($result)->make(true); 
    }

    public function bookAppointment($id){
        $doc_id = $id;
        return view('appointments.appointment')->with('doc_id',$doc_id);
    }
}
