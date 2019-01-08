@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Profile</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">About US</a></div>
                      <div class="breadcrumb-item">Profile</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Profile</h4>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                        <form class="w-100" action = "{{url('aboutus-profile/store')}}" method = "post"files='false' enctype="multipart/form-data">
                            	@csrf
                                <div class="form-group col-12">
                                        <label for="">Page Title(English)</label>
                                        @if(isset($data->page_title_en))
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_en" value="{{$data->page_title_en}}" />
                                        @else
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_en" />
                                        @endif
                                        @if(!empty($errors->has('page_title_en')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('page_title_en') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                </div>
                                <div class="form-group col-12">
                                        <label for="">Page Title(Arabic)</label>
                                        @if(isset($data->page_title_ar))
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_ar" value="{{$data->page_title_ar}}" />
                                        @else
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_ar" />
                                        @endif
                                        @if(!empty($errors->has('page_title_ar')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('page_title_ar') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                </div>
                                <div class="form-group col-12">
                                        <label for="">Profile in English</label>
                                        @if(isset($data->profile_en))
                                            <textarea name = "profile_en" class="summernote">{{$data->profile_en}}</textarea>
                                        @else
                                            <textarea name = "profile_en" class="summernote"></textarea>
                                        @endif
                                        @if(!empty($errors->has('profile_en')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('profile_en') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                </div>
					            <div class="form-group col-12">
                                        <label for="">Profile in Arab</label>
                                        @if(isset($data->profile_ar))
                                            <textarea name = "profile_ar" class="summernote">{{$data->profile_ar}}</textarea>
                                        @else
                                            <textarea name = "profile_ar" class="summernote"></textarea>
                                        @endif
                                        @if(!empty($errors->has('profile_ar')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('profile_ar') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group col-12">
                                        <input type="file" name = "profile_image" id= "profile_image" class="form-control" placeholder="Upload your resume">
                                        @if(!empty($errors->has('profile_image')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('profile_image') }}</span>
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
        
