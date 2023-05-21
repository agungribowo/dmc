<div id="page-content">
    <div class="block">
        <div class="block-title">
            <h2><strong>Daftar</strong> Konsumen</h2>
        </div>
        <div class="table-options clearfix">                                
            <div class="pull-left">
                <a href="<?=base_url('admin/konsumen/tambah')?>" type="button" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah Data</a>                           
            </div>
        </div>
    <!-- Responsive Full Content -->
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">No. </th>                      
                        <th>IdKonsumen</th>
                        <th>Username</th>                       
                        <th>Email</th>
                        <th>Nama Depan</th>                                             
                        <th>Kota</th>                       
                        <th>telepon</th>                        
                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>                
                       <?php 
                          $no = 1; 
                          foreach($konsumen as $p)  :
                        ?>

                        <tr>
                            <td><?=$no?>.</td>
                            <td><?=$p->IdKonsumen?></td>
                            <td><?=$p->UserName?></td>
                            <td><?=$p->Email?></td>
                            <td><?=$p->NamaDepan?></td>
                            <td><?=$p->Kota?></td>
                            <td><?=$p->Telepon?></td>                            
                            <td class="actions" align="center">
                                <a href="<?=base_url('admin/konsumen/detail')?>/<?=$p->IdKonsumen?>" data-toggle="tooltip" title="Detail" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-search"></i></a>
                                <a href="<?=base_url('admin/konsumen/edit')?>/<?=$p->IdKonsumen?>" data-toggle="tooltip" title="Edit Data" class="btn btn-effect-ripple btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="<?=base_url('admin/konsumen/hapus')?>/<?=$p->IdKonsumen?>" onclick="return confirm('Kamu yakin mau menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php $no++; endforeach; ?>     
                </tbody>
            </table>
        </div>
    </div>
</div>