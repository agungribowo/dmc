<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Laporan Konsumen</title>
    <link rel="stylesheet" href="<?=base_URL()?>assets/pdf/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=base_URL()?>uploads/logo/logo.png" alt="logo">
      </div>
      <h1>Laporan Data Konsumen</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center">NO</th>
            <th style="text-align: center">ID KONSUMEN</th>
            <th style="text-align: center">USERNAME</th>
            <th style="text-align: left">NAMA</th>
            <th style="text-align: center">ALAMAT</th>
            <th style="text-align: center">KOTA</th>
            <th style="text-align: center">KODE POS</th>
            <th style="text-align: left">TELEPON</th>
          </tr>
        </thead>
        <tbody>

          <?php 
            $no = 1; 
            foreach($konsumen as $k)  :
          ?>

          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$k->IdKonsumen?></td>
            <td style="text-align: center"><?=$k->UserName?></td>
            <td style="text-align: left"><?=$k->NamaDepan?> <?=$k->NamaBelakang?></td>
            <td style="text-align: center"><?=($k->Alamat)?></td>
            <td style="text-align: center"><?=($k->Kota)?></td>
            <td style="text-align: center"><?=($k->KodePos)?></td>
            <td style="text-align: left"><?=($k->Telepon)?></td>
            
          </tr>
          <tr></tr>
          <tr>

          <?php $no++; endforeach; ?>
          
          <td colspan="7" class="grand total">TOTAL KONSUMEN : </td>
            <td class="grand total" style="text-align: center"><?=$cus?></td>
          </tr>

        </tbody>
      </table>
      </div>
    </main>

  </body>
</html>