<?php include('admin_pdf.php'); ?>
<?php include('../admin/detailpendaftar_control.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Cetak Detail Pendaftar</title>
    <link type="image/png" href="M.Soobin Fahrizal.jpg">
    <style>
        .judul {
            margin-bottom: 0px;
            font-size: 16px;
            font-weight: bold;
        }

        table,
        th,
        td {
            border: 1px;
            vertical-align: top;
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

    <h3 class="judul">A. DETAIL PENDAFTAR</h3>
    <table width="100%">
        <tr>
            <td width="18%">Nama</td>
            <td width="1%">:</td>
            <td width="60%"><?= $data_pendaftar['nama'] ?></td>
            <td rowspan="7" align="right"><img src="<?= $gambar ?>" width="180px" height="200"></td>
        </tr>
        <tr>
            <td>Tempat,
                tanggal lahir
            </td>
            <td>:</td>
            <td><?= $data_pendaftar['tmpt_lahir'] ?>, <?= $data_pendaftar['tgl_lahir'] ?></td>
        </tr>
        <tr>
            <?php
            if ($data_pendaftar['jenis_kelamin'] == 'L') {
                $kelamin = "Laki-laki";
            } else {
                $kelamin = "Perempuan";
            }
            ?>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $kelamin ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?= $data_pendaftar['agama'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $data_pendaftar['alamat'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $data_pendaftar['email'] ?></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td>:</td>
            <td><?= $data_pendaftar['telephone'] ?></td>
        </tr>

    </table>
    <br>

    <h3 class="judul">B. DATA PENDUDUK PENDAFTAR</h3>
    <table>
        <tr>
            <td width="100px">NIK</td>
            <td width="5px">:</td>
            <td> <?= $data_penduduk['no_nik'] ?> </td>
        </tr>
        <tr>
            <td>Nomor KK</td>
            <td>:</td>
            <td> <?= $data_penduduk['no_kk'] ?> </td>
        </tr>
        <tr>
            <?php
            if ($data_penduduk['status'] == 0) {
                $status = " Data Pendaftar belum divalidasi";
            } else if ($data_penduduk['status'] == 1) {
                $status = "DITERIMA PENDAFTARAN";
            } else if ($data_penduduk['status'] == 2) {
                $status = "TIDAK DITERIMA PENDAFTARAN";
            }
            ?>
            <td>Hasil Pendaftaran</td>
            <td>:</td>
            <td><b> <?= $status ?></b> </td>
        </tr>
    </table>

<br>


<p>Siswa Yang Diterima seleksi wajib melakukan daftar ulang membawa berkas sebagai berikut:<p/>
              <table>
             <tr>
                   
                    <td>1.</td>
                    <td>FotoCopy Akta Kelahiran</td>
                    <td>1 lembar</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>FotoCopy KK</td>
                    <td>1 lembar</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Buku rapor</td>
                    <td>1 buku</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Surat Keterangan Hasil Pendaftaran</td>
                    <td>1 lembar</td>
                </tr>
            </table>


</div>

</body>

</html>