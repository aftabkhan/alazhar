<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Package View</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item">Package View</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Packages View</h4>
                    </div>
                    <div class="card-body">
                        Will be updated soon...  
                    </div>
                </div>
        </div>
    </section>
</div>
<?php echo $__env->make('admin.templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
