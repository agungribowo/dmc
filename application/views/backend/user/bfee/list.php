<div id="page-content">
    <div class="block full">
        <div class="block-title">
            <h2><i class="fa fa-file-o"></i> <strong>Verifikasi</strong> Pembayaran</h2>
        </div>
        <div class="row">
            <div class="col-md-7">          
                <form action="<?=base_url('user/bookingfee/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                                
                <div class="form-group">
                    <label>Id Pembayaran</label>
                    <input type="text" name="IdPembayaran" value="<?=$kodebook?>" class="form-control" placeholder="Id Pembayaran">
                </div>
                <div class="form-group">
                    <label>Id Pemesanan</label>
                    <input type="text" name="IdPemesanan" class="form-control" placeholder="Id Pemesanan">
                </div>
                <div class="form-group">
                  <label>Tanggal Transfer</label>           
                  <input type="date" name="TanggalTransfer" value="<?=date('Y-m-d')?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Bank</label>
                    <input type="text" name="Bank" class="form-control" placeholder="Nama Bank">
                </div>
                <div class="form-group">
                    <label>Nomor Rekening</label>
                    <input type="text" name="NoRekening" class="form-control" placeholder="0000-0000-0000-0000">
                </div>
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-send"></i> Kirim</button>
                <a href="<?=base_url()?>user/dashboard" type="button" class="btn btn-sm btn-danger"><i class="fa fa-reply"></i> Kembali</a>
                                         
            </div>                                
        </div>                                                       
                                                                    
    </div>                       
</div>


      