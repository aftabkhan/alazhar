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
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Application</h4>
                    </div>
                    <div class="card-body"> 
                        <?php
                            echo "<pre>";
                            print_r($job_application_details);die; 
                        ?>
                    </div>
                </div>
        </div>
    </section>
</div>
@include('admin.templates.footer')
        
