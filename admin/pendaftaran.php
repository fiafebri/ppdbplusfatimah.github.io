<?php include('../config/auto_load.php'); ?>
<?php include('pendaftaran_control.php'); ?>
<?php include('../template/header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Pendaftaran</h1>

    <div class="row">
        <div class="col-12">
            <?php if (isset($_SESSION['pesan_sukses'])) { ?>
                <div class="alert alert-info">
                    <?= $_SESSION['pesan_sukses'] ?>
                </div>
            <?php }
            unset($_SESSION['pesan_sukses']);
            ?>
        </div>
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
                            $status  = '<span class="badge badge-success">LOLOS</span>';
                        } else if ($p['status'] == 2) {
                            $status  = '<span class="badge badge-danger">TIDAK LOLOS</span>';
                        }
                        ?>
                        <td><?= $status ?></td>
                        <td>
                            <a href="detailpendaftaran.php?id=<?= $p['id'] ?>" class="btn btn-primary btn-sm">Cek</a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus_<?= $p['id'] ?>" 
                            >Hapus</a>
                           
                        </td>

                    </tr>
                    <!-- modal-->
                    <div class="modal fade" id="modalHapus_<?= $p['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Anda akan menghapus data pendaftar atas nama "<?= $p['nama'] ?>". <br>
                                    
                                    <b>DATA AKAN DIHAPUS PERMANEN.</b></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= $base_url ?>/admin/pendaftaran.php?action=hapus&id=<?= $p['id'] ?>" class="btn btn-danger">HAPUS</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

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