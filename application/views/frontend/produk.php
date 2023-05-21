<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container text-center">
        <h1 class="animation-slideDown"><strong>Daftar produk yang kita tawarkan ... </strong></h1>
    </div>
</section>
<!-- Product List -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">               
            <!-- Products -->
            <div class="site-block">
                
                <div class="row store-items">
                    <?php foreach($produk as $p) : ?>

                        <?php 
                            $GambarRumah = 'default.jpg';
                                    if($p->GambarRumah && file_exists('uploads/produk/'.$p->GambarRumah)) {
                                        $GambarRumah = $p->GambarRumah;
                                    }
                                ?>
                    <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                        
                        <div class="store-item">                                        
                            <div class="store-item-image">
                                <a href="<?=base_URL().'uploads/produk/'.$GambarRumah?>" class="gallery-link">                                
                                    <img src="<?=base_URL().'uploads/produk/'.$GambarRumah?>" alt="" class="img-responsive"> 
                                </a>                               
                            </div>
                            <div class="store-item-info clearfix">
                                <span class="store-item-price themed-color-dark pull-right">Rp. <?=$p->HargaRumah?>jt</span>
                                <a href="<?=base_url()?>produk/detail/<?=$p->IdRumah?>"><strong>Type <?=$p->TypeRumah?></strong></a>                               
                            </div>
                        </div>                        
                    </div>
                    <?php endforeach ?>
                    
                </div>
            </div>            
        </div>
    </div>
</section>