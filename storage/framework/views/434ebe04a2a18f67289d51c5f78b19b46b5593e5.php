<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
        <?php endif; ?>
        <div class="section-header">
            <h1>Packages</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item">Packages</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Packages</h4>
                        <a href = "<?php echo e(route('addPackage')); ?>">
                            <h4>Add Packages</h4>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Package</th>
                                    <th>MRP</th>
                                    <th>Special Price</th>
                                    <th>Notes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>  
                    </div>
                </div>
        </div>
    </section>
</div>
<?php echo $__env->make('admin.templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
    $(document).ready(function(){
        $('#table_id').DataTable( {
                "processing":true,
                "serverSide":true,
                "ajax": '<?php echo e($url); ?>',
                "columns": [
                    { "data": 'name' },
                    { "data": 'mrp' },
                    { "data": 'special_price' },
                    { "data": 'notes' },
                    { "data": 'id',
                                    "render": function(data,type,row){
                                                      var link = "packages/edit/"+data;
                                                      var del_link = "packages/delete/"+data;
                                                      var view_link = "packages/view/"+data; 
                                                      return '<a href= '+link+'>Edit | </a><a href= '+del_link+'>Delete</a>| <a href= '+view_link+'>View</a>';
                                    }
                    },
                ]
        });
    });
</script>
        
