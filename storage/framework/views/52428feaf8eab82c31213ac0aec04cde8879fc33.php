<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo e(asset('public/dist/modules/bootstrap-social/bootstrap-social.css')); ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('public/dist/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('public/dist/css/custom.css')); ?>">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo e(asset('public/dist/img/logo.png')); ?>" alt="logo" class="shadow-light img-fluid p-4">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body pt-0">
                <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                <form method="POST" action="<?php echo e(route('password.email')); ?>" class="needs-validation" novalidate="">
                    <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <?php if($errors->has('email')): ?>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                    <?php endif; ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-green btn-lg btn-block" tabindex="4">
                      Send Email
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div> -->
            <div class="simple-footer">
                Copyright &copy; 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('public/dist/modules/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/js/stisla.js')); ?>"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?php echo e(asset('public/dist/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('public/dist/js/custom.js')); ?>"></script>
</body>
</html>
