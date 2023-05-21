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
                                            <strong><?=$konsumen['NamaDepan']?></strong> <?=$konsumen['NamaBelakang']?>
                                        </h3>
                                    </div>
                                    <table class="table table-borderless table-striped table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td class="text-left" style="width: 50%;"><strong>Id Konsumen</strong></td>
                                                <td><?=$konsumen['IdKonsumen']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Username</strong></td>
                                                <td><?=$konsumen['UserName']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Password</strong></td>
                                                <td type="Password"><?=$konsumen['Password']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Email</strong></td>
                                                <td><?=$konsumen['Email']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Nama Depan</strong></td>
                                                <td><?=$konsumen['NamaDepan']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Nama Belakang</strong></td>
                                                <td><?=$konsumen['NamaBelakang']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Alamat</strong></td>
                                                <td><?=$konsumen['Alamat']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Kota</strong></td>
                                                <td><?=$konsumen['Kota']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Provinsi</strong></td>
                                                <td><?=$konsumen['Provinsi']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Kode Pos</strong></td>
                                                <td><?=$konsumen['KodePos']?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><strong>Telepon</strong></td>
                                                <td><?=$konsumen['Telepon']?></td>
                                            </tr>
                                            <!-- <tr>
                                                <td class="text-left"><strong>Gambar</strong></td>
                                                <td><?=$konsumen['Gambar']?></td>
                                            </tr>  -->                                           
                                            
                                        </tbody>
                                    </table>
                                    <!-- END Customer Info -->
                                </div>
                                <!-- END Customer Info Block -->

                                </div>
                                
                            </div>
                            <!-- END eShop Overview Content -->
                        </div>
                        <!-- END eShop Overview Block -->                                         
                        
                    </div>
                    <!-- END Page Content -->
