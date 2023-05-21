<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Ubah Konsumen
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Ubah Data</strong> Konsumen</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <?=form_open_multipart('admin/konsumen/edit', 'role="form" class="form-horizontal form-bordered"')?> 

            <div class="form-group">
              <label class="col-md-3 control-label">Id Konsumen</label>
                <div class="col-md-3">
                  <input type="text" id="example-text-input" name="IdKonsumen" value="<?=$konsumen['IdKonsumen']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">User Name</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="UserName" value="<?=$konsumen['UserName']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password</label>
                <div class="col-md-6">
                  <input type="Password" id="example-text-input" name="Password" value="<?=$konsumen['Password']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Email</label>
                <div class="col-md-6">
                  <input type="email" id="example-text-input" name="Email" value="<?=$konsumen['Email']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Depan</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="NamaDepan" value="<?=$konsumen['NamaDepan']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Belakang</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="NamaBelakang" value="<?=$konsumen['NamaBelakang']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Alamat</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="Alamat" value="<?=$konsumen['Alamat']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Kota</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="Kota" value="<?=$konsumen['Kota']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Provinsi</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="Provinsi" value="<?=$konsumen['Provinsi']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Kode Pos</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="KodePos" value="<?=$konsumen['KodePos']?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Telepon</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="Telepon" value="<?=$konsumen['Telepon']?>" class="form-control">
                </div>
            </div>
            <div class="hidden">
              <label class="col-md-3 control-label">Gambar</label>
                <div class="col-md-6">
                  <input type="text" id="example-text-input" name="Gambar" value="<?=$konsumen['Gambar']?>" class="form-control">
                </div>
            </div>

            <div class="form-group form-actions">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                <a href="<?=base_url('admin/konsumen')?>" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Batal</a>
              </div>
            </div>
          </form>
          <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
      </div>
    </div>
     
</div>
