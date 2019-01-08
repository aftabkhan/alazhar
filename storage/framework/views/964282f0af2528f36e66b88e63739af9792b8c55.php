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
                        <h1 class="section-title">Research</h1>
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
                            <li class="breadcrumb-item active" aria-current="page">Research</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

        <section class="pt-3 pb-3 mh-400">
            <div class="container">
                <h4 class="text-center"> Will be updated soon.</h4>
            </div>
        </section>    
    	<!-- /Page Content -->
	<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
