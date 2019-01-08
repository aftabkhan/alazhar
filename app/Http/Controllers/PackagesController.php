<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    

    public function index(){
        $user_name = Auth()->user()->name;
        $url = 'getPackages';
        return view('packages.packages')->with('user_name',$user_name)->with('url',$url);

    }

    public function getPackages(){
        $package = \Alazhar\Package_Points::getPackages();
        return datatables($package)->make('true');
    	
    }

    public function add(){

        $user_name = Auth()->user()->name;
        return view('packages.add_package')->with('user_name',$user_name);
    	
    }

    public function store(\Alazhar\Http\Requests\SavePackages $request){
        $request = $request->except('_token');
        $package_added = \Alazhar\Packages::create($request);
        //foreach($request['bullet_points'] as $bullet_point){
        //        $request['package_id'] = $package_added->id;
        //       $request['notes'] = $bullet_point;
        //        $package_point_added = \Alazhar\Package_Points::create($request);        
        //}
        
        $request['package_id'] = $package_added->id;
        $request['notes'] = $request['bullet_points'];
        $package_point_added = \Alazhar\Package_Points::create($request);
        if($package_point_added->id){
            return redirect(route('packages'))->with('status', 'You have successfully Added a Package.');
        }else{
            return redirect(route('packages'))->with('status', 'Something Went Wrong Try Again Later.');
        }
        
    	
    }

    public function edit($id){

        $user_name = Auth()->user()->name;
        $package_det = \Alazhar\Packages::find($id);
        $package_notes = \Alazhar\Package_Points::where('package_id',$id)->get()->toArray();
        return view('packages.edit_package')->with('user_name',$user_name)->with('package_det',$package_det)->with('package_notes',$package_notes);
    	
    }

    public function update(\Alazhar\Http\Requests\SavePackages $request,$package_id){
        $package_notes = $request->bullet_points; 
        $request = $request->except('_token','bullet_points');
        $is_job_updated = \Alazhar\Packages::where('id',$package_id)->update($request);
    	// $package_notes must be an array on looping the array you'll save the new points and update the existing points.
        if(isset($is_job_updated) && $is_job_updated >0){
            return redirect(route('packages'))->with('status', 'Package has been updated.');
        }else{
            return redirect(route('packages'))->with('status', 'Something went wrong.');
            
        }
    }

    public function delete($id){
        $is_package_notes_deleted = \Alazhar\Package_Points::where('package_id',$id)->delete();
        if(isset($is_package_notes_deleted) && ($is_package_notes_deleted>0)){
            $is_package_deleted = \Alazhar\Packages::where('id',$id)->delete();
            if(isset($is_package_deleted) && ($is_package_deleted>0)){
                return redirect(route('packages'))->with('status', 'Package Deleted SUccessfully.');
            }else{
                return redirect(route('packages'))->with('status', 'Something went wrong try again.');
            }
        }
    }

    public function view($id){
        $user_name = Auth()->user()->name;
        return view('packages.view_package')->with('user_name',$user_name);
    }

    //in the front-end 
    public function showPackages(){
        echo "Will be updated soon...";	
    }
}
