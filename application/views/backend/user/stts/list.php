<div id="page-content">                                                
    <div class="block full">
        <div class="row">
            <div class="col-lg-12">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Nama</strong> Pengguna</h2>
                </div>
                <div class="block-section text-center">                    
                    <h3>
                        <strong><?=$this->session->userdata('NamaDepan')?> <?=$this->session->userdata('NamaBelakang')?></strong>
                    </h3>
                </div>                
            </div>
            </div>                                
        </div>
    </div>
<div class="block">
    <div class="block-title">
        <h2><strong>Formulir</strong> Pemesanan</h2>
    </div>
    
    <form action="<?=base_url('user/status/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">  
        <div class="form-group">
            <label class="col-md-4 control-label">Id Pemesanan</label>
            <div class="col-md-5">
                <input type="text" name="IdPemesanan" value="<?=$kodeunik?>" class="form-control" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">Id Konsumen</label>
            <div class="col-md-5">
                <input type="text" name="IdKonsumen" value="<?=$this->session->userdata('IdKonsumen')?>" class="form-control" >
            </div>
        </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Id Rumah</label>
                <div class="col-md-5">
                    <input type="text" name="IdRumah" value="<?=$produk['IdRumah']?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Tanggal Pemesanan</label>
                <div class="col-md-5">
                    <input type="text" name="TanggalPemesanan" value="<?=date('Y-m-d')?>" class="form-control" >
                </div>
            </div>
            <div class="hidden"> 
                  <input type="text" name="kodeadmin" value="201701" class="form-control" >
            </div>
            <div class="hidden">
                  <input type="text" name="status" value="Menunggu Konfirmasi" class="form-control" >
            </div>
        </div>
        <div class="form-group form-actions">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" name="submit" class="btn btn-sm btn-primary" >Simpan</button>       
            </div>
        </div>
    </form>
</div>

