  <!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Tambah Pembayaran
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        
        <div class="block">
         
          <div class="block-title">
            <h2><strong>Data</strong> Produk</h2>
          </div>
          
          <form action="<?=base_url('admin/pembayaran/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label">Id Pembayaran</label>
                <div class="col-md-3">
                  <input type="text" name="IdPembayaran" value="<?=$kodeunik?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Id Pemesanan</label>
                <div class="col-md-6">
                  <input type="text" name="IdPemesanan" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Tanggal Transfer</label>
                <div class="col-md-6">
                  <input type="date" name="TanggalTransfer" value="<?=date('Y-m-d')?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Bank</label>
                <div class="col-md-6">
                  <input type="text" name="Bank" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">No Rekening</label>
                <div class="col-md-6">
                  <input type="text" name="NoRekening" class="form-control" >
                </div>
            </div>
            

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?=base_url('admin/pembayaran')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>     
</div>