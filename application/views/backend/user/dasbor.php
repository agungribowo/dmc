<div id="page-content">                        
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li class="active">
                <a href="<?=base_url()?>user/profil"><i class="gi gi-user"></i> Profil</a>
            </li>
             <li>
                <a href="<?=base_url()?>produk"><i class="gi gi-shop_window"></i> Daftar Produk</a>
            </li>
            <li>
                <a href="#"><i class="gi gi-shopping_cart"></i> Status</a>
            </li>
            <!-- <li>
                <a href="<?=base_url()?>user/Bookingfee "><i class="gi gi-shopping_bag"></i> Pembayaran</a>
            </li>      -->                                                         
        </ul>
    </div>
                       
    <div class="block full">                           
        <div class="row">
            <div class="col-lg-6">
            <div class="block">
                <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Customer</strong> Info</h2>
                </div>                                    
                <div class="block-section text-center">
                    <a href="javascript:void(0)">
                        <img src="<?=base_url()?>assets/backend/img/placeholders/avatars/avatar4@2x.jpg" alt="avatar" class="img-circle">
                    </a>
                    <h3>
                        <strong><?=$this->session->userdata('NamaDepan')?> <?=$this->session->userdata('NamaBelakang')?></strong>
                    </h3>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-left" style="width: 50%;"><strong>Id Konsumen</strong></td>
                            <td><?=$this->session->userdata('IdKonsumen')?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Username</strong></td>
                            <td><?=$this->session->userdata('UserName')?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Password</strong></td>
                            <td type="Password"><?=$this->session->userdata('Password')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Email</strong></td>
                                <td><?=$this->session->userdata('Email')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Nama Depan</strong></td>
                                <td><?=$this->session->userdata('NamaDepan')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Nama Belakang</strong></td>
                                <td><?=$this->session->userdata('NamaBelakang')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Alamat</strong></td>
                                <td><?=$this->session->userdata('Alamat')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Kota</strong></td>
                                <td><?=$this->session->userdata('Kota')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Provinsi</strong></td>
                                <td><?=$this->session->userdata('Provinsi')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Kode Pos</strong></td>
                                <td><?=$this->session->userdata('KodePos')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Telepon</strong></td>
                                <td><?=$this->session->userdata('Telepon')?></td>
                            </tr>
                            <tr>
                                <td class="text-left"><strong>Gambar</strong></td>
                                <td><?=$this->session->userdata('Gambar')?></td>
                            </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>