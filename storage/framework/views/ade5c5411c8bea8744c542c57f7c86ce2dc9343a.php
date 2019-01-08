<div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand sticky-top">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/dist/img/logo.png')); ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm sticky-top">
                        <a href="dashboard-index.html"><img src="<?php echo e(asset('public/dist/img/icon-logo.png')); ?>" alt="" class="img-fluid"></a>
                    </div>
                    <ul class="sidebar-menu mt-3">
                        <li><a class="nav-link" href="<?php echo e(url('/home')); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                    
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>About Us</span></a>
                            <ul class="dropdown-menu" aria-labelledby="aboutus"> 
                                <li><a class="nav-link" href="<?php echo e(route('addoreditProfile')); ?>">Profile</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('addChairManMessages')); ?>">Chairman Message</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('addCeoMessages')); ?>">CEO Message</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('addGmMessages')); ?>">GM Message</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('addDgmMessages')); ?>">Deputy GM Message</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('addTomDirMessages')); ?>">TQM Director Message</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('addMedDirMessages')); ?>">Medical Director Message</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('Management')); ?>">Management</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('misandvis')); ?>">Mission &amp; Vision</a> </li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="#"><i class="fas fa-fire"></i> <span>Our Specialities</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Facilities</span></a>
                            <ul class="dropdown-menu" aria-labelledby="aboutus"> 
                                <li><a class="nav-link" href="#">Medical Lab</a> </li>
                                <li><a class="nav-link" href="#">Pharmacy</a> </li>
                                <li><a class="nav-link" href="#">Insurance Company</a> </li>
                                <li><a class="nav-link" href="#">Parcking Facilities</a> </li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="<?php echo e(route('showAppointments')); ?>"><i class="fas fa-fire"></i> <span>Appointments</span></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('packages')); ?>"><i class="fas fa-fire"></i> <span>Packages</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Careers</span></a>
                            <ul class="dropdown-menu" aria-labelledby="aboutus"> 
                                <li><a class="nav-link" href="<?php echo e(route('viewAllJobs')); ?>">View Job</a> </li>
                                <li><a class="nav-link" href="<?php echo e(route('applications')); ?>">Applied Resumes</a> </li>
                            </ul>
                        </li>
                        <li class = "dropdown">
                            <a class="nav-link" href="<?php echo e(route('doctors')); ?>"><i class="fas fa-fire"></i> <span>Doctors</span></a>
                        </li>
                        <li class = "dropdown">
                            <a class="nav-link" href="<?php echo e(route('departments')); ?>"><i class="fas fa-fire"></i> <span>Departments</span></a>    
                        </li>
                        <li><a class="nav-link" href="#"><i class="fas fa-fire"></i> <span>Research</span></a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Media Center</span></a>
                            
                            <ul class="dropdown-menu" aria-labelledby="aboutus">
                                <li class="menu-header pl-4">News & Events</li> 
                                <li><a class="nav-link" href="#">Post News</a> </li>
                                <li><a class="nav-link" href="#">View News</a> </li>
                                <li class="menu-header pl-4">Video Gallery</li> 
                                <li><a class="nav-link" href="#">Upload Video</a> </li>
                                <li><a class="nav-link" href="#">View Video</a> </li>
                                <li class="menu-header pl-4">Photo Gallery</li> 
                                <li><a class="nav-link" href="#">Upload Image(s)</a> </li>
                                <li><a class="nav-link" href="#">View Images</a> </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>General Information</span></a>
                            
                            <ul class="dropdown-menu" aria-labelledby="aboutus">
                                <li><a class="nav-link" href="#">Patient Info</a> </li>
                                <li><a class="nav-link" href="#">Visitors Info</a> </li>
                            </ul>
                        </li>
                        
                        <li><a class="nav-link" href="#"><i class="fas fa-fire"></i> <span>Social URLs</span></a></li>     
                        <li><a class="nav-link" href="#"><i class="fas fa-fire"></i> <span>FAQs</span></a></li>                        
                        <li><a class="nav-link" href="#"><i class="fas fa-fire"></i> <span>Knowledge Base</span></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('contacts')); ?>"><i class="fas fa-fire"></i> <span>Contacted Users</span></a></li>
                    </ul>
                </aside>
</div>
