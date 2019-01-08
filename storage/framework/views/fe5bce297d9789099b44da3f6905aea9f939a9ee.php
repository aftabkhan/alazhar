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
                        <?php $page_title = 'page_title_'.$language ?>
                        <h1 class="section-title"><?php echo e($data->$page_title); ?></h1>
                        <h4 class="section-para"><?php echo app('translator')->getFromJson('labels.about_us'); ?></h4>
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
                            <li class="breadcrumb-item"><a href="#"><?php echo app('translator')->getFromJson('labels.about_us'); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chairman Message</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-head">
                        
                        <h2><?php echo e($data->$page_title); ?></h2>
                    </div>
                    <div class="para pt-4">
                        <?php $message = 'message_'.$language ?>
                        <?php echo e($data->$message); ?>

                    </div>
                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="page-image mt-5">
                        <?php 
                                $attachment_link = 'public/imgs/profiles/'.$attachment; 
                        ?>
                        <img src="<?php echo e(asset($attachment_link)); ?>" alt="" class="img-fluid">
                    </div>                    
                    <div class="message-author">
                        <?php $name = 'name_'.$language ?>              
                        <h3 class="text-green"><?php echo e($data->$name); ?></h3>
                        <?php $profile = 'profile_'.$language ?>
                        <h4><?php echo e($data->$profile); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page Content -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>
