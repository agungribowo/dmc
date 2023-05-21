<div id="page-content">
    <div class="block full">
         <div class="row">
            <div class="col-lg-6">
             <div class="block">
                 <div class="block-title">
                    <h2><i class="fa fa-file-o"></i> <strong>Detail</strong> Pemesanan</h2>
                </div>
                 <div class="block-section text-center">
                    <a href="javascript:void(0)">
                        <img src="#" alt="avatar" class="img-circle">
                    </a>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right"><strong>Id Pemesanan</strong></td>
                            <td><?=$pemesanan['IdPemesanan']?></td>
                        </tr>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Id Konsumen</strong></td>
                            <td><?=$pemesanan['IdKonsumen']?></td>
                        </tr>
                        
                        <tr>
                            <td class="text-right"><strong>Id Rumah</strong></td>
                            <td><?=$pemesanan['IdRumah']?></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Tanggal Pemesanan</strong></td>
                            <td><?=$pemesanan['TanggalPemesanan']?></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Status</strong></td>
                            <td><?=$pemesanan['Status']?>?></td>
                        </tr>    
                    </tbody>
               </table>
            </div>
                <a href="<?=base_url()?>user/dashboard" type="button" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
            </div>                    
        </div>
   </div>                        
</div>
                    