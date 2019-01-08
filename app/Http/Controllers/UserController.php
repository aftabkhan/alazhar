<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;
Use Hash;

class UserController extends Controller
{
    

    public function changePassword(){
    	$user_name = Auth()->user()->name;
    	return view('users.changePassword')->with('user_name',$user_name);
    }

    public function saveChangedPassword(\Alazhar\Http\Requests\ValidateChangePasswordDetails $request){
    	//print_r($request->all());die;
    	$email = Auth()->user()->email;
    	$result = \Alazhar\User::where('email',$email)->update(['password'=>Hash::make($request->password)]);
    	if(isset($result) && $result>0){
    			return redirect(url('/home'))->with('status', 'Your Password Updated SUccessfully.');
        }else{
                return redirect(url('/home'))->with('status', 'Some Thing Went Wrong tryagain later...');
        }
    }

    public function saveProfileDetail(\Alazhar\Http\Requests\saveUserProfileDetails $request){


            $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
            $file = $request->file('profile_image');
            $upload = $file->move(base_path('public/imgs/profiles'));
            $attachment['attachment'] = substr($file,5,strlen($file)-1);
            //save file name to DB:
            $saving_files = \Alazhar\Attachments::where('id',$user_name = Auth()->user()->profile_image_id)->update($attachment);
            
    	   $request = $request->except('_token','created_at','profile_image');
           $result = \Alazhar\User::where('id',Auth()->user()->id)->update($request);
    	   if(isset($result) && ($result>0)){
    		  return redirect(route('home'))->with('status', 'Your Profile details are updated.');
            }else{
                return redirect(route('home'))->with('status', 'Something went wrong try again.');
    	   }
    }

    public function changeProfileDetails(){
    	$user_name = Auth()->user()->name;
    	$profileDetails = \Alazhar\User::find(Auth()->user()->id);
    	return view('users.changeProfile')->with('user_name',$user_name)->with('data',$profileDetails);
    }
}
