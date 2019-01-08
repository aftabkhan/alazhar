<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function index(){
        $user_name = Auth()->user()->name;
        $url = 'getContactedUsers';
        return view('contacts.contacted_users')->with('user_name',$user_name)->with('url',$url);
    }

    public function getContactedUsers(){
        $data = \Alazhar\Contacts::getContactedUsers();
        return datatables($data->all())->make(true);
    }
    public function showContactUsForm(){
    	return view('contacts.contact-us');
    }

    public function saveContactUsDetails(\Alazhar\Http\Requests\SaveContactUsDetails $request){    	
        $result = \Alazhar\Http\Controllers\Common\CommonFunctions::saveUserDetails($request->all());
  		$contact_details = $request->all();
  		$contact_details['contacted_id'] = $result;
    	$result = \Alazhar\Contacts::create($contact_details);
    	
        //trigger email action.
    	//$request->all()
    	if($result->id){
            return redirect()->route('showContactUsForm')->with('status', 'We heard from you...we will get back to you soon');
        }else{
            return redirect()->route('showContactUsForm')->with('status', 'Something went wrong.');
        } 
    }
}
