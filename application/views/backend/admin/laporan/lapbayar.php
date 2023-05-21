<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Laporan Pembayaran</title>
    <link rel="stylesheet" href="<?=base_URL()?>assets/pdf/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=base_URL()?>uploads/logo/logo.png" alt="logo">
      </div>
      <h1>Laporan Data Pembayaran</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center">NO</th>
            <th style="text-align: center">ID PEMBAYARAN</th>
            <th style="text-align: center">ID PEMESANAN</th>
            <th style="text-align: left">TANGGAL TRASFER</th>
            <th style="text-align: center">BANK</th>
            <th style="text-align: center">NO REKENING</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $no = 1; 
            foreach($pembayaran as $p)  :
          ?>
          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$p->IdPembayaran?></td>
            <td style="text-align: center"><?=$p->IdPemesanan?></td>
            <td style="text-align: left"><?=$p->TanggalTrasfer?></td>
            <td style="text-align: center"><?=($p->Bank)?></td>
            <td style="text-align: center"><?=($p->NoRekening)?></td>          
          </tr>
          <tr></tr>
          <tr>
          <?php $no++; endforeach; ?>          
          <td colspan="7" class="grand total">TOTAL PEMBAYARAN : </td>
            <td class="grand total" style="text-align: center"><?=$bayar?></td>
          </tr>
        </tbody>
      </table>
      </div>
    </main>

  </body>
</html>