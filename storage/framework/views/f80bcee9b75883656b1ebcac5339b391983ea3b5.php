<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="description" content="">
        <link rel="canonical" href="http://www.alazharhospitals.com/" />
        <title><?php echo e(config('app.name', 'Al Azhar Hospital - Riyadh, KSA')); ?></title>

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/imgs/favicon.ico')); ?>">
        <meta property="og:type" content="article" />
    
        <!-- META: TITLE OF YOUR POST OR PAGE -->
        <meta property="og:title" content="" /> 
    
        <!-- META: DESCRIPTION OF PAGE CONTENT -->
        <meta property="og:description" content="DESCRIPTION OF PAGE CONTENT" />
        <meta property="og:image" content="<?php echo e(asset('public/imgs/logo.png')); ?>" />
        <meta property="og:url" content="http://www.alazharhospitals.com/" />
        <meta property="og:site_name" content="Al Azhar Hospital" />
    
    
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/main.css')); ?>">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Cairo:300,400,700|Tajawal:300,400,700&amp;subset=arabic" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('public/fonts/flaticon/font/flaticon.css')); ?>">

    </head>
    <body>
        <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    <!-- /Page Content --> <section class="p-0">
        <div class="section-container container">
            <div class="section-banner section-about text-white">
                <div class="section-overlay"></div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Appointment</h1>
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
                            <li class="breadcrumb-item active" aria-current="page">Appointment Booking</li>
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
                                <h2>Book Appointment</h2> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="row pt-3">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="icon-box left media bg-deep p-4 mb-2">
                                        <a class="media-left pull-left mr-4" href="#"><img src="assets/imgs/icon-location.svg" alt="" width="40"></a>
                                        <div class="media-body"> 
                                            <strong class="text-light-blue">OUR OFFICE LOCATION</strong>
                                            <p class="mt-2 mb-2">Abu Hurairah, An Nasim Ash Sharqi، Riyadh 14245, Kingdom of Saudi Arabia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-4 mb-2">
                                        <a class="media-left pull-left mr-4" href="#"><img src="assets/imgs/icon-phone.svg" alt="" width="40"></a>
                                        <div class="media-body"> 
                                            <strong class="text-light-blue">OUR CONTACT NUMBER</strong>
                                            <p class="mt-2 mb-2">+966 11 236 6788</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-4 mb-2">
                                        <a class="media-left pull-left mr-4" href="#"><img src="assets/imgs/icon-mail.svg" alt="" width="40"></a>
                                        <div class="media-body"> 
                                            <strong class="text-light-blue">OUR CONTACT E-MAIL</strong>
                                            <p class="mt-2 mb-2">support@alazharhospitals.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="col-md-8">
                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class="contact_form" action="<?php echo e(route('storeAppointment')); ?>" method="post" novalidate="novalidate">
                                <?php echo e(csrf_field()); ?>

                                <input name = "doc_id" type = "hidden" value="<?php echo e($doc_id); ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_name">Name <small>*</small></label>
                                            <input id="form_name" name="full_name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true">
                                            <?php if(!empty($errors->has('full_name'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('full_name')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Email <small>*</small></label>
                                            <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true"> 
                                            <?php if(!empty($errors->has('email'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('email')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_phone">Phone <small>*</small></label>
                                            <input id="form_phone" name="mobile" class="form-control" type="text" placeholder="Enter Phone">
                                            <?php if(!empty($errors->has('mobile'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('mobile')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?> 
                                        </div>
                                    </div>
                                    <div class="    col-sm-6">
                                        <div class="form-group">
                                            <label for="form_name">Appointment for Date <small>*</small></label>
                                            <input id="datetimepicker" name="appointment_date" class="form-control" type="text" placeholder="pick a date" required="" aria-required="true">
                                            <?php if(!empty($errors->has('appointment_date'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('appointment_date')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form_name">Why Appointment ? <small>*</small></label>
                                    <textarea id="form_message" name="appointment_reason" class="form-control required" rows="5" placeholder="Enter Message" aria-required="true"></textarea>
                                    <?php if(!empty($errors->has('appointment_reason'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('appointment_reason')); ?></span>
                                                    </div>
                                                </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-green mr-2">Send Message</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    	<!-- /Page Content -->
	<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
