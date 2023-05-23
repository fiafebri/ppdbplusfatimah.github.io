<?php include('../config/auto_load.php'); ?>

<?php include('editprofil_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">EDIT PROFIL</h1>
    <form class="user" method="POST" action="<?= $base_url ?>/siswa/editprofil.php"
    enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="texs" class="form-control" id="nama" name="nama" placeholder="Nama Full Anda" value="<?= $data_pendaftar['nama'] ?>">
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $data_pendaftar['tmpt_lahir'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'])); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <?php
                        $laki = "";
                        $perempuan = "";

                        if ($data_pendaftar['jenis_kelamin'] == "L") {
                            $laki = "checked";
                        } else {
                            $perempuan = "checked";
                        }

                        ?>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="laki" value="L" <?= $laki ?> name="jenis_kelamin">
                            <label for="laki" class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="perempuan" <?= $perempuan ?> value="P" name="jenis_kelamin">
                            <label for="perempuan" class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">Pilih Agama</option>
                            <option value="islam" <?php if ($data_pendaftar['agama'] == 'islam') {
                                                        echo
                                                        "selected";
                                                    } ?>>Islam</option>
                            <option value="kristen" <?php if ($data_pendaftar['agama'] == 'kristen') {
                                                        echo
                                                        "selected";
                                                    } ?>>Kristen</option>
                            <option value="katolik" <?php if ($data_pendaftar['agama'] == 'katolik') {
                                                        echo
                                                        "selected";
                                                    } ?>>Katolik</option>
                            <option value="hindu" <?php if ($data_pendaftar['agama'] == 'hindu') {
                                                        echo
                                                        "selected";
                                                    } ?>>Hindu</option>
                            <option value="budha" <?php if ($data_pendaftar['agama'] == 'budha') {
                                                        echo
                                                        "selected";
                                                    } ?>>Budha</option>
                            <option value="konghucu" <?php if ($data_pendaftar['agama'] == 'konghucu') {
                                                            echo
                                                            "selected";
                                                        } ?>>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" ><?= $data_pendaftar['alamat'] ?></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="email">Email aktif</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda..." value="<?= $data_pendaftar['email'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="telephone">Telephone</label>
                        <input type="texs" class="form-control" id="telephone" name="telephone" placeholder="No Telephone.." value="<?= $data_pendaftar['telephone'] ?>">
                    </div>
                </div>
                <!-- <div class="col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                           <div class="form-group row">
                                         <div class="col-md-6">
                                                <label for="ulangi_password">Ulangi Password</label>
                                                <input type="password" class="form-control" id="ulangi_password" name="ulangi_password" placeholder="Ulangi Password">
                                            </div>
                                        </div> -->


            </div>
            <div class="col-md-4">
                <?php
                if (isset($data_pendaftar['foto']) && $data_pendaftar['foto'] !='') {
                    $foto = '../apload/' . $data_pendaftar['foto'];
                } else {
                    $foto = '../asset/img/pp.jpg';
                }
                ?>
                <img src="<?= $foto ?>" alt="foto profil" class="img-fluid">
                <input type="file" name="gambar" class="form-control mt-2">
            </div>
            <div class="col-md-12">
                <button type="submit" name="btn_simpan" value="simpan_profil" class="btn btn-primary mb-5">Ubah</button>
                <a href="dashboard.php" class="btn btn-danger mb-5">Kembali</a>
                <hr>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->

<?php include('../template/footer.php'); ?>