<?php

namespace Alazhar\Http\Controllers\Common;

use Alazhar\Http\Controllers\Controller;

class CommonFunctions extends Controller
{
    public static function saveUserDetails($data){
    	$data['name'] = $data['full_name'];
    	$data['password'] = 'testing_password';
    	$saved_user = \Alazhar\User::create($data);
    	return $saved_user->id;
    }

    public static function getDepartments(){
    	$depts = \Alazhar\Departments::all('id','name_en','name_ar');
    	$depts = $depts->toArray();
    	return $depts;
    }
    public static function getLanguage(){
        $data = session()->all();
        if(isset($data['language'])){
            $lang = $data['language'];
        }else{
             $lang = "en";  
        }
        $language = trim($lang, '"');
        return $language;
    }
    public static function getTimings(){
        $depts = \Alazhar\DoctorTimings::all('id','timing');
        $depts = $depts->toArray();
        return $depts;

    }
}
