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
        <link rel="stylesheet" href="<?php echo e(asset('public/css/lightbox.css')); ?>">
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Cairo:300,400,700|Tajawal:300,400,700&amp;subset=arabic" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('public/fonts/flaticon/font/flaticon.css')); ?>">

    </head>
    <body class="custom-modal">
        <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    <!-- /Page Content -->
		<section class="p-0">
            <div class="section-container container">
                <div class="section-banner section-about text-white">
                    <div class="section-overlay"></div>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="section-title">Photo Gallery</h1>
                            <h4 class="section-para">Media</h4>
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
                                <li class="breadcrumb-item"><a href="#">Media</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-3 pb-3 mh-400">

            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3">
                        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                            <img src="<?php echo e(asset('public/imgs/gallery/img-thumb-1.jpg')); ?>" class="img-fluid img-thumbnail" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                            <img src="<?php echo e(asset('public/imgs/gallery/img-thumb-2.jpg')); ?>" class="img-fluid img-thumbnail" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                            <img src="<?php echo e(asset('public/imgs/gallery/img-thumb-3.jpg')); ?>" class="img-fluid img-thumbnail" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                            <img src="<?php echo e(asset('public/imgs/gallery/img-thumb-4.jpg')); ?>" class="img-fluid img-thumbnail" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    	<!-- /Page Content -->
	    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script>
            $(document).ready(function() {
                var $lightbox = $('#lightbox');
                
                $('[data-target="#lightbox"]').on('click', function(event) {
                    var $img = $(this).find('img'), 
                        src = $img.attr('src'),
                        alt = $img.attr('alt'),
                        css = {
                            'maxWidth': $(window).width() - 100,
                            'maxHeight': $(window).height() - 100
                        };
                
                    $lightbox.find('.close').addClass('hidden');
                    $lightbox.find('img').attr('src', src);
                    $lightbox.find('img').attr('alt', alt);
                    $lightbox.find('img').css(css);
                });
                
                $lightbox.on('shown.bs.modal', function (e) {
                    var $img = $lightbox.find('img');
                        
                    $lightbox.find('.modal-dialog').css({'width': $img.width()});
                    $lightbox.find('.close').removeClass('hidden');
                });
            });
        </script>
    </body>
</html>
