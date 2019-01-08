@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        @if (session('status'))
                <div class="alert alert-success" id = "status_message">
                    {{ session('status') }}
                </div>
        @endif
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-defualt">
                        <img src="{{asset('public/dist/img/icon-emergency.png')}}" alt="">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Emergency Helpline <a href="#" class="text-grey float-right"><small><i class="far fa-edit"></i> Edit</small></a>  <a href="#" class="text-grey float-right"><i class="far fa-save"></i> Update</small></a></h4>
                        </div>
                        <div class="card-body mt-2">
                            +966 11 236 6788
                            <input type="text" class="form-control mb-3" placeholder="Please enter a valid number">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="section-title">Recent Items</h2>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Appointments</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right text-primary">Now</div>
                                    <div class="media-title" data-patient-name="Farhan A Mujib">Farhan A Mujib</div>
                                    <div class="clearfix">
                                        <div class="float-left" data-doctor-name="Dr. Safa Al Tayebb">Dr. Safa Al Tayebb</div> <div class="float-right" data-department-name="Orthopedic">Orthopedic</div>
                                    </div>                         
                                    <div class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right">12m</div>
                                    <div class="media-title" data-patient-name="Farhan A Mujib">Farhan A Mujib</div>
                                    <div class="clearfix">
                                        <div class="float-left" data-doctor-name="Dr. Safa Al Tayebb">Dr. Safa Al Tayebb</div> <div class="float-right" data-department-name="Orthopedic">Orthopedic</div>
                                    </div>                         
                                    <div class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right">21m</div>
                                    <div class="media-title" data-patient-name="Farhan A Mujib">Farhan A Mujib</div>
                                    <div class="clearfix">
                                        <div class="float-left" data-doctor-name="Dr. Safa Al Tayebb">Dr. Safa Al Tayebb</div> <div class="float-right" data-department-name="Orthopedic">Orthopedic</div>
                                    </div>                         
                                    <div class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="#" class="btn btn-green-outline mb-3">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Enquiries</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right text-primary">Now</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <div>anything@domain.com</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right">12m</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <div>anything@domain.com</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right">17m</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <div>anything@domain.com</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="#" class="btn btn-green-outline mb-3">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Resumes</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right text-primary">Now</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <div><strong>Job Title:</strong> Physician</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right">12m</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <div><strong>Job Title:</strong> Orthpedic</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-body">
                                    <div class="float-right">17m</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <div><strong>Job Title:</strong> Nurse</div>
                                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="#" class="btn btn-green-outline mb-3">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('admin.templates.footer')
        