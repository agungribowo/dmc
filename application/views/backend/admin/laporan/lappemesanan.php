<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Laporan Pemesanan</title>
    <link rel="stylesheet" href="<?=base_URL()?>assets/pdf/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=base_URL()?>uploads/logo/logo.png" alt="logo">
      </div>
      <h1>Laporan Data Pemesanan</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center">NO</th>
            <th style="text-align: center">ID PEMESANAN</th>
            <th style="text-align: center">ID KONSUMEN</th>
            <th style="text-align: left">ID RUMAH</th>
            <th style="text-align: center">TANGGAL PEMESANAN</th>
            <th style="text-align: center">STATUS</th>
          </tr>
        </thead>
        <tbody>

          <?php 
            $no = 1; 
            foreach($pemesanan as $s)  :
          ?>

          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$s->IdPemesanan?></td>
            <td style="text-align: center"><?=$s->IdKonsumen?></td>
            <td style="text-align: center"><?=$s->IdRumah?></td>
            <td style="text-align: center"><?=($s->TanggalPemesanan)?></td>
            <td style="text-align: center"><?=($s->status)?></td>
          </tr>
          <tr></tr>
          <tr>

          <?php $no++; endforeach; ?>
          
          <td colspan="7" class="grand total">TOTAL PEMESANAN : </td>
            <td class="grand total" style="text-align: center"><?=$pesan?></td>
          </tr>

        </tbody>
      </table>
      </div>
    </main>

  </body>
</html>