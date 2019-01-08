<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-green p-0">
    <div class="container">
        <button class="navbar-toggler border-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Menu <span class="navbar-toggler-icon"></span> </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown active"> 
                    <a class="nav-link dropdown-toggle" href="#" id="aboutus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->getFromJson('labels.about_us'); ?></a> <!--<?php echo app('translator')->getFromJson('labels.about_us'); ?> -->
                    
                    <div class="dropdown-menu" aria-labelledby="aboutus"> 
                        <a class="dropdown-item" href="<?php echo e(route('profile')); ?>" ><?php echo app('translator')->getFromJson('labels.profile'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('chairman')); ?>"><?php echo app('translator')->getFromJson('labels.chair_msg'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('ceo')); ?>"><?php echo app('translator')->getFromJson('labels.ceo_msg'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('gm')); ?>"><?php echo app('translator')->getFromJson('labels.gm_msg'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('deputy')); ?>"><?php echo app('translator')->getFromJson('labels.dgm_msg'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('tqm-director')); ?>"><?php echo app('translator')->getFromJson('labels.tdm_msg'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('medical-director')); ?>"><?php echo app('translator')->getFromJson('labels.md_msg'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('management')); ?>"><?php echo app('translator')->getFromJson('labels.mng'); ?></a> 
                        <a class="dropdown-item" href="<?php echo e(route('mission-and-vision')); ?>"><?php echo app('translator')->getFromJson('labels.mv'); ?></a> 
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('specialities')); ?>">Our Specialities</a> </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="facilities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>
                   <div class="dropdown-menu" aria-labelledby="facilities"> 
                       <a class="dropdown-item" href="<?php echo e(route('medical-lab')); ?>">Medical Lab</a> 
                       <a class="dropdown-item" href="<?php echo e(route('pharmacy')); ?>">Pharmacy</a> 
                       <a class="dropdown-item" href="<?php echo e(route('insurance-companies')); ?>">Insurance Companies</a> 
                       <a class="dropdown-item" href="<?php echo e(route('parking')); ?>">Parking Facilities</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('appointment')); ?>"><?php echo app('translator')->getFromJson('labels.appointment'); ?></a> </li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('packages')); ?>">Packages</a> </li>
                <li class="nav-item dropdown"> 
                   <a class="nav-link dropdown-toggle" href="#" id="careers" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->getFromJson('labels.CAREERS'); ?></a>
                   <div class="dropdown-menu" aria-labelledby="careers"> 
                       <a class="dropdown-item" href="<?php echo e(route('vacancies')); ?>"><?php echo app('translator')->getFromJson('labels.available_vacancies'); ?></a> 
                       <a class="dropdown-item" href="<?php echo e(route('vewsJobs')); ?>"><?php echo app('translator')->getFromJson('labels.apply_job'); ?></a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('research')); ?>">Research</a> </li>
                <li class="nav-item dropdown"> 
                   <a class="nav-link dropdown-toggle" href="#" id="mediaCenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media Center</a>
                   <div class="dropdown-menu" aria-labelledby="mediaCenter"> 
                       <a class="dropdown-item" href="<?php echo e(route('news-details')); ?>">News &amp; Events</a> 
                       <a class="dropdown-item" href="<?php echo e(route('photo-gallery')); ?>">Photo Gallery</a> 
                       <a class="dropdown-item" href="<?php echo e(route('video-gallery')); ?>">Video Gallery</a> 
                   </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('showContactUsForm')); ?>"><?php echo app('translator')->getFromJson('labels.catact_us'); ?></a> </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /NavBar -->