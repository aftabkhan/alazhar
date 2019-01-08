@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Package</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                      <div class="breadcrumb-item">Add</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Package</h4>
                    </div>
                    <div class="card-body">
                        <form class="w-100" action = "{{url('packages/update')}}/{{$package_det->id}}" method = "post" files='false' enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Package Name</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "name"type="text" class="form-control" value = "{{$package_det->name}}">
                                    @if(!empty($errors->has('name')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('name') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MRP</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "mrp"type="text" class="form-control" value=" {{$package_det->mrp}}">
                                    @if(!empty($errors->has('mrp')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('mrp') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Special Price</label>
                                <div class="col-sm-12 col-md-7">
                                <input name = "special_price"type="text" class="form-control" value=" {{$package_det->special_price}}">
                                    @if(!empty($errors->has('special_price')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('special_price') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bullet Points</label>
                                <div class="col-sm-12 col-md-7">
                                    @foreach($package_notes as $package_note)
                                        <input name = "bullet_points" type="text" class="form-control" value=" {{$package_note['notes']}}">
                                        @if(!empty($errors->has('bullet_points')))
                                            <div class="row col-lg-12">
                                                <div class="alert alert-danger">
                                                    <span>{{ $errors->first('bullet_points') }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                  </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
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
<script>
    $(document).ready(function(){
        $("#add-more").click(function(){ 
           var html = $(".copy").html();
           $(".after-add-more").after(html);
        });


        $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
        });
    });
</script>

        
