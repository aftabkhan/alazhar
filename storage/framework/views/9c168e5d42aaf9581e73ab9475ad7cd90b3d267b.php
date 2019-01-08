<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="description" content="">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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

        <!-- Laravel Javascript Validation 
        <script type="text/javascript" src="<?php echo e(asset('public/js/jsvalidation.js')); ?>"></script>
        -->
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
                                <h1 class="section-title"><?php echo app('translator')->getFromJson('labels.apply_job'); ?></h1>
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
                                    <li class="breadcrumb-item"><a href="#"><?php echo app('translator')->getFromJson('labels.career'); ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo app('translator')->getFromJson('labels.apply_job'); ?></li>
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
                                <h2><?php echo app('translator')->getFromJson('labels.apply_job'); ?></h2> 
                            </div>
                        </div>
                    </div>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="row pt-3">
                        <div class="col-md-12">  
                        <div class="media bg-deep p-4 mb-2">
                                <?php if(isset($job_id)): ?>
                                    <form class="w-100" action = "<?php echo e(url('/saveJobApplication/'.$job_id)); ?>" method = "post"files='true' enctype="multipart/form-data">
                                <?php else: ?>
                                    <form  class="w-100" action = "<?php echo e(url('/saveJobApplication')); ?>" method = "post" files='true' enctype="multipart/form-data">
                                <?php endif; ?>
                                <?php echo e(csrf_field()); ?>


                                <h2><?php echo e(isset($job_name) ? $job_name : ' '); ?></h2>
                                <h5 class="h5">PLEASE FILL IN THESE DETAILS</h5>
                                <?php if(!isset($job_id)): ?>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <select name="department_id" id="department_id" class="form-control">
                                            </select>
                                            <?php if(!empty($errors->has('department_id'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('department_id')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?> 
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select name="position_id" id="position_id" class="form-control">
                                            </select>
                                            <?php if(!empty($errors->has('position_id'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('position_id')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select name="car_exp" id="" class="form-control">
                                                <option selected disabled><?php echo app('translator')->getFromJson('labels.experience'); ?></option>
                                                <option value="1">0 - 3</option>
                                                <option value="2">3 - 5</option>
                                                <option value="3">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name = "full_name" placeholder="<?php echo app('translator')->getFromJson('labels.enter_name'); ?>Full Name">
                                        <?php if(!empty($errors->has('full_name'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('full_name')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name = "email" class="form-control" placeholder="<?php echo app('translator')->getFromJson('labels.enter_email'); ?>">
                                        <?php if(!empty($errors->has('email'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('email')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="date" name = "date_of_birth" class="form-control" placeholder="Date of Birth">
                                        <?php if(!empty($errors->has('date_of_birth'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('date_of_birth')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>  
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" name = "mobile" class="form-control" placeholder="<?php echo app('translator')->getFromJson('labels.phone'); ?>">
                                        <?php if(!empty($errors->has('mobile'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('mobile')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name = "qualification" class="form-control" placeholder="<?php echo app('translator')->getFromJson('labels.qualification'); ?>">
                                        <?php if(!empty($errors->has('qualification'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('qualification')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name = "location" class="form-control" placeholder="<?php echo app('translator')->getFromJson('labels.location'); ?>">
                                        <?php if(!empty($errors->has('location'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('location')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="file" name = "resume_file" class="form-control" placeholder="Upload your resume">
                                        <?php if(!empty($errors->has('resume_file'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('resume_file')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>  
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for=""><?php echo app('translator')->getFromJson('labels.pastehere'); ?></label>
                                        <textarea class="form-control" id="" cols="30" rows="10" name = "resume_content"></textarea>
                                        <?php if(!empty($errors->has('resume_content'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('resume_content')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                                <input value = "<?php echo app('translator')->getFromJson('labels.submit/apply'); ?>" type="submit" class="btn btn-green mr-2"/>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end main-content -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <script>
                $(document).ready(function() {
                    $("#department_id").change(function(){
                        $department_id = $("#department_id").find(":selected").val();
                            $.ajax({
                                url: "/alazhar/getDeptBasedJob/"+$department_id,
                                type: "GET",
                                success: function(result){
                                            $("#position_id").html(result);
                                }
                            });
                        });
                });
            </script>
</body>

</html>