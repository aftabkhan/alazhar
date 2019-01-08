@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
        <div class="section-header">
            <h1>Packages</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                      <div class="breadcrumb-item">Packages</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Packages</h4>
                        <a href = "{{route('addPackage')}}">
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
@include('admin.templates.footer')
<script>
    $(document).ready(function(){
        $('#table_id').DataTable( {
                "processing":true,
                "serverSide":true,
                "ajax": '{{$url}}',
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
        
