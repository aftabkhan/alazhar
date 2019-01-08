<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Package</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item">Add</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Package</h4>
                    </div>
                    <div class="card-body">
                        <form class="w-100" action = "<?php echo e(url('packages/update')); ?>/<?php echo e($package_det->id); ?>" method = "post" files='false' enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Package Name</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "name"type="text" class="form-control" value = "<?php echo e($package_det->name); ?>">
                                    <?php if(!empty($errors->has('name'))): ?>
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span><?php echo e($errors->first('name')); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?> 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MRP</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "mrp"type="text" class="form-control" value=" <?php echo e($package_det->mrp); ?>">
                                    <?php if(!empty($errors->has('mrp'))): ?>
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span><?php echo e($errors->first('mrp')); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?> 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Special Price</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "special_price"type="text" class="form-control" value=" <?php echo e($package_det->special_price); ?>">
                                    <?php if(!empty($errors->has('special_price'))): ?>
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span><?php echo e($errors->first('special_price')); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?> 
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bullet Points</label>
                                <div class="col-sm-12 col-md-7">
                                    <?php $__currentLoopData = $package_notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package_note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input name = "bullet_points" type="text" class="form-control" value=" <?php echo e($package_note['notes']); ?>">
                                        <?php if(!empty($errors->has('bullet_points'))): ?>
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span><?php echo e($errors->first('bullet_points')); ?></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
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
<script>
    $(document).ready(function(){
        $("#add-more").click(function(){ 
           var html = $(".copy").html();
           $(".after-add-more").after(html);
        });


        $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
        });
    });
</script>

        
