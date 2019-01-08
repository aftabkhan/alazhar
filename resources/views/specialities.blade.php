<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="description" content="">
        <link rel="canonical" href="http://www.alazharhospitals.com/" />
        <title>{{ config('app.name', 'Al Azhar Hospital - Riyadh, KSA') }}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/imgs/favicon.ico')}}">
        <meta property="og:type" content="article" />
    
        <!-- META: TITLE OF YOUR POST OR PAGE -->
        <meta property="og:title" content="" /> 
    
        <!-- META: DESCRIPTION OF PAGE CONTENT -->
        <meta property="og:description" content="DESCRIPTION OF PAGE CONTENT" />
        <meta property="og:image" content="{{asset('public/imgs/logo.png')}}" />
        <meta property="og:url" content="http://www.alazharhospitals.com/" />
        <meta property="og:site_name" content="Al Azhar Hospital" />
    
    
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Cairo:300,400,700|Tajawal:300,400,700&amp;subset=arabic" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/fonts/flaticon/font/flaticon.css')}}">

    </head>
    <body>
        @include('layouts.header')
        @include('layouts.nav')        
        <!-- Page Content -->
        <section class="p-0">
            <div class="section-container container">
                <div class="section-banner section-about text-white">
                    <div class="section-overlay"></div>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-title">Our Specialists</h1>
                            <h4 class="section-para"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Specialists</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Medical Specialist -->
        <section id="medicalSpecialist" class="bg-light">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Pharmacy</h2>
                        </div>
                    </div>
                </div>
                <div class="row">                
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Safa Al Tayeb</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">PH. Alaa Ali</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">PH. Areej Ali</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">PH. Mohd. Al Otyabi</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Anesthesia</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Naseem Faraq</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Sultanov Bobirijova</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ahmed Saleem Jabir</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Laboratory</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mohd Al Marie</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Nahed Khader</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Asma Tahir</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Radiology</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Alaa Shawky</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Abdulqawi</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Hossam Raqman</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Abdullah Bin Ghazy</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Hadeel Abdo Abdulqadir</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Ehsan Baklafouny</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>            

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>General Surgery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ziad Alramlawy</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Adel Manea</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ahmed Alskalany</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>         

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Dental</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mahmoud Shahwan</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Alvin Gutierez</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Zia Jehan</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Fadel Al Shamrani</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mosleha Al Shamrani</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Nahla Al Saeed</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>      

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>OB - Gyne</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Yasser Al Sayed</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Batool Al Kheder</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Safia Mamoon</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Azza Al Hadad</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ayesha Mujeeb</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Nahla Abu Oul</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Remaz Abdulmajid</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Amany Bosuomi</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Zainab Anagrashy</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Tasneem Alqader</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6  text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Shaeena Rahim</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a> 
                    </div>
                </div>       

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Orthopedic</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Saeid Shuman</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Amer Hamdan</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>           

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Dermatology</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Emad Abduljabar</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>           

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Urology</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ali Al Shutairy</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Shereen Kamel</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>         

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>E N T</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mohd. Abdulhady</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Saeed Ibrahim</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>              

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Internal Medicine</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mostafa Metwaly</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mohd. Tolba</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ahmed Ismael</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Haeder Qamar</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ashraf Abdulsalam</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Madhat Salah</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>                                  

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>E R</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Hassan Nashaat</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Hani Wahib</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Shehab Qassam</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Amro Anwar Helal</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>  

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Physiotherapy</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ahmed El Nahas</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>  

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Infection Control</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Sundas Maqsood</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>  

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Neurology</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Fateh Alwan</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>                   

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>Pediatric</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Saud Alomar</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Ishraq Aabdulah</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Hazem Makran</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Hanaa Mohammed</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Abdullah Maflahi</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Sherif Mahmood</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Adel Magrabhy</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Mohd. Mowad</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>

                <div class="row mt-1 mb-4">
                    <div class="col-12">                    
                        <div class="page-head page-head-sm">
                            <h2>G P</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Usman Sayed</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 text-center">
                        <div class="rounded-circle overflow-hidden mb-2 p-2 bg-white border-grey"> <img src="{{asset('public/imgs/doctor-thumb.png')}}" class="img-fluid" alt=""> </div>
                        <h4 class="dr-name">Dr. Marwa Abdulqawi</h4>
                        <p class="ms-timings">08:00 AM - 06:00 PM</p>
                        <p class="ms-days">Saturday - Friday</p>
                        <a href="#" class="btn btn-sm btn-green-outline mb-3">Book Appointment</a>
                    </div>
                </div>          

            </div>
        </section>
        <!-- /Medical Specialist  -->
    	<!-- /Page Content -->
	    @include('layouts.footer')
    </body>
</html>
