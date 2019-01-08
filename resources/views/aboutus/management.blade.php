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
                    <div class="section-banner section-about text-white">
                        <div class="section-overlay"></div>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="section-title">Management</h1>
                                <h4 class="section-para">About Us</h4> </div>
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
                                    <li class="breadcrumb-item active" aria-current="page">Management</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-3 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="page-head">
                                <h2>Management</h2> 
                            </div>
                            <div class="para pt-4">
                                <p>Content will be updated soon...</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 ml-auto">
                            <div class="page-image mt-5"> <img src="" alt="" class="img-fluid"> </div>
                            
                            <div class="message-author">
                                <h3 class="text-green"></h3>
                                <h4>Management</h4>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- /Page Content -->
            @include('layouts.footer')
</body>

</html>
