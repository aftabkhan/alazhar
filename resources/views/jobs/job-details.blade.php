<!doctype html>
<html lang="en">

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
        <meta property="og:image" content="{{asset('public/imgs/logo.png')}}"/>
        <meta property="og:url" content="http://www.alazharhospitals.com/" />
        <meta property="og:site_name" content="Al Azhar Hospital" />
    
    
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Cairo:300,400,700|Tajawal:300,400,700&amp;subset=arabic" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/fonts/flaticon/font/flaticon.css')}}">

<body>
    @include('layouts.header')
        @include('layouts.nav')
            <!-- Page Content -->
                        <!-- Page Content -->
            <section class="p-0">
                <div class="section-container container">
                    <div class="section-banner section-about text-white">
                        <div class="section-overlay"></div>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="section-title">Job Title</h1>
                                <h4 class="section-para">Careers</h4> </div>
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
                                    <li class="breadcrumb-item"><a href="#">Careers</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-3 pb-3">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <div class="job-box jb-inside p-3 mb-3">
                                <h3 class="job-title"><a href="#">{{$data['name_en']}}</a></h3>
                                <div class="job-footer mb-3">
                                    <div class="d-inline-block pr-2">
                                        <span>
                                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path></svg>
                                        </span>
                                        2 days ago
                                    </div>
                                    <div class="d-inline-block pr-2">
                                        <span>
                                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"></path></svg>
                                        </span>
                                        Full Time
                                    </div>
                                </div>
                                <div class="job-description pt-3 pb-3 text-grey">
                                    <p>We have urgent requirement of nursing staff to work in a multispeciality hospital in Riyadh, KSA.</p>
                                    <p>Qualification : GNM, BSc nursing.</p>
                                    <p>Experience : 0 to 15 years.</p>
                                    
                                    <p>Openings : 30</p>
                                    
                                    <p>Salary : As per experience negotiable</p>
                                    
                                    <p>Interested candidates feel free to call me or apply</p>
                                </div>
                                <a class="btn btn-sm btn-green" href = '{{url('/apply/'.$data['id'])}}'>Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end main-content -->
            <!-- end main-content -->
            @include('layouts.footer')
</body>

</html>