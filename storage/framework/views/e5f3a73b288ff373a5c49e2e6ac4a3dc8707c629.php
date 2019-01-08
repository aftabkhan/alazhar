        <footer class="main-footer">
                        <div class="footer-left">
                            Copyright &copy; 2018
                            <div class="bullet"></div> Design &amp; Developed by <a href="#">Vendor Name</a>
                        </div>
                        <div class="footer-right">
                            Al Azhar Hospital, Riyadh - Kingdom of Saudi Arabia
                        </div>
        </footer>
    </div>
</div>

    <!-- General JS Scripts -->
    <script src="<?php echo e(asset('public/dist/modules/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/js/stisla.js')); ?>"></script>

    
    <script src="<?php echo e(asset('public/dist/modules/simple-weather/jquery.simpleWeather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/jqvmap/dist/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/summernote/summernote-bs4.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/modules/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>


    <!-- Page Specific JS File -->
    <!--<script src="<?php echo e(asset('public/dist/js/page/dashboard-general.js')); ?>"></script> -->

    <!-- Template JS File -->
    <script src="<?php echo e(asset('public/dist/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('public/dist/js/custom.js')); ?>"></script>

    <!--datatables-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/datatables/css/jquery.dataTables.css')); ?>">
    <script type="text/javascript" charset="utf8" src="<?php echo e(asset('public/datatables/js/jquery.dataTables.js')); ?>"></script>
    <script>
            $(document).ready(function(){
                $.ajax({
                            url: "getDepartments",
                            type: "GET", 
                            success: function(result){
                                $("#department_id").html(result);
                            }
                });
                $('#status_message').delay(1500).hide();
            });
    </script>
</body>

</html>