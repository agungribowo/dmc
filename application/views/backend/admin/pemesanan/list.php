<div id="page-content">
    <div class="block">
        <div class="block-title">
            <h2><strong>Daftar</strong> Pemesanan</h2>
        </div>
        <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/pemesanan/tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
            </div>
        </div>
    <!-- Responsive Full Content -->
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">No. </th>                      
                        <th>Id Pemesanan</th>                       
                        <th>Id Konsumen</th>
                        <th>Id Rumah</th>                                             
                        <th>Tanggal Pemesanan</th>
                        <th>Kode Admin</th>
                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>                
                       <?php 
                          $no = 1; 
                          foreach($pemesanan as $p)  :
                        ?>

                        <tr>
                            <td align="center"><?=$no?>.</td>
                            <td align="center"><?=$p->IdPemesanan?></td>
                            <td align="center"><?=$p->IdKonsumen?></td>
                            <td align="center"><?=$p->IdRumah?></td>
                            <td align="center"><?=$p->TanggalPemesanan?></td>
                            <td align="center"><?=$p->kodeadmin?></td>
                            <td class="actions" align="center">
                            <?php if($p->status == "Menunggu Konfirmasi") { ?> 
                                <a href="<?=base_URL()?>admin/pemesanan/statusdisetujui/<?=$p->IdPemesanan?>" onclick="return confirm('Kamu yakin mau menyetujui pesanan ini ?')" data-toggle="tooltip" title="Disetujui" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-check"></i></a>
                                <a href="<?=base_URL()?>admin/pemesanan/statusditolak/<?=$p->IdPemesanan?>" onclick="return confirm('Kamu yakin mau menolak pesanan ini ?')" data-toggle="tooltip" title="Ditolak" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            <?php } else if($p->status == "Disetujui") { ?>
                                <span class="label label-success" data-toggle="tooltip" title="Disetujui"><i class="fa fa-check"></i></span>
                            <?php } else { ?>
                                <span class="label label-danger" data-toggle="tooltip" title="Ditolak"><i class="fa fa-remove"></i></span>
                            <?php } ?>
                            <a href="<?=base_url('admin/pemesanan/hapus')?>/<?=$p->IdPemesanan?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
                </tbody>
            </table>
        </div>
    </div>
</div>