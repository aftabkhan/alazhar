<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Contacted Users</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Dashboard</a></div>
                      <div class="breadcrumb-item">Contacted Users</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Contacted Users</h4>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Contacted Person</th>
                                    <th>Message</th>
                                    <th>Reason</th>
                                    <th>Contacted On</th>
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
                    { "data": 'message' },
                    { "data": 'reason' },
                    { "data": 'created_at',
                                    "render": function (data) {
                                                    var date = new Date(data);
                                                    var month = date.getMonth() +1;
                                                    return (month.length > 1 ? month : "0" + month) + "/" + date.getDate() + "/" + date.getFullYear();
                                    }
                    },
                ]
        });
    });
</script>
        
