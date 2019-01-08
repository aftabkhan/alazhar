<!-- TopBar -->
<div id="topBar">
    <div class="container">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-3">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{route('faqs')}}">FAQs</a></li>
                    <li class="list-inline-item"><a href="{{route('referral')}}">Refer a Friend</a></li>
                    <li class="list-inline-item"><a href="knowledge-base.php">Knowledge Base</a></li>
                    <li class="list-inline-item"><a href="news-update.php">News & Update</a></li>
                </ul>
            </div>
            <div class="col-lg-4 ml-auto text-right social-links">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="https://www.facebook.com"><img src="{{asset('public/imgs/logo-facebook.svg')}}" alt="" height="22"></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com"><img src="{{asset('public/imgs/logo-twitter.svg')}}" alt="" height="22"></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com"><img src="{{asset('public/imgs/logo-linkedin.svg')}}" alt="" height="22"></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com"><img src="{{asset('public/imgs/logo-youtube.svg')}}" alt="" height="22"></a></li>
                    <select name="reason" id="select_lang">
                        <option >@lang('labels.chose_lang')</option>
                        <option value="en">English</option>
                        <!--@lang('labels.English')-->
                        <option value="ar">@lang('labels.Arabic')</option>
                    </select>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /topBar -->
<!-- Header -->
<header id="headerMain" class="sticky">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-4 col-md-4">
                <a class="navbar-brand mr-auto mr-lg-0" href="{{url('/')}}"><img src="{{asset('public/imgs/logo.png')}}" alt="Hospital logo" title="Al Azhar Hospital" /></a>
            </div>
            <div class="col-lg-8 col-md-8 ml-auto text-right d-flex align-items-center justify-content-center justify-content-sm-between mb-lg-0 mb-3 mt-lg-0 mt-2">
                <!-- <ul class="list-inline mb-0 d-flex align-items-end justify-content-center justify-content-sm-between w-sm-100 header-helpline"> -->
                <ul class="list-inline mb-0 d-flex align-items-end flex-column w-sm-100 header-helpline">
                    <!-- <li class="list-inline-item text-left ml-lg-5">
                        <div class="d-flex">
                            <div class="mr-3"> <img src="assets/imgs/icon-emergency.png" width="36" height="" alt=""> </div>
                            <div class="d-inline"> <small>Emegency Helpline</small>
                                <h4 class="text-green"><strong> 92-000-5464</strong></h4> </div>
                        </div>
                    </li> -->
                    <li class="list-inline-item"> <img src="{{asset('public/imgs/vision-2030.png')}}" class="logo-vision" alt="" /> </li>
                </ul>
            </div> <a href="#" class="lang-toggle position-absolute"><span class="text-cairo">العربية</span> <i class="flaticon-internet"></i></a> </div>
    </div>
</header>
<!-- /Header -->