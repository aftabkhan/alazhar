<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    

    public function addProfile(){
    	$data = \Alazhar\AboutUsProfile::find(1);
    	$user_name = Auth()->user()->name;
    	return view('aboutus.profile.add_profile')->with('user_name',$user_name)->with('data',$data);
    }

    public function storeProfile(\Alazhar\Http\Requests\SaveAboutUsProfile $request){

            $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
            $file = $request->file('profile_image');
            $upload = $file->move(base_path('public/imgs/profiles'));
            $attachment['attachment'] = substr($file,5,strlen($file)-1);
            //save file name to DB:
            $saving_files = \Alazhar\Attachments::where('id',28)->update($attachment);

    		$request = $request->except('_token','form_botcheck','profile_image');
            $request['attachment_id'] = 28;

    		$is_profile_created = \Alazhar\AboutUsProfile::where('id',1)->update($request);

    		if(isset($is_profile_created) && $is_profile_created>0){
    				return redirect()->route('addoreditProfile')->with('status', 'Profile has been added/updated successfully.');
    		}else{
    				return redirect()->route('addoreditProfile')->with('status', 'Something went wrong.');
    		}
    }

     public function addMessages(){
        $data = \Alazhar\AboutUsMessages::find(1);
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data);
    }

    

    public function addChairManMessages(){
         $page_title = 'Add/Edit Chairman\'s Message';
         $data = \Alazhar\AboutUsMessages::find(1);
         $name_field_label = "Chairman Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    }

    public function addCeoMessages(){
         $data = \Alazhar\AboutUsMessages::find(2);
         $page_title = 'Add/Edit CEO\'s Message';
         $name_field_label = "CEO Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    }

    public function addGmMessages(){
        $data = \Alazhar\AboutUsMessages::find(3);
        $page_title = 'Add/Edit General Manager\'s Message';
        $name_field_label = "General Manager Name";
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);
    }
    public function addDgmMessages(){
         $data = \Alazhar\AboutUsMessages::find(4);
         $page_title = 'Add/Edit Deputy General Manager\'s Message';
         $name_field_label = "Deputy General Manager Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    }
    public function addTomDirMessages(){
        $data = \Alazhar\AboutUsMessages::find(5);
        $page_title = 'TQM Director\'s Message';
        $name_field_label = "TQM Director Name";
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    } 
    public function addMedDirMessages(){
         $data = \Alazhar\AboutUsMessages::find(6);
         $page_title = 'Medical Director\'s Message';
         $name_field_label = "Medical Director Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    } 
     public function misandvis(){
         $data = \Alazhar\AboutUsMessages::find(8);
         $page_title = 'Medical Director\'s Message';
         $name_field_label = "Medical Director Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    } 
    public function addManagemen(){
         
         $page_title = 'Management';
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_managementessage')->with('user_name',$user_name)->with('page_title',$page_title);

    }

    public function storeMessages(\Alazhar\Http\Requests\AboutUsMessages $request){

            $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
            $file = $request->file('profile_image');
            $upload = $file->move(base_path('public/imgs/profiles'));
            $attachment['attachment'] = substr($file,5,strlen($file)-1);
            //save file name to DB:
            $saving_files = \Alazhar\Attachments::where('id',28)->update($attachment);

            $request = $request->except('_token','form_botcheck','profile_image');
            $request['attachment_id'] = 28;
            $request['message_by'] = 1;
            //echo "<pre>";
            //print_r($request);die;
            $is_profile_created = \Alazhar\AboutUsMessages::where('message_by',1)->update($request);
            if(isset($is_profile_created) && $is_profile_created>0){
                    return redirect()->route('home')->with('status', 'Chair Man Message has been added/updated successfully.');
            }else{
                    return redirect()->route('home')->with('status', 'Something went wrong.');
            }
        
    } 
}
