@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Departments</h1>
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
                        <h4>Departments</h4>
                        <a href = "{{route('addDepartment')}}">
                            <h4>Add Departments</h4>
                        </a>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>Department</th>
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
@include('admin.templates.footer')
<script>
    $(document).ready(function(){
        $('#table_id').DataTable( {
                "processing":true,
                "serverSide":true,
                "ajax": '{{$url}}',
                "columns": [
                    { "data": 'id' },
                    { "data": 'name_en' },
                    { "data": 'id',
                        "render": function(data,type,row){
                            var link = "departments/edit/"+data;
                            var del_link = "departments/delete/"+data;
                            return '<a href= '+link+'>Edit | </a> </a><a href= '+del_link+'>Delete</a>';
                        }
                    },
                ]
        });
    });
</script>
        
