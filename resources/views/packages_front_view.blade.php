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
    <!-- /Page Content -->
    <section class="p-0">
        <div class="section-container container">
            <div class="section-banner section-about text-white">
                <div class="section-overlay"></div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Packages</h1>
                        <h4 class="section-para">Health Care</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">Packages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-3 mh-400 health-packages">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Package One</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"><span class=" badge badge-success"> SAR 499 <small class="badge badge-light">/ mo</small></span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Complete Blood Count with ESR</li>
                            <li>Blood Grouping and Rh Factor</li>
                            <li>Random Blood Sugar</li>
                            <li>Serum Cholesterol</li>
                            <li>Serum Creatinine </li>
                            <li>Chest X-Ray (PA)</li>
                            <li>Urine Routine</li>
                            <li>ECG</li>
                            <li>Consultation with Physician</li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Package Two</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"><span class=" badge badge-success"> SAR 799 <small class="badge badge-light">/ mo</small></span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Complete Blood Count with ESR</li>
                            <li>Blood Sugar - Fasting &amp; PP</li>
                            <li>Blood Group and Rh Factor </li>
                            <li>Kidney Profile (Blood Urea Nitrogen, Creatinine, Uric Acid, Lipid Profile, Ultra Sound(Abdomen &amp; Pelvis), Chest X-Ray, ECG, Urine Routine)</li>
                            <li>Liver Function Tests (Total Bilirubin, Total Protein, A/G Ratio, GGT/SGOT/SGPT, Alkaline Phosphatase) </li>
                            <li>Consultation with Physician </li>
                            <li>Consultation with Dietician</li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Package Three</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"><span class=" badge badge-success"> SAR 1299 <small class="badge badge-light">/ mo</small></span></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Complete Blood Count with ESR</li>
                            <li>Blood Sugar - Fasting &amp; PP</li>
                            <li>Blood Group and Rh Factor </li>
                            <li>Lipid Profile (Serum Cholesterol, Triglycerides, HDL Cholesterol, LDL Cholesterol, VLDL Cholesterol)</li>
                            <li>Kidney Profile (Blood Urea Nitrogen, Creatinine, Uric Acid)</li>
                            <li>Liver Function Tests (Total Bilirubin, Total Protein, A/G Ratio, GGT/SGOT/SGPT, Alkaline Phosphatase) </li>
                            <li>TSH , T3, T4</li>
                            <li>Stool – occult blood</li>
                            <li>Urine Routine</li>
                            <li>Chest X-Ray (PA)</li>
                            <li>ECG</li>
                            <li>ECHO</li>
                            <li>TMT</li>
                            <li>PFT (Spirometry)</li>
                            <li>Ultra Sound Abdomen &amp; Pelvis</li>
                            <li>PSA (Males) </li>
                            <li>Pap Smear (Females)</li>
                            <li>Consultation with Physician</li>
                            <li>Consultation with Cardiologist *</li>
                            <li>Consultation with Gastroenterologist </li>
                            <li>Consultation with Dietician</li>
                            <li>Consultation with Ophthalmologist</li>
                            <li>Consultation with Dentist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page Content -->
    @include('layouts.footer')
</body>

</html>