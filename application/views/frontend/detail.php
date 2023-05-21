            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container text-center">
                    <h1 class="animation-slideDown"><strong>Detail Produk</strong></h1>
                </div>
            </section>
            <!-- END Intro -->

            <!-- Product View -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <!-- Product Details -->
                        <div class="col-md-8 col-lg-9">
                            <div class="row" data-toggle="lightbox-gallery">
                                <!-- Images -->
                                <div class="col-sm-6 push-bit">
                                    <a href="<?=base_URL().'uploads/produk/'.$produk['GambarRumah']?>" class="gallery-link"><img src="<?=base_URL().'uploads/produk/'.$produk['GambarRumah']?>" alt="" class="img-responsive push-bit"></a>
                                </div>
                                <!-- END Images -->

                                <!-- Info -->
                                <div class="col-sm-6 push-bit">
                                    <div class="clearfix">
                                        <div class="pull-right">
                                            <span class="h2"><strong>Rp <?=$produk['HargaRumah']?>.000.000</strong></span>
                                        </div>
                                        <span class="h4"><strong class="text-success">Type <?=$produk['TypeRumah']?></strong></span>
                                    </div>
                                    <hr>
                                    <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>                                    
                                    <hr>
                                    
                                    
                                    <?php if($this->session->userdata('IdKonsumen')) { ?>
                                        <a href="<?=base_url()?>produk/pemesanan/<?=$produk['IdRumah']?>" class="btn btn-primary">Pesan</a>
                                    <?php } else { ?>
                                        <a href="<?=base_url()?>auth/masuk" class="btn btn-primary">Pesan</a>
                                    <?php } ?>

                                </div>
                                <!-- END Info -->

                                <!-- More Info Tabs -->
                                <div class="col-xs-12 site-block">
                                    <ul class="nav nav-tabs push-bit" data-toggle="tabs">
                                        <li class="active"><a href="#product-specs">Specs</a></li>
                                        <li><a href="#product-description">Description</a></li>
                                    </ul>   
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="product-specs">
                                            <table class="table table-borderless table-striped table-vcenter"> 
                                                <tbody>
                                                    <tr>
                                    <td style="width: 120px;"><strong>Id Rumah</strong></td>
                                    <td><?=$produk['IdRumah']?></td>
                                </tr>
                                <tr>
                                    <td><strong>Type Rumah</strong></td>
                                    <td><?=$produk['TypeRumah']?></td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat Rumah</strong></td>
                                    <td><?=$produk['AlamatRumah']?></td>
                                </tr>
                                <tr>
                                    <td><strong>Blok Rumah</strong></td>
                                    <td><?=$produk['BlokRumah']?></td>
                                </tr>                                                    
                                <tr>
                                    <td><strong>Booking Fee</strong></td>
                                    <td><?=$produk['BookingFee']?></td>
                                </tr>              
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="product-description">
                                            <p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>                                            
                                        </div>                                        
                                    </div>
                                </div>
                                <!-- END More Info Tabs -->
                            </div>
                        </div>
                        <!-- END Product Details -->
                    </div>
                </div>
            </section>