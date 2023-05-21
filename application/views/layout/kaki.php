
            <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h4 class="footer-heading">Tentang</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="<?= base_url()?>web/tentang">Perusahaan</a></li>
                                <li><a href="<?= base_url()?>web/kontak">Kontak</a></li>                                
                            </ul>
                        </div>
                        
                        <div class="pull-right">
                        <!-- <div class="col-sm-12 col-md-6">  -->                           
                            <h4 class="footer-heading"><?= date("Y")?> &copy; <a href="#">PT.Metro Bekasi</a></h4>
                            <ul class="footer-nav list-inline">
                                <li>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="#">admin</a></li>
                            </ul>
                        <!-- </div> -->
                    </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        

        <!-- Scroll to top link, initialized in <?=base_url() ?>assets/frontend/js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="<?=base_url() ?>assets/frontend/js/vendor/jquery.min.js"></script>
        <script src="<?=base_url() ?>assets/frontend/js/vendor/bootstrap.min.js"></script>
        <script src="<?=base_url() ?>assets/frontend/js/plugins.js"></script>
        <script src="<?=base_url() ?>assets/frontend/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?=base_url() ?>assets/frontend/js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>