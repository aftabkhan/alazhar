@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Department</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Department</h4>
                    </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="w-100" action = "{{url('storeDepartment')}}" method = "post"files='false' enctype="multipart/form-data">
                            		@csrf
		                        
					            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name (English) <small>*</small></label>
                                        <input name="name_en" class="form-control" type="text" placeholder="Enter Name in English"  aria-required="true">
                                        @if(!empty($errors->has('name_en')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('name_en') }}</span>
                                            </div>
                                        </div>
                                        @endif 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name (Arabic) <small>*</small></label>
                                        <input name="name_ar" class="form-control" type="text" placeholder="أدخل الاسم باللغة العربية"  aria-required="true">
                                        @if(!empty($errors->has('name_ar')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('name_ar') }}</span>
                                            </div>
                                        </div>
                                        @endif 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-green mr-2">Add</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
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
        
