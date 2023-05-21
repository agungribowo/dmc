<div id="page-content">
    <div class="block">
        <div class="block-title">
            <h2><strong>Daftar</strong> Produk</h2>
        </div>
        <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/produk/tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
            </div>
        </div>
    <!-- Responsive Full Content -->
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">No. </th>                      
                        <th>Id Rumah</th>
                        <th>Type Rumah</th>                  
                        <th>Alamat</th>
                        <th>Harga</th>                                             
                        <th>Booking Fee</th>                       
                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>                
                       <?php 
                          $no = 1; 
                          foreach($produk as $p)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td><?=$p->IdRumah?></td>
                            <td><?=$p->TypeRumah?></td>                            
                            <td><?=$p->AlamatRumah?></td>
                            <td><?=$p->HargaRumah?></td>
                            <td><?=$p->BookingFee?></td>                            
                            <td class="actions" align="center">
                                <a href="<?=base_url('admin/produk/detail')?>/<?=$p->IdRumah?>" data-toggle="tooltip" title="Detail" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-search"></i></a>
                                <a href="<?=base_url('admin/produk/edit')?>/<?=$p->IdRumah?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url('admin/produk/hapus')?>/<?=$p->IdRumah?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
                </tbody>
            </table>
        </div>
    </div>
</div>
 
                    