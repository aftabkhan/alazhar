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
                        <div class="col-lg-12">
                            <div class="page-head">
                                <h2>Management</h2> 
                            </div>
                        </div>
                    </div>
                   <div id="tree"></div>
                </div>
            </section>
            <!-- /Page Content -->
            <script src="{{asset('public/js/orgChart.js')}}"></script>
            <script>
                OrgChart.templates.diva.field_0 = 
                    '<text class="field_0" style="font-size: 20px;" fill="#ffffff" x="125" y="30" text-anchor="middle">{val}</text>';
                OrgChart.templates.diva.field_1 = 
                    '<text class="field_1" style="font-size: 14px;" fill="#ffffff" x="100" y="120" text-anchor="middle">{val}</text>';

                window.onload = function () {
                    var chart = new OrgChart(document.getElementById("tree"), {
                        template: "diva",
                        layout: BALKANGraph.normal,
                        enableSearch: false,
                        scaleInitial: BALKANGraph.match.boundary,
                        //mouseScroolBehaviour: BALKANGraph.action.zoom,
                        nodeBinding: {
                            //field_0: "name",
                            field_1: "title",
                            img_0: "img"
                        },
                        nodes: [
                            { id: 1, name: "Mr. Saad Al Shamrany", title: "Chairman", img:"http://localhost/projects/alazhar/static/26Nov18/assets/imgs/chairman.jpg" },
                            
                            { id: 2, pid: 1, name: "Mr. Misfer Saad Al Shamrany", title: "Vice Chairman", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/vice-chairman.jpg" },
                            
                            { id: 3, pid: 2, name: "Dr. Abdulmalik Hosain Alsaban", title: "General Manager", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/general-manager.jpg" },
                            
                            { id: 4, pid: 2, name: "Dr. Mohamad Saleem Terro", title: "CEO", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/ceo.jpg" },
                            
                            { id: 5, pid: 3, name: "Ph. Sultan. R. Al-mutery", title: "Deputy GM", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/deputy-gm.jpg" },
                            
                            { id: 6, pid: 3, name: "Dr. Ahmad Abdulrazzaq Bafarat", title: "TQM Director", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/tqm-director.jpg" },
                            
                            { id: 7, pid: 3, name: "Dr. ", title: "Infection Control Director", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/doctor-thumb.png" },
                            
                            { id: 8, pid: 4, name: "Dr. ", title: "Medical Director", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/medical-director.jpg" },
                            
                            { id: 9, pid: 4, name: "HR Manager", title: "HR Manager", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/doctor-thumb.png" },
                            
                            { id: 10, pid: 4, name: "Nursing Director", title: "Nursing Director", img: "http://localhost/projects/alazhar/static/26Nov18/assets/imgs/doctor-thumb.png" }
                        ]
                    });  
                    
                    $("#tree a").css("display","none");
                };
            </script>
     @include('layouts.footer')
</body>

</html>