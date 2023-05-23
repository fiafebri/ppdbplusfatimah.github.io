<?php include('../config/auto_load.php'); ?>
<?php include('detailpendaftar_control.php'); ?>
<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Pendaftaran</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                </div>
                <div class="card-body">
                    <div class="col-auto mt-3 text-center">
                        <?php
                        if (isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != "") {
                            $foto = '../apload/' . $data_pendaftar['foto'];
                        } else {
                            $foto = '../asset/img/pp.jpg';
                        }
                        ?>
                        <img src="<?= $foto ?>" alt="noprofil" class="img-fluid rounded-circle" style="width : 200px; height: 200px;">

                    </div>

                    <h5 class="text-center card-tittle margin mt-3">
                        <?= $data_pendaftar['nama']  ?>
                    </h5>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Tempat,Tanggal lahir</h6>
                            <Small class="text-muted">
                                <?= $data_pendaftar['tmpt_lahir'] ?>,<?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'])); ?>
                            </Small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                            <?php
                            if ($data_pendaftar['jenis_kelamin'] == 'L') {
                                $kelamin = "Laki-laki";
                            } else {
                                $kelamin = "Perempuan";
                            }
                            ?>
                            <Small class="text-muted"><?= $kelamin ?></Small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Agama</h6>
                            <Small class="text-muted"><?= $data_pendaftar['agama'] ?></Small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Alamat</h6>
                            <Small class="text-muted"><?= $data_pendaftar['alamat'] ?></Small>

                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Email</h6>
                            <Small class="text-muted"><?= $data_pendaftar['email'] ?></Small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">No Telephone</h6>
                            <Small class="text-muted"><?= $data_pendaftar['telephone'] ?></Small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- kolom data pennduduk -->
        <div class="col-md-6">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DATA PENDUDUK PENDAFTAR</h6>
                </div>
                <div class="card-body">

                        <?php 
                        if($data_penduduk['status'] == 0){
                            echo '<div class="alert alert-warning">
                            Data Pendaftar belum divalidasi
                        </div>' ;
                        } else if($data_penduduk['status'] == 1){
                            echo '<div class="alert alert-info">
                            Data Pendaftar Dinyatakan <b>DITERIMA<b>
                        </div>' ;
                        } else if($data_penduduk['status'] == 2){
                            echo '<div class="alert alert-danger">
                            Data Pendaftar Dinyatakan <b>TIDAK DITERIMA<b>
                        </div>' ;
                        }
                          ?>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">NIK</h6>
                            <Small class="text-muted"><?= $data_penduduk['no_nik'] ?></Small>
                        </li>
                        <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">No KK</h6>
                            <Small class="text-muted"><?= $data_penduduk['no_kk'] ?></Small>
                        </li>
                    </ul>

                    <button type="button" class="btn btn-primary mt-3 btn-block" data-toggle="modal" data-target="#modalvalidasi">Validasi Daftar Pendaftar</button>

                    <!-- modal-->
                    <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="<?= $base_url ?>/admin/detailpendaftaran.php?id=<?= $id_pendaftar ?>" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Data Diri Pendaftar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="nilai">Beri Penilaian</label>
                                        <select name="nilai" id="nilai" class="form-control" required>
                                            <option value="">--PILIH--</option>
                                            <option value="1">DITERIMA</option>
                                            <option value="2">TIDAK DITERIMA</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button name="simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <a href="pendaftaran.php" class="btn btn-primary">Kembali</a>
        </div>

    </div>


</div>
<!-- /.container-fluid -->
<?php include('../template/footer.php'); ?>