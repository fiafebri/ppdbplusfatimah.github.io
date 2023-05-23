<?php include('../config/auto_load.php'); ?>

<?php include('penduduk_control.php'); ?>
             <?php include('../template/header.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">EDIT DATA PENDUDUK</h1>
                    <div class="row">
                    <div class="col-md-6">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">EDIT DATA PENDUDUK</h6>
                                </div>
                                <div class="card-body">
                                    <p class="text-danger">* Ubah jika ada kesalahan!</p>
                                    <form class="user" method="POST" action="<?= $base_url ?>/siswa/datapenduduk.php">
                                        <div class="form-group" >
                                        <?php if(isset($data_penduduk)){
                                            // echo "edit_penduduk"
                                            $id_penduduk = $data_penduduk['id'];
                                            echo "<input type='hidden' name='id_penduduk' value='$id_penduduk'>";
                                        } else{
                                            // echo "insert nilai";
                                        }
?>

                                            <label class="control-label" for="no_nik">NIK(Nomor Induk Kependudukan)</label>
                                            <input type="texs" class="form-control" id="no_nik" placeholder="Masukkan Nomor Induk Kependudukan"
                                            name="no_nik" value="<?php if(isset($data_penduduk['no_nik'])) {echo $data_penduduk
                                            ['no_nik']; } ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="no_kk">Nomor KK(Nomor Kartu Keluarga)</label>
                                            <input type="texs" class="form-control" id="no_kk" placeholder="Masukkan Nomor Kartu Keluarga"
                                             name="no_kk" value="<?php if(isset($data_penduduk['no_kk'])) {echo $data_penduduk
                                            ['no_kk']; } ?>">
                                        </div>
                                        <hn>
                                        <button type="submit" name="btn_simpan" value="simpan_penduduk" class="btn btn-primary">Simpan</button>
                                        <a href="dashboard.php" class="btn btn-danger">Kembali</a>
                                    
                                </hn></form></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <?php include('../template/footer.php'); ?>