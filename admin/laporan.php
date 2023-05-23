<?php include('../config/auto_load.php'); ?>
<?php include('pendaftaran_control.php'); ?>

<?php include('../template/header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">LAPORAN PENDAFTARAN</h1>

    <a href="<?= $base_url ?>/apload/data_pendaftar.php" class="btn btn-warning btn-sm mb-3">CETAK DATA PENDAFTAR</a>   
    <a href="<?= $base_url ?>/apload/datacetak_excel.php" class="btn btn-success btn-sm mb-3" target="_blank">CETAK DATA PENDAFTAR EXCEL</a> 

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover">

                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>NIK</td>
                    <td>KK</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>

                <?php
                
               $no = 1;
                while ($p = mysqli_fetch_array($all_pendaftar)) { ?> 

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $p['nama'] ?></td>
                        <td><?= $p['alamat'] ?></td>
                        <td><?= $p['no_nik'] ?></td>
                        <td><?= $p['no_kk'] ?></td>
                        <?php
                        if ($p['status'] == 0) {
                            $status  = '<span class="badge badge-info">BARU</span>';
                        } else if ($p['status'] == 1) {
                            $status  = '<span class="badge badge-success">DITERIMA</span>';
                        } else if ($p['status'] == 2) {
                            $status  = '<span class="badge badge-danger">TIDAK DITERIMA</span>';
                        }
                        ?>
                        <td><?= $status ?></td>
                        <td>
                            <a href="<?= $base_url ?>/apload/detail_cetak.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm"
                            target="_blank">CETAK</a>                           
                        </td>

                    </tr>
                <?php }

                if (mysqli_num_rows($all_pendaftar) == 0) {
                    echo "<tr><td colspan ='6' align='center'><b>Belum Ada Pendaftar Baru</b></td></tr>";
                }
                ?>
           


            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include('../template/footer.php'); ?>
