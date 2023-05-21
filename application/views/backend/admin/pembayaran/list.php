<div id="page-content">
    <div class="block">
        <div class="block-title">
            <h2><strong>Daftar</strong> Pembayaran</h2>
        </div>
        <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/pembayaran/tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
            </div>
        </div>
    <!-- Responsive Full Content -->
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">No. </th>                      
                        <th>Id Pembayaran</th>
                        <th>Id pemesanan</th>                  
                        <th>Tanggal Transfer</th>
                        <th>Bank</th>                                             
                        <th>No Rekening</th>                       
                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>                
                       <?php 
                          $no = 1; 
                          foreach($pembayaran as $p)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td><?=$p->IdPembayaran?></td>
                            <td><?=$p->IdPemesanan?></td>                            
                            <td><?=$p->TanggalTransfer?></td>
                            <td><?=$p->Bank?></td>
                            <td><?=$p->NoRekening?></td>                            
                            <td class="actions" align="center">                                
                                <a href="<?=base_url('admin/pembayaran/hapus')?>/<?=$p->IdPembayaran?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
                </tbody>
            </table>
        </div>
    </div>
</div>
 
                    