<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo e($page_title); ?></h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">About US</a></div>
                      <div class="breadcrumb-item">Profile</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo e($page_title); ?></h4>
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                        <form class="w-100" action = "<?php echo e(url('aboutus-message/store')); ?>" method = "post"files='false' enctype="multipart/form-data">
                            	<?php echo csrf_field(); ?>
                                <div class="form-group col-12">
                                        <label for="">Page Title(English)</label>
                                        <?php if(isset($data->page_title_en)): ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_en" value="<?php echo e($data->page_title_en); ?>" />
                                        <?php else: ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_en"/>
                                        <?php endif; ?>
                                        <?php if(!empty($errors->has('page_title_en'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('page_title_en')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                </div>
                                <div class="form-group col-12">
                                        <label for="">Page Title(Arabic)</label>
                                        <?php if(isset($data->page_title_ar)): ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_ar" value="<?php echo e($data->page_title_ar); ?>" />
                                            
                                        <?php else: ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_ar" />
                                        <?php endif; ?>
                                        <?php if(!empty($errors->has('page_title_ar'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('page_title_ar')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                </div>
                                <div class="form-group col-12">
                                        <label for=""><?php echo e($name_field_label); ?>(English)</label>
                                        <?php if(isset($data->name_en)): ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_en" value="<?php echo e($data->name_en); ?>" />
                                        <?php else: ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_en"/>
                                        <?php endif; ?>
                                        <?php if(!empty($errors->has('name_en'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('name_en')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                </div>
                                <div class="form-group col-12">
                                        <label for=""><?php echo e($name_field_label); ?>(Arabic)</label>
                                        <?php if(isset($data->name_ar)): ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_ar" value="<?php echo e($data->name_ar); ?>" />
                                            
                                        <?php else: ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_ar" />
                                        <?php endif; ?>
                                        <?php if(!empty($errors->has('name_ar'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('name_ar')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                </div>
                                <div class="form-group col-12
                                    <label for="">Message(English)</label>
                                    <?php if(isset($data->message_en)): ?>
                                            <textarea name = "message_en" class="summernote"><?php echo e($data->message_en); ?></textarea>
                                            <?php if(!empty($errors->has('message_ar'))): ?>
                                                    <div class="row col-lg-12">
                                                        <div class="alert alert-danger">
                                                            <span><?php echo e($errors->first('message_ar')); ?></span>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                    <?php else: ?>
                                            <textarea name = "message_en" class="summernote"></textarea>
                                            <?php if(!empty($errors->has('message_en'))): ?>
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span><?php echo e($errors->first('message_en')); ?></span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                    <?php endif; ?>

                                    
                                </div>
                                <div class="form-group col-12">
                                    <label for="">Message(Arabic)</label>
                                        <?php if(isset($data->message_ar)): ?>
                                            <textarea name = "message_ar" class="summernote"><?php echo e($data->message_ar); ?></textarea>
                                            <?php if(!empty($errors->has('message_ar'))): ?>
                                                    <div class="row col-lg-12">
                                                        <div class="alert alert-danger">
                                                            <span><?php echo e($errors->first('message_ar')); ?></span>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                        <?php else: ?>
                                            <textarea name = "message_ar" class="summernote"></textarea>
                                                <?php if(!empty($errors->has('message_ar'))): ?>
                                                    <div class="row col-lg-12">
                                                        <div class="alert alert-danger">
                                                            <span><?php echo e($errors->first('message_ar')); ?></span>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                        <?php endif; ?>    
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
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-green mr-2">Add</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                        </form>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        This is card footer
                    </div>
                </div>
        </div>
    </section>
</div>
<?php echo $__env->make('admin.templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
