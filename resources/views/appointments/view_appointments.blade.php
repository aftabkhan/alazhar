@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Booked Appointments</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>All Appointments</h4>
                    </div>
                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Booked By</th>
                                    <th>Date</th>
                                    <th>Department</th>
                                    <th>Reason</th>
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
                    { "data": 'patient_name' },
                    { "data": 'created_at' },
                    { "data": 'dept_name' },
                    { "data": 'appointment_reason' },
                ]
        });
    });
</script>
        
