@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Change Password</h1>
        </div>
        @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
        @endif
        <div class="col-md-8">
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
        <h2 class="section-title">Change Password</h2>
        <div class="row">
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="contact_form" action="{{route('saveChangedPassword')}}" method="post" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="form_name">Password<small>*</small></label>
                        <input id="form_name" name="password" class="form-control" type="password" placeholder="ENter Password" required="" aria-required="true">
                        @if(!empty($errors->has('password')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                        @endif 
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="form_name">Change Password<small>*</small></label>
                        <input id="form_name" name="confirm_password" class="form-control" type="password" placeholder="Enter COnfirm Password" required="" aria-required="true">
                        @if(!empty($errors->has('confirm_password')))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first('confirm_password') }}</span>
                                </div>
                            </div>
                        @endif 
                    </div>
                </div>
                <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-green mr-2">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </form>
        </div>
    </section>
</div>
@include('admin.templates.footer')
        
