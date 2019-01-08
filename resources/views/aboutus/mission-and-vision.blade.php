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

        <!-- Laravel Javascript Validation -->
        <script type="text/javascript" src="{{ asset('public/js/jsvalidation.js')}}"></script>
<body>
        @include('layouts.header')
        @include('layouts.nav')
            <!-- Page Content -->
    <section class="p-0">
        <div class="section-container container">
            <div class="section-banner section-mission text-white">
                <div class="section-overlay"></div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Mission &amp; Vision</h1>
                        <h4 class="section-para">About Us</h4>
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
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mission &amp; Vision</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('public/imgs/mission-health-care.jpg')}}" alt="" class="img-frame img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="page-head mt-lg-0 mt-4">
                        <h2>Mission</h2>
                    </div>
                    <div class="para pt-4">
                        <p>To provide state-of-the-art comprehensive patient care, education, training, access to public awareness to the population of Kingdom of Saudi Arabia, with the highest ethical standards and quality of life .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2">                    
                    <div class="page-head mt-lg-0 mt-4">
                        <h2>Vision</h2>
                    </div>
                    <div class="para pt-4">
                        <p>To be one of the pioneers in providing high quality healthcare service complying with national and international quality and patient safety standards.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{asset('public/imgs/vision-health-care.jpg')}}" alt="" class="img-frame img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            
            <div class="page-head mt-lg-0 mt-4">
                <h2>Values</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="para pt-4">
                        <p><strong>1. Commitment</strong></p>
                        <p>We demonstrate our commitment to world-class care by providing a caring , safe and supportive environment for our patients, patients’ families and fellow caregivers.</p>
                        <p><strong>2. Distinction</strong></p>
                        <p>We maintain the highest standards and achieve them by continually measuring and improving our outcomes.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="para pt-4">
                        <p><strong>3. Team work</strong></p>
                        <p>We collaborate and share knowledge to benefit patients and fellow caregivers for the advancement of our mission.</p>
                        <p><strong>4. Patient comes first</strong></p>
                        <p>The needs of the patient comes first</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page Content -->
            @include('layouts.footer')
</body>

</html>
