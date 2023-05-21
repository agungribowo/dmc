<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>Formulir Tambah Pemesanan</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="block">
          <div class="block-title">
            <h2><strong>Tambah</strong> Pemesanan</h2>
          </div>
          <form action="<?=base_url('admin/pemesanan/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label">Id Pemesanan</label>
                <div class="col-md-3">
                  <input type="text" name="IdPemesanan" value="<?=$kodeunik?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Id Konsumen</label>
                <div class="col-md-6">
                  <input type="text" name="IdKonsumen" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">IdRumah</label>
                <div class="col-md-6">
                  <input type="text" name="IdRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Tanggal Pemesanan</label>
                <div class="col-md-6">
                  <input type="date" name="TanggalPemesanan" value="<?=date('Y-m-d')?>" class="form-control" >
                </div>
            </div>
            <div class="hidden"> 
                  <input type="text" name="kodeadmin" value="201701" class="form-control" >
            </div>
            <div class="hidden">
                  <input type="text" name="status" value="Menunggu Konfirmasi" class="form-control" >
            </div>
            

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?=base_url('admin/pemesanan')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>     
</div>