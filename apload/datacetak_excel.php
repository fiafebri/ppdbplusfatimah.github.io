<?php
header("content-type: application/vdn-ms-excel");
header("content-Disposition: attachment; filename=Data pendaftar.xls");
 include('data_excel.php'); 
 
 
 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
    </head> 
    
    
    <body>
</div>
</div>
   
    <table border="1px" width="100%">
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
    <tr>
    <?php
        $no = 1;
                while ($p = mysqli_fetch_array($all_pendaftar)) { 
                    if($p['status'] == 0) {
                        $status = "BARU";
                    } else if ($p['status'] == 1) {
                        $status = "DITERIMA";
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