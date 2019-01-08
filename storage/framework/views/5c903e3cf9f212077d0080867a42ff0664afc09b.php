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
                            <h1 class="section-title">Video Gallery</h1>
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
                                <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-3 pb-3 mh-400">
            <div class="container">
                <!-- Video Gallery -->
                <div class="row">
                    <div class="col-md-3">
                        <img src="https://i.ytimg.com/an_webp/50JwGq2ubb4/mqdefault_6s.webp?du=3000&sqp=COyFl98F&rs=AOn4CLCFnVGyHwMLrCdgxUYn5EeDL2_TUw" class="img-thumbnail video-btn cursor" title="video" data-toggle="modal" data-src="https://www.youtube.com/embed/50JwGq2ubb4" data-target="#myModal" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always">></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div> 
    	<!-- /Page Content -->
	    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script>
            $(document).ready(function() {

            // Gets the video src from the data-src on each button

            var $videoSrc;
            $('.video-btn').click(function() {
                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);

            // when the modal is opened autoplay it  
            $('#myModal').on('shown.bs.modal', function(e) {

                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
            })

            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function(e) {
                    // a poor man's stop video
                    $("#video").attr('src', $videoSrc);
                })
                // document ready  
            });
        </script>
    </body>
</html>
