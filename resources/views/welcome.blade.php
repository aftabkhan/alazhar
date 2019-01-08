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
        <meta property="og:site_name" content="Al Azhar Hospital"/>
    
    
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

    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade d-none d-lg-block" data-ride="carousel" data-interval="3000">
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                <li data-target="#carouselExampleFade" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active"> <img class="d-block w-100" src="{{('public/imgs/slide-1.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h2>Exceptional People.<br>Exceptional <span class="text-blue">Care</span>.</h2>
                            <p>The units, areas, and departments of the organization involved in the provision of patient care.</p>
                            <p><a class="btn btn-green mr-3" href="#" role="button">MAKE AN APPOINTMENT</a> <a class="btn btn-dark-outline" href="#" role="button">DEPARTMENTS</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"> <img class="d-block w-100" src="{{asset('public/imgs/slide-2.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h2>Exceptional People.<br>Exceptional <span class="text-blue">Care</span>.</h2>
                            <p>The plan for improving the quality of care in the unit, area, or department.</p>
                            <p><a class="btn btn-green mr-3" href="#" role="button">MAKE AN APPOINTMENT</a> <a class="btn btn-dark-outline" href="#" role="button">DEPARTMENTS</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"> <img class="d-block w-100" src="{{asset('public/imgs/slide-3.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h2>Exceptional People.<br>Exceptional <span class="text-blue">Care</span>.</h2>
                            <p>The staffing requirement in each unit, area, or department to provide for patient's needs.</p>
                            <p><a class="btn btn-green mr-3" href="#" role="button">MAKE AN APPOINTMENT</a> <a class="btn btn-dark-outline" href="#" role="button">DEPARTMENTS</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"> <img class="d-block w-100" src="{{asset('public/imgs/slide-7.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h2>Exceptional People.<br>Exceptional <span class="text-blue">Care</span>.</h2>
                            <p>The staffing requirement in each unit, area, or department to provide for patient's needs.</p>
                            <p><a class="btn btn-green mr-3" href="#" role="button">MAKE AN APPOINTMENT</a> <a class="btn btn-dark-outline" href="#" role="button">DEPARTMENTS</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --></div>
    </div>
    <!-- /Carousel -->
    <div id="carousel-bottom-box" class="mt-lg-0 mt-sm-3 mb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-lg-0 mt-lg-0 mt-lg-0 mt-sm-0 mt-5 mb-sm-2 mb-2">
                    <div class="bg-dark-blue p-4 d-flex rounded-12 text-white">
                        <div><img src="{{asset('public/imgs/icon-dr.png')}}" alt="" height="40"></div>
                        <div class="text-left ml-4">
                            <h3>Qualified Doctors</h3>
                            <p>Your treatment plan is designed for steady progress, with every phase promptly implemented.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-sm-2 mb-2">
                    <div class="bg-blue p-4 d-flex rounded-12 text-white">
                        <div><img src="{{asset('public/imgs/icon-amublance.png')}}" alt="" height="40"></div>
                        <div class="text-left ml-4">
                            <h3>Emergency Care</h3>
                            <p>Your treatment plan is designed for steady progress, with every phase promptly implemented.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-sm-5 mb-0">
                    <div class="bg-light-blue p-4 d-flex rounded-12 text-white">
                        <div><img src="{{asset('public/imgs/icon-hospitals.png')}}" alt="" height="40"></div>
                        <div class="text-left ml-4">
                            <h3>24 Hour Service</h3>
                            <div class="d-flex">
                                <p class="flex-fill">Mon - Fri</p>
                                <p class="flex-fill text-right">8.00 – 18.00</p>
                            </div>
                            <div class="d-flex">
                                <p class="flex-fill">Sat</p>
                                <p class="flex-fill text-right">8.00 – 18.00</p>
                            </div>
                            <div class="d-flex">
                                <p class="flex-fill">Sun</p>
                                <p class="flex-fill text-right">8.00 – 18.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Box -->
    <section id="welcomeBox">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"> <span>Welcome to</span>
                    <h1 class="text-green">Al Azhar Hospital</h1>
                    <p>Al Azhar General Hospital is utilizing the national healthcare delivery system entrusted with the provision of preventive and curative healthcare for the Kingdom's population.It is situated in Riyadh City, Central Region of Saudi Arabia. Certified for fifty (50) beds, the institution serves the people of Riyadh and its neighboring towns.</p>
                    <p>The institution's plan for providing patient care was developed in collaboration with organizational leaders and department directors/heads. Development of the plan involved consideration of the following:
                    </p> 
                    <a href="#" class="btn btn-green mb-3">Read More</a> 
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 mb-4"><img src="{{asset('public/imgs/w-img-1.png')}}" class="img-fluid img-frame" alt=""></div>
                        <div class="col-6 mb-4"><img src="{{asset('public/imgs/w-img-2.png')}}" class="img-fluid img-frame" alt=""></div>
                        <div class="col-6 mb-4"><img src="{{asset('public/imgs/w-img-5.png')}}" class="img-fluid img-frame" alt=""></div>
                        <div class="col-6 mb-4"><img src="{{asset('public/imgs/w-img-4.png')}}" class="img-fluid img-frame" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Welcome Box -->
    <!-- Medical Specialist -->
    <section id="medicalSpecialist" class="bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12"> <span class="sub-head">Medical Specialist</span>
                    <h3>We have the best <span class="text-green">Doctors</span> of the country</h3> </div>
            </div>
            <div class="row" id = "showing_doctors">
                
            </div>
        </div>
    </section>
    <!-- /Medical Specialist  -->
    <!-- Departments -->
    <section id="departments" class="pt-5 pb-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h3>Departments</h3> </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-neurology.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Neurology</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-cardiology.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Cardiology</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-dental.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Dental</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-gynaecology.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Gynaecology</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-pulmonary.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Pulmonary</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-traumatology.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Traumatology</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-x-ray.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">X-Ray</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                    <div class="dep-icon pt-4 pb-4 d-inline-flex"><img src="{{asset('public/imgs/departments-icons/icon-nephrology.png')}}" alt="" width="" class="align-self-center" /></div>
                    <h2 class="dep-title">Nephrology</h2>
                    <p class="dep-para mt-3 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                </div>
            </div>
            <div class="text-center mt-4"> <a href="#" class="btn btn-green">See All Departments</a> </div>
        </div>
    </section>
    <!-- /Departments -->
    <!-- Secure Health -->
    <section id="secureHealth" class="bg-light-blue text-white pt-5 pb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12"> <span class="sub-head">Medical Insurance</span>
                    <h3>We cover all major <span class="text-grey">Insurances</span></h3> </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="nav-scroller rounded bg-white p-5 d-flex align-items-center justify-content-lg-between"> <img src="{{asset('public/imgs/arabian-shield-logo.png')}}" alt="" height="50" class="mr-5" /> <img src="{{asset('public/imgs/tawuniya-logo.png')}}" alt="" height="50" class="mr-5" /> <img src="{{asset('public/imgs/medgulf-logo.png')}}" alt="" height="50" class="mr-5" /> <img src="{{asset('public/imgs/saico-logo.png')}}" alt="" height="50" class="mr-5" /> <img src="{{asset('public/imgs/bupa-logo.png')}}" alt="" height="50" class="mr-5" /> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Secure Health -->
    
    @include('layouts.footer')
    </body>
</html>
