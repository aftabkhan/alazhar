@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Posted Jobs</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>All Posted Jobs</h4>
                        <a href = "{{route('postJob')}}">
                            <h4>Post a vacancy</h4>
                        </a>
                    </div>
                    <div class="card-body">postJob
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Post Name</th>
                                    <th>Posted On</th>
                                    <th>Department</th>
                                    <th>Description</th>
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
@include('admin.templates.footer')
<script>
        $(document).ready(function(){
            //DataTables Example
                    $('#table_id').DataTable( {
                            "processing":true,
                            "serverSide":true,
                            "ajax": '{{$url}}',
                            "columns": [
                                { "data": 'job_name' },
                                { "data": 'created_at',
                                    "render": function (data) {
                                                                var date = new Date(data);
                                                                var month = date.getMonth() +1;
                                                                return (month.length > 1 ? month : "0" + month) + "/" + date.getDate() + "/" + date.getFullYear();
                                    }
                                },
                                { "data": 'dept_name' },
                                { "data": 'job_desc' },
                                { "data": 'id',
                                            "render": function(data,type,row){
                                                      var link = "jobs/edit/"+data;
                                                      var del_link = "jobs/delete/"+data;
                                                      return '<a href= '+link+'>Edit | </a> </a><a href= '+del_link+'>Delete</a>';
                                }
                    },
                            ]
                    });
        });
    </script>
        
