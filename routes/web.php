<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use Symfony\Component\HttpFoundation\Session\Session;
//use Illuminate\Contracts\Session\Session;
//use Session;

//Home Page
Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');





Route::get('/', function (){
	if(isset(\Auth()->user()->id)&&(\Auth()->user()->id) > 0){
		return redirect(url('/home'));
	}
    return view('welcome');//->with('lang_id',$lang_id);
});

Auth::routes();
//set session language:
//Route::get('/ar', 'JobsController@index')->name('vacancies');
Route::get('/en', function () {
    $lang = 'en';
    \Session::put('locale', $lang);
    return 1;
});
Route::get('/ar', function () {
    $lang = 'ar';
    \Session::put('locale', $lang);
    return 1;
});


//Jobs
Route::get('/vacancies', 'JobsController@index')->name('vacancies');
Route::get('/jobs', 'JobsController@viewJobs')->name('vewsJobs');
Route::get('/getJobs', 'JobsController@getJobs')->name('getJobs');
Route::get('/getDepartments', 'DepartmentsController@getDepartments')->name('getDepts');
Route::get('/getDeptBasedJob/{dept_id}', 'JobsController@getDeptBasedJob')->name('getDeptBasedJob');


//job-applications
Route::get('/applications/view/{id}', 'JobsController@viewJobApplication')->name('viewApplication');
Route::get('/applications/delete/{id}', 'JobsController@deleteJobApplication')->name('deleteApplication');

//Jobs-Admin
Route::get('/applcations', 'JobsController@showJobApplications')->name('applications');
Route::get('/postJob', 'JobsController@postJob')->name('postJob');
Route::post('/savepostedjob', 'JobsController@savePostedJob')->name('savePostedJob');
Route::get('/viewJobs', 'JobsController@viewAllJobs')->name('viewAllJobs');

Route::get('/showPostedJobs', 'JobsController@getPostedJobs')->name('getPostedJobs');
Route::get('/showAllJobs', 'JobsController@getAllJobs')->name('getAllJobs');

//Admin-Doc
//getDoctors\
//Route::get('/doctors', 'DoctorsController@index')->name('doctors')->middleware('auth');
//Route::get('/getDoctors', 'DoctorsController@getDoctors')->name('getDoctors');
//Route::get('/addDoctors', 'DoctorsController@addDoctor')->name('addDoctors');
//Route::post('/storeDoctors', 'DoctorsController@storeDoctor')->name('storeDoctor');
//Route::get('/getDoctorsDd', 'DoctorsController@getDoctorsDd')->name('getDoctorsDd');
//Edit DOctors Details
Route::get('/doctors/edit/{id}', 'DoctorsController@editDoctor')->name('editDoctors');
Route::post('/updateDoctor/{id}', 'DoctorsController@updateDoctor')->name('updateDoctor');
Route::get('doctors/delete/{id}', 'DoctorsController@deleteDoctor')->name('deleteDoctor');

Route::get('getDoctorsForBooking', 'DoctorsController@getDoctorsForBooking')->name('getDocsForBooking');
Route::get('/getDoctorsDd', 'DoctorsController@getDoctorsDd')->name('getDoctorsDd');





Route::get('/getDepartments', 'DepartmentsController@getDepartments')->name('getDepts');
Route::get('/departments/edit/{id}', 'DepartmentsController@edit')->name('editDepartment');
Route::post('/departments/update/{id}', 'DepartmentsController@update')->name('updateDepartment');
Route::get('/departments/delete/{id}', 'DepartmentsController@delete')->name('deleteDepartment');


//Appointments-Admin
Route::get('/bookAnAppointment/{id}', 'AppointmentsController@bookAppointment')->name('BookAppointments');
Route::get('/showAppointments', 'AppointmentsController@showAppointments')->name('showAppointments');
Route::get('/getAppointments', 'AppointmentsController@getAppointments')->name('getAppointments');
Route::post('/storeappointments', 'AppointmentsController@store')->name('storeAppointment');



//job search
Route::post('/jobSearch', 'JobsController@jobSearch')->name('jobSearch');
Route::get('/showJobDetails/{job_id}', 'JobsController@showJobDetails')->name('showJobDetails');
Route::get('/apply/{job_id}', 'JobsController@applyForThisJob')->name('applyForThisJob');
Route::post('/saveJobApplication/{job_id?}', 'JobsController@saveJobApplication')->name('saveJobApplication');

Route::get('/jobs/edit/{job_id}', 'JobsController@editJob')->name('editJob');
Route::post('/jobs/update/{job_id}', 'JobsController@updateJob')->name('updateJob');
Route::get('/jobs/delete/{job_id}', 'JobsController@deleteJob')->name('deleteJob');
Route::get('/downloadResume/{attachment_id}', 'JobsController@downloadResume')->name('downloadResume');
Route::get('/jobapplication/{app_id}', 'JobsController@deleteJobApplication')->name('downloadResume');





//contactus
Route::get('/contactUs', 'ContactUsController@showContactUsForm')->name('showContactUsForm');
Route::post('/saveContactUsDetails', 'ContactUsController@saveContactUsDetails')->name('saveContactedDetails');
Route::get('/contacted', 'ContactUsController@index')->name('contacts');
Route::get('getContactedUsers','ContactUsController@getContactedUsers')->name('getContacts');


//packages-routes
Route::get('packages','PackagesController@index')->name('packages');
Route::get('getPackages','PackagesController@getPackages')->name('getPackages');
Route::get('packages/add','PackagesController@add')->name('addPackage');
Route::post('packages/store','PackagesController@store')->name('storePackages');
Route::get('packages/edit/{id}','PackagesController@edit')->name('editPackages');
Route::post('packages/update/{id}','PackagesController@update')->name('updatePackages');
Route::get('packages/delete/{id}','PackagesController@delete')->name('updatePackages');
Route::get('packages/view/{id}','PackagesController@view')->name('viewPackages');

//shifttimings
Route::get('getDoctorTimings','DoctorsController@getDoctorTimings')->name('getDoctorTimings');

//About-USController
Route::get('aboutus-profile/addoredit','AboutUsController@addProfile')->name('addoreditProfile');
Route::post('aboutus-profile/store','AboutUsController@storeProfile')->name('storeProfile');

Route::get('aboutus-message/chairman','AboutUsController@addChairManMessages')->name('addChairManMessages');

Route::post('aboutus-message/store','AboutUsController@storeMessages')->name('storeMessages');


Route::get('aboutus-message/ceo','AboutUsController@addCeoMessages')->name('addCeoMessages');


Route::get('aboutus-message/gm','AboutUsController@addGmMessages')->name('addGmMessages');
Route::get('aboutus-message/Dgm','AboutUsController@addDgmMessages')->name('addDgmMessages');
Route::get('aboutus-message/Tomgm','AboutUsController@addTomDirMessages')->name('addTomDirMessages');
Route::get('aboutus-message/MDid','AboutUsController@addMedDirMessages')->name('addMedDirMessages');
Route::get('aboutus-message/misandvis','AboutUsController@misandvis')->name('misandvis');
Route::get('aboutus-message/management','AboutUsController@addManagement')->name('Management');

//Middleware Goup.

Route::middleware(['auth'])->group(function () {
    //departments
    Route::get('/departments', 'DepartmentsController@index')->name('departments');
    Route::get('/getAllDepartments', 'DepartmentsController@getAllDepartments')->name('getAllDepartments');
    Route::get('/addDepartment', 'DepartmentsController@addDepartment')->name('addDepartment');
    Route::post('/storeDepartment', 'DepartmentsController@storeDepartment')->name('storeDepartment');

    Route::get('/doctors', 'DoctorsController@index')->name('doctors')->middleware('auth');
    Route::get('/getDoctors', 'DoctorsController@getDoctors')->name('getDoctors');
    Route::get('/addDoctors', 'DoctorsController@addDoctor')->name('addDoctors');
    Route::post('/storeDoctors', 'DoctorsController@storeDoctor')->name('storeDoctor');
    
});


//AboutUsURls
Route::group(['prefix'=>'aboutUs'], function()
{
    
    Route::get('profile', function()
    {  
        $language = App::getLocale();
        $data = \Alazhar\AboutUsProfile::find(1);
        return view('aboutus.profile')->with('data',$data)->with('language',$language);
    })->name('profile');
    Route::get('chairmanmessage',function () {
        $language = App::getLocale();
        $data = \Alazhar\AboutUsMessages::find(1);
    	$saving_files = \Alazhar\Attachments::find($data->attachment_id);
        return view('aboutus.chairman')->with('data',$data)->with('language',$language)->with('attachment',$saving_files->attachment);
	})->name('chairman');
	Route::get('ceomessage',function () {
    	$language = App::getLocale();
        $data = \Alazhar\AboutUsMessages::find(2);
        $saving_files = \Alazhar\Attachments::find($data->attachment_id);
        return view('aboutus.chairman')->with('data',$data)->with('language',$language)->with('attachment',$saving_files->attachment);
	})->name('ceo');
	Route::get('gmmessage',function () {
        $language = App::getLocale();
        $data = \Alazhar\AboutUsMessages::find(3);
        $saving_files = \Alazhar\Attachments::find($data->attachment_id);
        return view('aboutus.chairman')->with('data',$data)->with('language',$language)->with('attachment',$saving_files->attachment);
	})->name('gm');
	Route::get('deputy',function () {
        $language = App::getLocale();
        $data = \Alazhar\AboutUsMessages::find(4);
        $saving_files = \Alazhar\Attachments::find($data->attachment_id);
        return view('aboutus.chairman')->with('data',$data)->with('language',$language)->with('attachment',$saving_files->attachment);
	})->name('deputy');
	Route::get('tqm-director',function () {
        $language = App::getLocale();
        $data = \Alazhar\AboutUsMessages::find(5);
        $saving_files = \Alazhar\Attachments::find($data->attachment_id);
        return view('aboutus.chairman')->with('data',$data)->with('language',$language)->with('attachment',$saving_files->attachment);
	})->name('tqm-director');
	Route::get('medical-director',function () {
        $language = App::getLocale();
        $data = \Alazhar\AboutUsMessages::find(6);
        $saving_files = \Alazhar\Attachments::find($data->attachment_id);
        return view('aboutus.chairman')->with('data',$data)->with('language',$language)->with('attachment',$saving_files->attachment);
	})->name('medical-director');
	Route::get('management',function () {
    	return view('aboutus.management');
	})->name('management');
	Route::get('mission-and-vision',function () {
    	return view('aboutus.mission-and-vision');
	})->name('mission-and-vision');
});

//specialities.
Route::get('specialities', function()
    {	
        return view('specialities');
    })->name('specialities');

//facilities
Route::group(['prefix'=>'facilities'], function()
{
    Route::get('medical-lab', function()
    {	
        return view('facilities.medical-lab');
    })->name('medical-lab');
    Route::get('pharmacy',function () {
    	return view('facilities.pharmacy');
	})->name('pharmacy');
	Route::get('insurance-companies',function () {
    	return view('facilities.insurance-companies');
	})->name('insurance-companies');
	Route::get('parking',function () {
    	return view('facilities.parking');
	})->name('parking');
});
Route::get('packages_view', function(){	
        return view('packages_front_view');
    })->name('packages_view');

Route::get('appointment', function()
    {
        $language = App::getLocale();	
        return view('appointment')->with('language',$language);
    })->name('appointment');
Route::get('research', function()
    {	
        return view('research');
    })->name('research');
Route::get('photo-gallery', function()
    {	
        return view('photo-gallery');
    })->name('photo-gallery');
Route::get('video-gallery', function()
    {	
        return view('video-gallery');
    })->name('video-gallery'); 

//Static Pages

// FAQs
Route::get('faqs', function() {
    return view('static_pages.faqs');
}) -> name('faqs');

// Refer a Friend
Route::get('referral', function() {
    return view('referral');
}) -> name('referral');

// News & Events
Route::get('news', function() {
    return view('news');
}) -> name('news');

Route::get('news-details', function() {
    return view('news-details');
}) -> name('news-details');



Route::get('/getJobApplications', 'JobsController@getJobApplications')->name('getJobApplications');

//User Profile Related
Route::get('changePassword','UserController@changePassword')->name('changePassword');
Route::post('saveChangedPassword','UserController@saveChangedPassword')->name('saveChangedPassword');
Route::get('changeProfileDetails','UserController@changeProfileDetails')->name('changeProfileDetails');
Route::post('saveProfileDetails','UserController@saveProfileDetail')->name('saveProfileDetail');



Route::get('test', function() {
    
    //dd(env('MAIL_HOST'));
    \Mail::send('mail', [], function ($message) {
        $message->to('aftabkhan.india@gmail.com', 'Hello AlAzher Email Testing.')->subject('Welcome!');
    });
    echo 123;die;
});