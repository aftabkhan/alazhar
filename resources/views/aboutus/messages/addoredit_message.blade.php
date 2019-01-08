@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{$page_title}}</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">About US</a></div>
                      <div class="breadcrumb-item">Profile</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    @if (session('status'))
                    <div class="card-header">
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    </div>
                    @endif
                    <div class="container">
                        <form class="w-100" action = "{{url('aboutus-message/store')}}" method = "post"files='false' enctype="multipart/form-data">
                            	@csrf
                                <div class="row">
                                    <div class="col-12 bg-light mb-4">
                                        <h5 class="m-2">Post in English</h5>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="">Page Title</label>
                                        @if(isset($data->page_title_en))
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_en" value="{{$data->page_title_en}}" />
                                        @else
                                            <input class="form-control" id="" cols="30" rows="10" name = "page_title_en"/>
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
                                        <label for="">{{$name_field_label}}(English)</label>
                                        @if(isset($data->name_en))
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_en" value="{{$data->name_en}}" />
                                        @else
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_en"/>
                                        @endif
                                        @if(!empty($errors->has('name_en')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('name_en') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                    </div>                                    
                                    <div class="form-group col-12">
                                        <label for="">Message(English)</label>
                                        @if(isset($data->message_en))
                                        <textarea name = "message_en" class="summernote">{{$data->message_en}}</textarea>
                                            @if(!empty($errors->has('message_ar')))
                                                    <div class="row col-lg-12">
                                                        <div class="alert alert-danger">
                                                            <span>{{ $errors->first('message_ar') }}</span>
                                                        </div>
                                                    </div>
                                            @endif
                                        @else
                                            <textarea name = "message_en" class="summernote"></textarea>
                                            @if(!empty($errors->has('message_en')))
                                                <div class="row col-lg-12">
                                                    <div class="alert alert-danger">
                                                        <span>{{ $errors->first('message_en') }}</span>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 bg-light mb-4">
                                        <h5 class="m-2">Post in Arabic</h5>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="">Page Title</label>
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
                                        <label for="">{{$name_field_label}}</label>
                                        @if(isset($data->name_ar))
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_ar" value="{{$data->name_ar}}" />
                                            
                                        @else
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_ar" />
                                        @endif
                                        @if(!empty($errors->has('name_ar')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('name_ar') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="">Message</label>
                                            @if(isset($data->message_ar))
                                                <textarea name = "message_ar" class="summernote">{{$data->message_ar}}</textarea>
                                                @if(!empty($errors->has('message_ar')))
                                                        <div class="row col-lg-12">
                                                            <div class="alert alert-danger">
                                                                <span>{{ $errors->first('message_ar') }}</span>
                                                            </div>
                                                        </div>
                                                    @endif
                                            @else
                                                <textarea name = "message_ar" class="summernote"></textarea>
                                                    @if(!empty($errors->has('message_ar')))
                                                        <div class="row col-lg-12">
                                                            <div class="alert alert-danger">
                                                                <span>{{ $errors->first('message_ar') }}</span>
                                                            </div>
                                                        </div>
                                                    @endif
                                            @endif    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 bg-light mb-4">
                                        <h5 class="m-2">Upload Image</h5>
                                    </div>
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
                    </div>
                </div>
        </div>
    </section>
</div>
@include('admin.templates.footer')
        
