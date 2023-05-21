<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Laporan Produk</title>
    <link rel="stylesheet" href="<?=base_URL()?>assets/pdf/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=base_URL()?>uploads/logo/logo.png" alt="logo">
      </div>
      <h1>Laporan Data Produk</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center">NO</th>
            <th style="text-align: center">ID RUMAH</th>
            <th style="text-align: center">TYPE RUMAH</th>
            <th style="text-align: left">NAMA RUMAH</th>
            <th style="text-align: center">ALAMAT RUMAH</th>
            <th style="text-align: center">BLOK</th>
            <th style="text-align: center">HARGA</th>
            <th style="text-align: left">BOOKING FEE</th>
          </tr>
        </thead>
        <tbody>

          <?php 
            $no = 1; 
            foreach($produk as $p)  :
          ?>

          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$p->IdRumah?></td>
            <td style="text-align: center"><?=$p->TypeRumah?></td>
            <td style="text-align: left"><?=$p->NamaRumah?></td>
            <td style="text-align: center"><?=($p->AlamatRumah)?></td>
            <td style="text-align: center"><?=($p->BlokRumah)?></td>
            <td style="text-align: center">Rp <?=($p->HargaRumah)?>.000.000</td>
            <td style="text-align: left"><?=($p->BookingFee)?></td>
            
          </tr>
          <tr></tr>
          <tr>

          <?php $no++; endforeach; ?>
          
          <td colspan="7" class="grand total">TOTAL PRODUK : </td>
            <td class="grand total" style="text-align: center"><?=$rumah?></td>
          </tr>

        </tbody>
      </table>
      </div>
    </main>

  </body>
</html>