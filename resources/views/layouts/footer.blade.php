<!-- Subscribe -->
<section id="subscribe" class="bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 mb-lg-0 mb-md-0 mb-sm-3 mb-3">
                <div class="title">Subscribe To Our Newsletter</div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-3 mb-lg-0 mb-md-0 mb-sm-3 mb-3">
                <input type="text" class="form-control" placeholder="Type your name"> </div>
            <div class="col-lg-3 col-md-3 mb-lg-0 mb-md-0 mb-sm-3 mb-3">
                <input type="text" class="form-control" placeholder="Type your valid email"> </div>
            <div class="col-lg-3 col-md-3 mb-lg-0 mb-md-0 mb-sm-3 mb-3">
                <button class="btn btn-white-outline w-100">Subscribe <img src="" alt=""></button>
            </div>
        </div>
    </div>
</section>
<!-- /Subscribe -->
<!-- Footer -->
<footer id="footer" class="position-relative pt-5 pb-5">
    <div class="footer-left-bg position-absolute"><img src="{{asset('public/imgs/footer-left-bg.png')}}" alt="" height="200"></div>
    <div class="footer-right-bg position-absolute"><img src="{{asset('public/imgs/footer-right-bg.png')}}" alt="" height="200"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"> <img src="{{asset('public/imgs/white-logo.png')}}" height="70" alt="" class="mb-3">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </div>
            <div class="col-lg-8 footer-links">
                <div class="row">
                    <div class="col-12">
                        <p class="imp-links">Important Links</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Medical Specialist</a></li>
                            <li><a href="#">Research &amp; Development</a></li>
                            <li><a href="#">Medical Package</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                            <li><a href="profile.php">About AAH</a></li>
                            <li><a href="#">Facilities</a></li>
                            <li><a href="#">Doctor's Timings</a></li>
                            <li><a href="#">Appointments</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">                                
                            <li><a href="#">Patients &amp; Visitors</a></li>
                            <li><a href="knowledge-base-php">Knowledge Base</a></li>
                            <li><a href="#">Patient Testimonials</a></li>
                            <li><a href="#">Careers @ AAH</a></li>
                            <li><a href="refer-a-friend.php">Refer A Friend</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-inline d-flex justify-content-md-between bottom mt-lg-2">                                
                            <li class="list-inline-item"><a href="{{route('news')}}">News &amp; Updates</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="{{route('showContactUsForm')}}">Contact Us</a></li>
                            <li class="list-inline-item"><a href="{{route('faqs')}}">FAQs</a></li>
                            <li class="list-inline-item"><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                
               <div class="row mt-lg-2">
                   <div class="col-12">                           
                        <ul class="list-inline footer-social-links">                            
                            <li class="list-inline-item"><a href="https://www.facebook.com"><img class="svg" src="{{asset('public/imgs/logo-facebook.svg')}}" alt="" height="36"></a></li>
                            <li class="list-inline-item"><a href="https://www.twitter.com"><img class="svg" src="{{asset('public/imgs/logo-twitter.svg')}}" alt="" height="36"></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com"><img class="svg" src="{{asset('public/imgs/logo-linkedin.svg')}}" alt="" height="36"></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com"><img class="svg" src="{{asset('public/imgs/logo-youtube.svg')}}" alt="" height="36"></a></li>
                        </ul>
                   </div>
               </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-lg-5 text-lg-left text-center"> <small class="text-grey">© 2013-2018 Al Azhar Hospitals. All rights reserved.</small> </div>
            <div class="col-lg-7 text-lg-right text-center"> <small class="text-yellow">This site can be viewed on all screen tones and all smart devices and supports all kinds of browsers </small> </div>
        </div>
    </div>
</footer>
<!-- /Footer -->
<!-- jQuery -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js.map')}}"></script>


<!--datatables-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/datatables/css/jquery.dataTables.css')}}">
    <script type="text/javascript" charset="utf8" src="{{asset('public/datatables/js/jquery.dataTables.js')}}"></script>
<script>
    $(document).ready(function() {

        //DataTables Example
        //$('#date_time_picker1').datetimepicker({
            
        //});

        //$('#datetimepicker4').datetimepicker({
          //  pickTime: false
        //});
        $("#select_lang").change(function(){
            $lang_id = $("#select_lang").find(":selected").val();
            $.ajax({
                    url: "/alazhar/"+$lang_id,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result){
                        //console.log(result);
                        //return false;
                        location.reload();
                    }
            });
        });
        //Get Options For Depts
        $.ajax({
            url: "getDepartments",
            type: "GET", 
            success: function(result){
                $("#department_id").html(result);
            }
        });
        //Get Options for DOctors 
        $.ajax({
            url: "getDoctorsDd",
            type: "GET", 
            success: function(result){
                $("#doctor_id").html(result);
            }
        });

        $.ajax({
            url: "getDoctorsForBooking",
            type: "GET", 
            success: function(result){
                $("#showing_doctors").html(result);
            }
        });

        $("#jobs_search_button").click(function(){
            $dept_id = $("#department_id").find(":selected").val();
            $job_key = $("#job_id").val();
            $experience_id = $("#experience_id").find(":selected").val();
            $.ajax({
                    url: "jobSearch",
                    type: "POST",
                    data:{
                        exp_id : $experience_id,
                        job_key : $job_key,
                        dept_id : $dept_id

                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }, 
                    success: function(result){
                        $("#jobs_search_result").html(result);              
                    }
            });
             
        });
    });
</script>