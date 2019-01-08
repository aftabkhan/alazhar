<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Post A New Job</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Doctor</h4>
                    </div>
                        <form class="w-100" action = "<?php echo e(url('updateDoctor')); ?>/<?php echo e($data->id); ?>" method = "post"files='false' enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
					            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name (English)<small>*</small></label>
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
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name (Arabic)<small>*</small></label>
                                        <?php if(isset($data->name_ar)): ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_en" value="<?php echo e($data->name_ar); ?>" />
                                        <?php else: ?>
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_ar"/>
                                        <?php endif; ?>
                                        <?php if(!empty($errors->has('name_ar'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('name_ar')); ?></span>
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Department<small>*</small></label>
                                        <select name="department_id" id="departmentid" class="form-control">
                                            <?php if(isset($data->department_id)): ?>
                                                <option value="<?php echo e($data->department_id); ?>" selected><?php echo e($dept[$data->department_id]); ?></option>
                                            <?php endif; ?>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($department['id']); ?>"><?php echo e($department['name_en']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if(!empty($errors->has('department_id'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('department_id')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Timings<small>*</small></label>
                                        <select name="timing_id" id="timing_id" class="form-control">
                                            <?php if(isset($data->timing_id)): ?>
                                                <option value="<?php echo e($data->timing_id); ?>" selected><?php echo e($time[$data->timing_id]); ?></option>
                                            <?php endif; ?>
                                            <?php $__currentLoopData = $timings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($timing['id']); ?>"><?php echo e($timing['timing']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if(!empty($errors->has('timings_id'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('timings_id')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone<small>*</small></label>
                                        <input id="form_phone" name="mobile" class="form-control" type="text" placeholder="Enter Phone" value ="<?php echo e($data->mobile); ?>">
                                        <?php if(!empty($errors->has('mobile'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('mobile')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-green mr-2">Update</button>
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
        
