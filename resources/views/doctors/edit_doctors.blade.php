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
                        <h4>Edit Doctor</h4>
                    </div>
                        <form class="w-100" action = "{{url('updateDoctor')}}/{{$data->id}}" method = "post"files='false' enctype="multipart/form-data">
                                @csrf
					            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name (English)<small>*</small></label>
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
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Name (Arabic)<small>*</small></label>
                                        @if(isset($data->name_ar))
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_en" value="{{$data->name_ar}}" />
                                        @else
                                            <input class="form-control" id="" cols="30" rows="10" name = "name_ar"/>
                                        @endif
                                        @if(!empty($errors->has('name_ar')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('name_ar') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                 </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input id="form_email" name="email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true" value="{{$data->email}}"> 
                                        @if(!empty($errors->has('email')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('email') }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Department<small>*</small></label>
                                        <select name="department_id" id="departmentid" class="form-control">
                                            @if(isset($data->department_id))
                                                <option value="{{$data->department_id}}" selected>{{$dept[$data->department_id]}}</option>
                                            @endif
                                            @foreach($departments as $department)
                                                <option value="{{$department['id']}}">{{$department['name_en']}}</option>
                                            @endforeach
                                        </select>
                                        @if(!empty($errors->has('department_id')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('department_id') }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Timings<small>*</small></label>
                                        <select name="timing_id" id="timing_id" class="form-control">
                                            @if(isset($data->timing_id))
                                                <option value="{{$data->timing_id}}" selected>{{$time[$data->timing_id]}}</option>
                                            @endif
                                            @foreach($timings as $timing)
                                                <option value="{{$timing['id']}}">{{$timing['timing']}}</option>
                                            @endforeach
                                        </select>
                                        @if(!empty($errors->has('timings_id')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('timings_id') }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone<small>*</small></label>
                                        <input id="form_phone" name="mobile" class="form-control" type="text" placeholder="Enter Phone" value ="{{$data->mobile}}">
                                        @if(!empty($errors->has('mobile')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('mobile') }}</span>
                                                </div>
                                            </div>
                                        @endif 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button type="submit" class="btn btn-green mr-2">Update</button>
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
        
