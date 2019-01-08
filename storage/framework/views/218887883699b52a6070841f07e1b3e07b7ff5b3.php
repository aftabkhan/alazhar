<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Doctors</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Doctors</h4>
                        <a href = "<?php echo e(route('addDoctors')); ?>">
                            <h4>Add Doctors</h4>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Name (English)</th>
                                    <th>Name (Arabic)</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Department (English)</th>
                                    <th>Department (Arabic)</th>
                                    <th>Timings</th>
                                    <th>Actions</th>
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
                    { "data": 'name_en' },
                    { "data": 'name_ar' },
                    { "data": 'email' },
                    { "data": 'mobile' },
                    { "data": 'dept_name_en' },
                    { "data": 'dept_name_ar' },
                    { "data": 'timing' },
                    { "data": 'id',
                        "render": function(data,type,row){
                            var link = "doctors/edit/"+data;
                            var del_link = "doctors/delete/"+data;
                            var view_link = "doctors/view/"+data;
                            return '<a href= '+link+'>Edit | </a><a href= '+del_link+'>Delete |</a><a href= '+view_link+'> View</a>';
                        }
                    },
                    //id: 'action', orderable: false, searchable: false}
                ]
        });
    });
</script>
        
