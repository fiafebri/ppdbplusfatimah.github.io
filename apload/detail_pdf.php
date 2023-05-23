<?php include('admin_pdf.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Cetak Detail Pendaftar</title>
    


        <style>
        table,th ,td{
            font-size: 12px;
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        </style>
    </head> 
    
    
    <body>
    <img src="sdplus.jpg" style="float : left; height: 60px;">
    

<div style="margin-left: 15px;">
    <div style="font-size: 18px">Data Pendaftar Siswa Baru | TAHUN 2023</div>
    <div style="font-size: 20px">SD PLUS FATIMAH AZ-ZAHRO'</div>
    <div style="font-size: 12px">Siwalan Panji, Siwalanpanji, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252</div>
    
</div>
<hr>
<div style="font-size:12px; margin-left: 5px;">&nbsp;  
        Tanggal CETAK: <?php echo date('d-m-Y'); ?>
</div>
   
    <table width="100%">
        <tr>
            <th width="5%">No</th>
            <th width="10%">Nama</th>
            <th width="5%">TTL</th>
            <th  width="5%">JK</th>
            <th >alamat</th>
            <th  width="10%">Telephone</th>
            <th width="15%">NIK</th>
            <th width="15%">KK</th>
            <th width="8%">status</th>
        </tr>
        <?php
        $no = 1;
                while ($p = mysqli_fetch_array($all_pendaftar)) { 
                    if($p['status'] == 0) {
                        $status = "BARU";
                    } else if ($p['status'] == 1) {
                        $status = "DTERIMA";
                    } else {
                        $status = "TIDAK DITERIMA";                       
                    }
                    ?> 
        <tr>
        <th ><?= $no++ ?></th>
            <td "><?= $p['nama'] ?></td>
            <td ><?= $p['tmpt_lahir'] ?>,<?= $p['tgl_lahir'] ?></td>
            <td  align="center"><?= $p['jenis_kelamin'] ?></td>
            <td><?= $p['alamat'] ?></td>
            <td align="center"><?= $p['telephone'] ?></td>
            <td align="center"><?= $p['no_nik'] ?></td>
            <td  align="center"><?= $p['no_kk'] ?></td>
            <td  align="center"><?= $status ?></td>

        </tr>
        <?php } ?>
       </table>

     
    </body>
</html>