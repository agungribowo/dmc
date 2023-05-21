<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Masuk</strong></h1>
        <h2 class="h3 text-center animation-slideUp">Masuk ke Halaman Pengguna!</h2>
    </div>
</section>
<!-- END Intro -->
<!-- Log In -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                <!-- Log In Form -->
                <form action="<?php echo base_url(); ?>auth/cekmasuk" method="post" id="form-log-in" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-keys"></i></span>
                                <input type="text" name="UserName" class="form-control input-lg" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" name="Password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <!-- <div class="col-xs-6">
                        <a href="<?=base_url('daftar')?>" type="button" class="btn btn-lg btn-success"><i class="fa fa-arrow-left"></i> Daftar</a>                                        
                        </div> -->
                        <div class="col-xs-6">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary"><i class="fa fa-arrow-right"></i> Masuk</button>
                        </div>
                    </div>                 
                </form>                            
            </div>
        </div>                    
    </div>
</section>

<section class="site-content site-section">
    <div class="container">
        <div class="row row-items text-center">
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="gi gi-life_preserver"></i>
                </a>
                <h4>Open a <strong>ticket</strong></h4>
            </div>
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="gi gi-envelope"></i>
                </a>
                <h4><strong>Email</strong> Us</h4>
            </div>
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="fa fa-comments"></i>
                </a>
                <h4><strong>Chat</strong> Live</h4>
            </div>
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="fa fa-twitter"></i>
                </a>
                <h4><strong>Tweet</strong> Us</h4>
            </div>
        </div>
    </div>
</section>