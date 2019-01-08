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
                                <h1 class="section-title">@lang('labels.available_vacancies')</h1>
                                <h4 class="section-para">@lang('labels.career')</h4> </div>
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
                                    <li class="breadcrumb-item"><a href="#">@lang('labels.home')</a></li>
                                    <li class="breadcrumb-item"><a href="#">@lang('labels.career')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@lang('labels.available_vacancies')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-3 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-head">
                                <h2>@lang('labels.available_vacancies')</h2> </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="media bg-deep p-4 mb-2">
                                        <form action="">
                                           <h5 class="h5">@lang('labels.job_search')</h5>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <input type="text" class="form-control" id = "job_id" placeholder="@lang('labels.key_words')"> 
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-12">
                                                    <select name="" id="department_id" class="form-control">
                                                    </select>
                                                </div>
                                                <div class="form-group col-12">
                                                    <select name="" id="experience_id" class="form-control">
                                                        <option selected disabled>@lang('labels.experience')</option>
                                                        <option value="0">0 - 3</option>
                                                        <option value="0">3 - 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="btn btn-green-outline btn-sm" id = "jobs_search_button">@lang('labels.search')</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" id = "jobs_search_result">
                        </div>
                        <h1 class="load-more">Load More</h1>
                    </div>
                </div>
            </section>
            <!-- end main-content -->
            <script type="text/javascript" charset="utf8" src="{{asset('public/js/loadmore.js')}}"></script>
            @include('layouts.footer')
            <script>
               $(document).ready(function() {
                   $.ajax({
                       url: "showAllJobs",
                        type: "GET", 
                        success: function(result){
                           $("#jobs_search_result").html(result);
                        }
                    });

                   $('.load-more').loadmore('', {
                        loadingText : 'Loading',
                        filterResult: '.list > *',
                        useExistingButton: '.button',
                        useOffset: true,
                        rowsPerPage: 5,
                        baseOffset: -1,
                        itemSelector: 'ul .item',
                        pageParam : false,
                        pageStartParam: 'foo'
                    });

        
                });
            </script>
</body>

</html>