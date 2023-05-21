  <!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Tambah Produk
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Data</strong> Produk</h2>
          </div>
          
          <form action="<?=base_url('admin/produk/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label">Id Rumah</label>
                <div class="col-md-3">
                  <input type="text" name="IdRumah" value="<?=$kodeunik?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Type Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="TypeRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="NamaRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Alamat Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="AlamatRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Blok Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="BlokRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Harga Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="HargaRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Gambar Rumah</label>
                <div class="col-md-6">
                  <input type="file" name="GambarRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Keterangan Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="KeteranganRumah" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Booking Fee</label>
                <div class="col-md-6">
                  <input type="text" name="BookingFee" class="form-control" >
                </div>
            </div>

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?=base_url('admin/produk')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>     
</div>