<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Change Profile Details</h1>
        </div>
        <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
        <?php endif; ?>
       
        <h2 class="section-title">Change Profile Details</h2>
        <div class="col-md-4">
            <!-- Contact Form -->
            <form class="w-100" action = "<?php echo e(url('saveProfileDetails')); ?>" method = "post" files='false' enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name <small>*</small></label>
                            <input id="name" name="name" class="form-control" type="text" placeholder="Enter Name" required="" aria-required="true" value = "<?php echo e($data->name); ?>">
                            <?php if(!empty($errors->has('name'))): ?>
                                <div class="row col-lg-12">
                                    <div class="alert alert-danger">
                                        <span><?php echo e($errors->first('name')); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?> 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="form_email">Email <small>*</small></label>
                            <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true" value="<?php echo e($data->email); ?>"> 
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
                            <input id="form_phone" name="mobile" class="form-control" type="text" placeholder="Enter Phone" value="<?php echo e($data->mobile); ?>">
                            <?php if(!empty($errors->has('mobile'))): ?>
                                <div class="row col-lg-12">
                                    <div class="alert alert-danger">
                                        <span><?php echo e($errors->first('mobile')); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?> 
                        </div>
                    </div>
                     <div class="col-sm-6">
                            <div class="form-group col-12">
                                <input type="file" name = "profile_image" id= "profile_image" class="form-control" placeholder="Upload your resume">
                                <?php if(!empty($errors->has('profile_image'))): ?>
                                    <div class="row col-lg-12">
                                        <div class="alert alert-danger">
                                            <span><?php echo e($errors->first('profile_image')); ?></span>
                                        </div>
                                    </div>
                                <?php endif; ?>  
                            </div>
                    </div>
                </div>
                <div class="form-group">
                                    <button type="submit" class="btn btn-green mr-2">Send Message</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php echo $__env->make('admin.templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
