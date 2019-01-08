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
                                <h1 class="section-title">CEO Message</h1>
                                <h4 class="section-para">About Us</h4> </div>
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
                                    <li class="breadcrumb-item"><a href="#">About Us</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">CEO Message</li>
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
                                <h2>CEO Message</h2> 
                            </div>
                            <div class="para pt-4">
                                <p>Al Azhar Hospital, employs doctors are qualified and experienced in their respective specialties, reflecting a dedication and commitment to provide the highest quality of care to patients. All the leadership groups of the hospital administration &amp; medical staff continuously work together to identify and direct the priorities of the hospital through the development and implementation of strategic plans within the scope of our mission, To Provide Compassionate healthcare of the highest quality at an affordable cost.</p>
                                <p>We welcome feedback from all representatives of our community - patients, families, physicians, volunteers, employees, and business leaders, representatives from other health related organizations - anyone who has a concern about our hospital. We are committed to meet the health care needs of all and will do our best to meet and exceed your expectations. I hope that the information that we have provided on our site is both useful and timely. We look forward to having you revisit these pages from time to time and establishing a regular relationship with us in the future.</p>
                                <p>The hospital is undergoing developmental stages from time to time, aiming to raise the level of health and safety services in the hospital to achieve high quality care. The hospital is currently establishing an infertility treatment department, cardiac catheterization department, cosmetic department, magnetic resonance imaging (MRI), a new building for outpatient clinics, Medical Records , taking into account its compliance with the standards of quality.</p>
                                <p>As a result of the importance of safety in the health facility, a large and integrated project was established with a national company to insure and implement all the safety requirements of the hospital premises, employees and visitors.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 ml-auto">
                            <div class="page-image mt-5"> <img src="<?php echo e(asset('public/imgs/ceo.jpg')); ?>" alt="" class="img-fluid"> </div>
                            <div class="message-author">
                                <h3 class="text-green">Dr. Mohamad Saleem Terro</h3>
                                <h4>Chief Executive Officer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <!-- /Page Content -->
            <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>
