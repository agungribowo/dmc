                    <div id="page-content">
                                                
                        <!-- eShop Overview Block -->
                        <div class="block full">
                           
                            <!-- eShop Overview Content -->
                            <div class="row">
                                <div class="col-lg-6">
                                <!-- Customer Info Block -->
                                <div class="block">
                                    <!-- Customer Info Title -->
                                    <div class="block-title">
                                        <h2><i class="fa fa-file-o"></i> <strong>Detail</strong> Konsumen</h2>
                                    </div>
                                    <!-- END Customer Info Title -->

                                    <!-- Customer Info -->
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
                                                <td class="text-right" style="width: 50%;"><strong>Id Konsumen</strong></td>
                                                <td><?=$this->session->userdata('IdKonsumen')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Username</strong></td>
                                                <td><?=$this->session->userdata('UserName')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Password</strong></td>
                                                <td><?=$this->session->userdata('Password')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Email</strong></td>
                                                <td><?=$this->session->userdata('Email')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Nama Depan</strong></td>
                                                <td><?=$this->session->userdata('NamaDepan')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Nama Belakang</strong></td>
                                                <td><?=$this->session->userdata('NamaBelakang')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Alamat</strong></td>
                                                <td><?=$this->session->userdata('Alamat')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Kota</strong></td>
                                                <td><?=$this->session->userdata('Kota')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Provinsi</strong></td>
                                                <td><?=$this->session->userdata('Provinsi') ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Kode Pos</strong></td>
                                                <td><?=$this->session->userdata('KodePos')?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Telepon</strong></td>
                                                <td><?=$this->session->userdata('Telepon')?></td>
                                            </tr>                                            
                                            <tr>
                                                <td class="text-right"><strong>Gambar</strong></td>
                                                <td><?=$this->session->userdata('Gambar')?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Customer Info -->

                                </div>
                                <!-- END Customer Info Block -->
                                <a href="<?=base_url()?>user/dashboard" type="button" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
                                </div>
                                
                            </div>
                            <!-- END eShop Overview Content -->
                        </div>
                        <!-- END eShop Overview Block -->                                         
                        
                    </div>
                    <!-- END Page Content -->
