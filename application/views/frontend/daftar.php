<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Masuk</strong></h1>
        <h2 class="h3 text-center animation-slideUp">Masuk ke Halaman Pengguna!</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Dashboard 2 Content -->
<div id="page-content">
    <div class="content-header">
      <div class="header-section">
        <h1>
          Formulir Tambah Konsumen
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7">
        <!-- Basic Form Elements Block -->
        <div class="block">
          <!-- Basic Form Elements Title -->
          <div class="block-title">
            <h2><strong>Tambah</strong> Konsumen</h2>
          </div>
          <!-- END Form Elements Title -->

          <!-- Basic Form Elements Content -->
          <form action="<?=base_url('admin/konsumen/tambah')?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">

            <div class="form-group">
              <label class="col-md-3 control-label">Id konsumen</label>
                <div class="col-md-3">
                  <input type="text" name="IdKonsumen" value="<?=$kodeunik?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">User Name</label>
                <div class="col-md-6">
                  <input type="text" name="UserName" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password</label>
                <div class="col-md-6">
                  <input type="Password" name="Password" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Email</label>
                <div class="col-md-6">
                  <input type="Email" name="Email" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Depan</label>
                <div class="col-md-6">
                  <input type="text" name="NamaDepan" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Nama Belakang</label>
                <div class="col-md-6">
                  <input type="text" name="NamaBelakang" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Alamat</label>
                <div class="col-md-6">
                  <input type="text" name="Alamat" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Kota</label>
                <div class="col-md-6">
                  <input type="text" name="Kota" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Provinsi</label>
                <div class="col-md-6">
                  <input type="text" name="Provinsi" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">KodePos</label>
                <div class="col-md-6">
                  <input type="text" name="KodePos" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Telepon</label>
                <div class="col-md-6">
                  <input type="text" name="Telepon" class="form-control" >
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Gambar</label>
                <div class="col-md-6">
                  <input type="text" name="Gambar" class="form-control" >
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