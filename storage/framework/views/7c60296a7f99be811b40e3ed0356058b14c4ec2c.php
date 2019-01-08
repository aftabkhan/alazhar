<?php echo $__env->make('admin.templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.templates.side_manu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Applications</h1>
        </div>
        <div class="section-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" id="status_message" type = "hidden">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Applications</h4>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Email</th>
                                    <th>Post Applied For</th>
                                    <th>Department</th>
                                    <th>Location</th>
                                    <th>Resume Attachment</th>
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
                //var url = "<?php echo e(link_to_asset('/public/files')); ?>"
                $('#table_id').DataTable( {
                        "processing":true,
                        "serverSide":true,
                        "ajax": '<?php echo e($url); ?>',
                        "columns": [
                            { "data": 'name' },
                            { "data": 'email' },
                            { "data": 'job_title',
                                  "render":function(data){
                                        if(data){
                                            return data;
                                        }else{
                                            return "Not Selected";
                                        }
                                  }
                            },
                            { "data": 'dept_name',
                                "render":function(data){
                                        if(data){
                                            return data;
                                        }else{
                                            return "Not Selected";
                                        }
                                  }
                            },
                            {"data": 'location',
                                 "render":function(data){
                                        if(data){
                                            return data;
                                        }else{
                                            return "Not Selected";
                                        }
                                  }
                            },
                            {"data": 'attachment_id',
                              "render": function(data, type, row, meta){
                                data = '<a href="<?php echo e(url('/downloadResume')); ?>/' + data + '"><span>Download<h1></span></a>';
                                return data;
                                }
                            },
                            {"data": 'app_id',
                                "render": function(data,type,row){
                                var link = "applications/view/"+data;
                                var del_link = "applications/delete/"+data;
                                return '<a href= '+link+'>View | </a> </a><a href= '+del_link+'>Delete</a>';
                            }
                    },
                        ]
        });
      });
                            
    </script>

        
