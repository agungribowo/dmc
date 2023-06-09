            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-plus"></i> <strong>Daftar</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Daftar Sebagai Pengguna!</h2>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Sign Up -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                            <!-- Sign Up Form -->
                            <form action="<?php echo base_url(); ?>auth/masuk/daftar" method="post" id="form-sign-up" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">                                            
                                            <input type="hidden" name="IdKonsumen" value="<?=$kodeunik?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" name="UserName" class="form-control input-lg" placeholder="First name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input type="email" id="register-email" name="register-email" class="form-control input-lg" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="register-password" name="register-password" class="form-control input-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input type="password" id="register-password-verify" name="register-password-verify" class="form-control input-lg" placeholder="Verify Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                                            <input type="checkbox" id="register-terms" name="register-terms"><span></span>
                                        </label>
                                        
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Sign Up -->         