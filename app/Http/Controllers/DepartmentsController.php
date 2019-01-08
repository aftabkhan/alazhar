<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    
    public function index(){
    	$user_name = Auth()->user()->name;
		$url = "getAllDepartments";
		return view('depts.view_depts')->with('url',$url)->with('user_name',$user_name);

    }

    public function getAllDepartments(){
    	$depts = \Alazhar\Departments::all();
    	return datatables($depts)->make(true);
    }

    public function addDepartment(){
    	
    	$user_name = Auth()->user()->name;
		return view('depts.add_depts')->with('user_name',$user_name);
    }

    public function storeDepartment(\Alazhar\Http\Requests\SaveDepartments $request){
    	
    	$is_dept_created = \Alazhar\Departments::create($request->all());
    	if(isset($is_dept_created)){
    		return redirect(route('departments'))->with('status', 'Department has been added.');
        }else{
            return redirect()->route('departments')->with('status', 'Something went wrong.');
    	}
    }


    public function getDepartments(){
    	$depts = \Alazhar\Departments::all();
    	$depts = $depts->toArray();
    	echo "<option value = '0'>Select Departments</option>";
    	foreach($depts as $dept){
    		echo '<option value='.$dept['id'].'>'.$dept['name_en'].'</option>';
    	}

    }

    public function edit($dept_id){
    	$user_name = Auth()->user()->name;
    	$department_det = \Alazhar\Departments::find($dept_id);
		return view('depts.edit_depts')->with('user_name',$user_name)->with('dept_id',$dept_id)->with('department_det',$department_det);
    }

    public function update(\Alazhar\Http\Requests\SaveDepartments $request,$dept_id){
    	$request = $request->except('_token','form_botcheck');
    	$is_doctor_added = \Alazhar\Departments::where('id',$dept_id)->update($request);
    	if(isset($is_doctor_added) && ($is_doctor_added>0)){
    		return redirect(route('departments'))->with('status', 'Department has been updated.');
        }else{
            return redirect(route('departments'))->with('status', 'Something went wrong try again.');
    	}

    }

    public function delete($dept_id){
    	$is_dept_deleted = \Alazhar\Departments::where('id',$dept_id)->delete();
    	if(isset($is_dept_deleted) && ($is_dept_deleted>0)){
    		return redirect(route('departments'))->with('status', 'Department Deleted SUccessfully.');
        }else{
            return redirect(route('departments'))->with('status', 'Something went wrong try again.');
    	}

    }
}
