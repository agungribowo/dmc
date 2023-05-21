<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Ubah Produk
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Ubah Data</strong> Produk</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <?=form_open_multipart('admin/produk/edit', 'role="form" class="form-horizontal form-bordered"')?> 

            <div class="form-group">
              <label class="col-md-3 control-label">Id Rumah</label>
                <div class="col-md-3">
                  <input type="text" name="IdRumah" value="<?=$produk['IdRumah']?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Type Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="TypeRumah" value="<?=$produk['TypeRumah']?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Rumah</label>
                <div class="col-md-6">
                  <input type="text" name="NamaRumah" value="<?=$produk['NamaRumah']?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Alamat</label>
                <div class="col-md-6">
                  <input type="text" name="AlamatRumah" value="<?=$produk['AlamatRumah']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Blok</label>
                <div class="col-md-6">
                  <input type="text" name="BlokRumah" value="<?=$produk['BlokRumah']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Harga</label>
                <div class="col-md-6">
                  <input type="text" name="HargaRumah" value="<?=$produk['HargaRumah']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Gambar</label>
                <div class="col-md-6">
                  <input type="file" name="GambarRumah" value="<?=$produk['GambarRumah']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Keterangan</label>
                <div class="col-md-6">
                  <input type="text" name="KeteranganRumah" value="<?=$produk['KeteranganRumah']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Booking Fee</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="BookingFee" value="<?=$produk['BookingFee']?>" class="form-control">
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
