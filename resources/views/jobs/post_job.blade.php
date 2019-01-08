@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Post A New Job</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Posting Form</h4>
                    </div>
                    <div class="card-body">
                        <form class="w-100" action = "{{url('savepostedjob')}}" method = "post"files='false' enctype="multipart/form-data" id = "posting_vacancy_form">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job Title (English)</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "name_en"type="text" class="form-control">
                                    @if(!empty($errors->has('name_en')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('name_en') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Job Title (Arabic)</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "name_ar"type="text" class="form-control">
                                    @if(!empty($errors->has('name_ar')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('name_ar') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name = "category" id = department_id class="form-control selectric">
                                    </select>
                                    @if(!empty($errors->has('category')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('category') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                  </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content (English)</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name = "job_desc_en" class="summernote"></textarea>
                                    @if(!empty($errors->has('job_desc_en')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('job_desc_en') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content (Arabic)</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name = "job_desc_ar" class="summernote"></textarea>
                                    @if(!empty($errors->has('job_desc_ar')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('job_desc_ar') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Publish</button>
                                </div>
                            </div>
                        <!--
                            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                            <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
                            <script type="text/javascript" src="{{ asset('vendor/proengsoft/laravel-jsvalidation/public/js/jsvalidation.js')}}"></script>
                            {!! JsValidator::formRequest('\Alazhar\Http\Requests\SaveJobPosts', '#posting_vacancy_form') !!}
                        -->
                        </form>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        This is card footer
                    </div>
                </div>
        </div>
    </section>
</div>
@include('admin.templates.footer')
        
