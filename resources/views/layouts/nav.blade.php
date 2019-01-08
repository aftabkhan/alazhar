<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-green p-0">
    <div class="container">
        <button class="navbar-toggler border-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Menu <span class="navbar-toggler-icon"></span> </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown active"> 
                    <a class="nav-link dropdown-toggle" href="#" id="aboutus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('labels.about_us')</a> <!--@lang('labels.about_us') -->
                    
                    <div class="dropdown-menu" aria-labelledby="aboutus"> 
                        <a class="dropdown-item" href="{{route('profile')}}" >@lang('labels.profile')</a> 
                        <a class="dropdown-item" href="{{route('chairman')}}">@lang('labels.chair_msg')</a> 
                        <a class="dropdown-item" href="{{route('ceo')}}">@lang('labels.ceo_msg')</a> 
                        <a class="dropdown-item" href="{{route('gm')}}">@lang('labels.gm_msg')</a> 
                        <a class="dropdown-item" href="{{route('deputy')}}">@lang('labels.dgm_msg')</a> 
                        <a class="dropdown-item" href="{{route('tqm-director')}}">@lang('labels.tdm_msg')</a> 
                        <a class="dropdown-item" href="{{route('medical-director')}}">@lang('labels.md_msg')</a> 
                        <a class="dropdown-item" href="{{route('management')}}">@lang('labels.mng')</a> 
                        <a class="dropdown-item" href="{{route('mission-and-vision')}}">@lang('labels.mv')</a> 
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('specialities')}}">Our Specialities</a> </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="facilities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>
                   <div class="dropdown-menu" aria-labelledby="facilities"> 
                       <a class="dropdown-item" href="{{route('medical-lab')}}">Medical Lab</a> 
                       <a class="dropdown-item" href="{{route('pharmacy')}}">Pharmacy</a> 
                       <a class="dropdown-item" href="{{route('insurance-companies')}}">Insurance Companies</a> 
                       <a class="dropdown-item" href="{{route('parking')}}">Parking Facilities</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('appointment')}}">@lang('labels.appointment')</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('packages')}}">Packages</a> </li>
                <li class="nav-item dropdown"> 
                   <a class="nav-link dropdown-toggle" href="#" id="careers" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('labels.CAREERS')</a>
                   <div class="dropdown-menu" aria-labelledby="careers"> 
                       <a class="dropdown-item" href="{{route('vacancies')}}">@lang('labels.available_vacancies')</a> 
                       <a class="dropdown-item" href="{{route('vewsJobs')}}">@lang('labels.apply_job')</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('research')}}">Research</a> </li>
                <li class="nav-item dropdown"> 
                   <a class="nav-link dropdown-toggle" href="#" id="mediaCenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media Center</a>
                   <div class="dropdown-menu" aria-labelledby="mediaCenter"> 
                       <a class="dropdown-item" href="{{route('news-details')}}">News &amp; Events</a> 
                       <a class="dropdown-item" href="{{route('photo-gallery')}}">Photo Gallery</a> 
                       <a class="dropdown-item" href="{{route('video-gallery')}}">Video Gallery</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{route('showContactUsForm')}}">@lang('labels.catact_us')</a> </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /NavBar -->