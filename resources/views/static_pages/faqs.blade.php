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
    @include('layouts.header') @include('layouts.nav')
    <!-- /Page Content -->
    <section class="p-0">
        <div class="section-container container">
            <div class="section-banner section-about text-white">
                <div class="section-overlay"></div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Frequently Asked Questions</h1>
                        <h4 class="section-para">FAQs</h4>
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
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-3 mh-400">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="accordion">
                        <div class="accordion">
                            <div class="accordion-header" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                <h4>FAQs Headline</h4>
                            </div>
                            <div id="collapse-1" class="accordion-body collapse show" aria-labelledby="headingOne" data-parent="#accordion">                            
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.                        
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-header" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                <h4>FAQs Headline</h4>
                            </div>
                            <div id="collapse-2" class="accordion-body collapse" aria-labelledby="headingOne" data-parent="#accordion">                            
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page Content -->
    @include('layouts.footer')
</body>

</html>