@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Applications</h1>
        </div>
        <div class="section-body">
                @if (session('status'))
                    <div class="alert alert-success" id="status_message" type = "hidden">
                        {{ session('status') }}
                    </div>
                @endif
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
@include('admin.templates.footer')
<script>
            $(document).ready(function(){
                //var url = "{{link_to_asset('/public/files')}}"
                $('#table_id').DataTable( {
                        "processing":true,
                        "serverSide":true,
                        "ajax": '{{$url}}',
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
                                data = '<a href="{{url('/downloadResume')}}/' + data + '"><span>Download<h1></span></a>';
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

        
