<!doctype html>
<html lang="en">

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

        <!-- Laravel Javascript Validation -->
        <script type="text/javascript" src="<?php echo e(asset('public/js/jsvalidation.js')); ?>"></script>
<body>
        <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- Page Content -->
			<section class="p-0">
                <div class="section-container container">
                    <div class="section-banner section-about text-white">
                        <div class="section-overlay"></div>
                        <div class="row">
                            <div class="col-12">
                                <h1 class="section-title"><?php echo app('translator')->getFromJson('labels.how_to_reach_us'); ?></h1>
                                <h4 class="section-para"><?php echo app('translator')->getFromJson('labels.catact_us'); ?></h4> </div>
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
                                    <li class="breadcrumb-item"><a href="#"><?php echo app('translator')->getFromJson('labels.home'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->getFromJson('labels.catact_us'); ?></li>
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
                                <h2><?php echo app('translator')->getFromJson('labels.catact_us'); ?></h2> 
                            </div>
                        </div>
                    </div>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
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
                        <div class="col-md-8">
                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class="contact_form" action="<?php echo e(route('saveContactedDetails')); ?>" method="post" novalidate="novalidate">
                                <?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_name"><?php echo app('translator')->getFromJson('labels.name'); ?><small>*</small></label>
                                            <input id="form_name" name="full_name" class="form-control" type="text" placeholder="<?php echo app('translator')->getFromJson('labels.enter_name'); ?>" required="" aria-required="true">
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
                                            <label for="form_email"><?php echo app('translator')->getFromJson('labels.email'); ?> <small>*</small></label>
                                            <input id="form_email" name="email" class="form-control required email" type="email" placeholder="<?php echo app('translator')->getFromJson('labels.enter_email'); ?>" aria-required="true"> 
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
                                            <label for="form_name"><?php echo app('translator')->getFromJson('labels.ihavea'); ?><small>*</small></label>
                                            <select name="reason" id="" class="form-control">
                                                <option value="1">Enquiry</option>
                                                <option value="2">Suggestion</option>
                                                <option value="3">Complaint</option>
                                            </select>
                                            <?php if(!empty($errors->has('reason'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('reason')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_phone"><?php echo app('translator')->getFromJson('labels.phone'); ?></label>
                                            <input id="form_phone" name="mobile" class="form-control" type="text" placeholder="<?php echo app('translator')->getFromJson('labels.enter_mobile'); ?>">
                                            <?php if(!empty($errors->has('mobile'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('mobile')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form_name"><?php echo app('translator')->getFromJson('labels.message'); ?></label>
                                    <textarea id="form_message" name="message" class="form-control required" rows="5" placeholder="<?php echo app('translator')->getFromJson('labels.enter_message'); ?>" aria-required="true"></textarea>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-green mr-2"><?php echo app('translator')->getFromJson('labels.send_message'); ?></button>
                                    <button type="reset" class="btn btn-default"><?php echo app('translator')->getFromJson('labels.reset'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Divider: Google Map -->
            <section class="pt-0 pb-0">
              <div class="container-fluid">
                <div class="row">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8619.546189307994!2d46.841832487444265!3d24.724382701158202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe611fa4d8467685d!2z2YXYs9iq2LTZgdmJINin2YTYp9iy2YfYp9ix!5e0!3m2!1sen!2sin!4v1540462668617" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </section>
            <!-- end main-content -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>
