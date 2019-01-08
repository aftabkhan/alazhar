<?php
    $user_id = Auth()->user()->id;
    if(!(isset($user_id)&&($user_id>0))){
        return redirect(route('logout'));
    }
?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo e(config('app.name', 'Al Azhar Hospital - Riyadh, KSA')); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/imgs/favicon.ico')); ?>">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/fontawesome/css/all.min.css')); ?>">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/jqvmap/dist/jqvmap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/weather-icon/css/weather-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/weather-icon/css/weather-icons-wind.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/summernote/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/flag-icon-css/css/flag-icon.min.css')); ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/dist/css/custom.css')); ?>">
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg bg-green"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <?php
                        $user_name = Auth()->user()->name;
                        $profile_image_name = \Alazhar\Attachments::find(Auth()->user()->profile_image_id)->attachment;
                        $src = 'public/imgs/profiles/'.$profile_image_name;
                       
                    ?>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?php echo e(asset($src)); ?>" width="30" class="rounded-circle mr-1')}}">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo e($user_name); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <a href="<?php echo e(route('changeProfileDetails')); ?>" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Change Profile Details
                            </a>
                            <a href="<?php echo e(route('changePassword')); ?>" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Change Password
                            </a>
                            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>