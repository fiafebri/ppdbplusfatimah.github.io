             <?php include('../config/auto_load.php'); ?>
             <?php include('dashboard_control.php'); ?>
             <?php include('../template/header.php'); ?>

             <!-- Begin Page Content -->
             <div class="container-fluid">

                 <!-- Page Heading -->
                 <h1 class="h3 mb-4 text-gray-800">DASHBOARD</h1>
                 <div class="row">
                     <div class="col-md-12">
                         <?php if (isset($_SESSION['pesan_sukses'])) { ?>

                             <div class="alert alert-success">
                                 <?= $_SESSION['pesan_sukses'] ?>
                             </div>

                         <?php }
                            unset($_SESSION['pesan_sukses']);

                            ?>
                     </div>
                     <div class="col-md-6">

                         <div class="row">
                             <?php if (!isset($status)) { ?>
                                 <div class="col-md-12">
                                     <!-- Illustrations -->
                                     <div class="card shadow mb-4">
                                         <div class="card-header py-3">
                                             <h6 class="m-0 font-weight-bold text-primary">DATA PENDUDUK</h6>
                                         </div>
                                         <div class="card-body">
                                             <p class="text-danger">* Masukkan NIK dan no KK anda untuk menyelesaikan progres Pendaftaran</p>
                                             <form class="user" method="POST" action="<?= $base_url ?>/siswa/dashboard.php">
                                                 <div class="form-group">
                                                     <label class="control-label" for="no_nik">NIK(Nomor Induk Kependudukan)</label>
                                                     <input type="texs" class="form-control" id="no_nik" name="no_nik" placeholder="Masukkan NIK anda!">
                                                 </div>
                                                 <div class="form-group">
                                                     <label class="control-label" for="no_kk">Nomor KK(Nomor Kartu Keluarga)</label>
                                                     <input type="texs" class="form-control" id="no_kk" name="no_kk" placeholder="Masukkan no KK anda!">
                                                 </div>
                                                 <hn>
                                                     <button type="submit" name="btn_simpan" value="simpan_penduduk" class="btn btn-primary">Simpan</button>
                                                     <a href="dashboard.php" class="btn btn-danger">Kembali</a>
                                             </form>
                                         </div>
                                     </div>
                                 </div>

                             <?php } else if (isset($status) && $status == 0) { ?>

                                 <div class="col-md-12">
                                     <!-- Illustrations -->
                                     <div class="card shadow mb-4">
                                         <div class="card-header py-3">
                                             <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL</h6>
                                         </div>
                                         <div class="card-body">
                                             <div class="card text-center">
                                                 <div class="card-body">
                                                     <h5 class="card-tittle mb-3 mt-3">PROSES PENyeleksian</h5>
                                                     <div class="col-auto">
                                                         <i class="fas fa-spinner text-warning" style="font-size: 90px;"></i>
                                                     </div>
                                                     <p class="card-text">Terimakasih telah melakukan Pendaftaran di SD Plus Fatimah Az-Zahra'. Pengumuman pada tanggal :</p>
                                                     <span class="badge badge-danger" style="font-size: 20px;"> 5 Juni 2023</span>

                                                 </div>
                                                 <div class="card-footer">
                                                     <marquee style=" margin-bottom: -5px;">SD PLUS FATIMAH AZ-ZAHRA' - SIDOARJO</marquee>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                 </div>

                             <?php } else if (isset($status) && $status == 1) { ?>
                                 <div class="col-md-12">

                                     <div class="card shadow mb-4">
                                         <div class="card-header py-3">
                                             <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL</h6>
                                         </div>
                                         <div class="card-body">
                                             <div class="card text-center">
                                                 <div class="card-body">
                                                     <h5 class="card-tittle mb-3 mt-3">ANDA DITERIMA</h5>
                                                     <div class="col-auto">
                                                         <i class="far fa-check-circle text-success" style="font-size: 90px;"></i>
                                                     </div>
                                                     <p class="card-text">Selamat anda diterima seleksi di SD PLUS FATIMAH AZ_ZAHRO'. Lakukan daftar ulang pada tangga :</p>
                                                     <span class="badge badge-danger" style="font-size: 20px;"> 06 Juni 2023</span>
                                                     <br>
                                                     <div class="col-auto p-1 card-body">
                                                     <a href="<?= $base_url ?>/apload/detail_cetak.php?id=<?= $data_pendaftar['id'] ?>" class="btn btn-info">CETAK BUKTI PENDAFTARAN</a>
                                                     </div>


                                                 </div>
                                                 <div class="card-footer">
                                                     <marquee style=" margin-bottom: -5px;">SD PLUS FATIMAH AZ-ZAHRO' - SIDOARJO</marquee>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                 </div>


                             <?php } else if (isset($status) && $status == 2) { ?>
                                 <div class="col-md-12">
                                     <!-- Illustrations -->
                                     <div class="card shadow mb-4">
                                         <div class="card-header py-3">
                                             <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL</h6>
                                         </div>
                                         <div class="card-body">
                                             <div class="card text-center">
                                                 <div class="card-body">
                                                     <h5 class="card-tittle mb-3 mt-3">ANDA TIDAK DITERIMA</h5>
                                                     <div class="col-auto">
                                                         <i class="fas fa-times text-danger" style="font-size: 90px;"></i>
                                                     </div>
                                                     <p class="card-text">Anda Belum diterima. Terima kasih telah mengikuti seleksi dengan baik</p>
                                                     <span class="badge badge-danger" style="font-size: 20px;"> 1 Juni 2023</span>

                                                 </div>
                                                 <div class="card-footer">
                                                     <marquee style=" margin-bottom: -5px;">SD PLUS FATIMAH AZ-ZAHRO' - SIDOARJO</marquee>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                 </div>
                             <?php } ?>

                             <div class="col-md-12">
                                 <!-- Illustrations -->
                                 <div class="card shadow mb-4">
                                     <div class="card-header py-3">
                                         <h6 class="m-0 font-weight-bold text-primary">PERSYARATAN DAFTAR ULANG</h6>
                                     </div>
                                     <div class="card-body">
                                         <P>Siswa Yang Diterima seleksi wajib melakukan daftar ulang membawa berkas sebagai
                                             berikut:</P>


                                         <ul class="list-group">
                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                 1. FotoCopy AKTA Kelahiran
                                                 <span class="badge badge-info badge-pill">1 Lembar</span>
                                             </li>
                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                 2. FotoCopy Kartu Keluarga
                                                 <span class="badge badge-info badge-pill">1 Lembar</span>
                                             </li>
                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                 3. Buku Raport TK
                                                 <span class="badge badge-info badge-pill">buku</span>
                                             </li>
                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                 3. Surat Keterangan Hasil Pendaftaran
                                                 <span class="badge badge-info badge-pill">1 lembar</span>
                                             </li>
                                         </ul>
                                         <p class="text-danger mt-3">Wajib melakukan Daftar Ulang pada tanggal :
                                             6 Juni 2023</p>

                                     </div>

                                 </div>

                             </div>


                         </div>
                         <!-- data diri kolom -->
                     </div>
                     <div class="col-md-6">
                         <div class="row">
                             <div class="col-md-12">
                                 <!-- Illustrations -->
                                 <div class="card shadow mb-4">
                                     <div class="card-header py-3">
                                         <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                                     </div>
                                     <div class="col-auto mt-3 card-body">
                                         <div class="text-center">
                                             <?php
                                                if (isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                                                    $foto = '../apload/' . $data_pendaftar['foto'];
                                                } else {
                                                    $foto = '../asset/img/pp.jpg';
                                                }
                                                ?>
                                             <img src="<?= $foto ?>" alt="noprofil" class="img-fluid rounded-circle" style="width : 200px; height: 200px;">
                                         </div>
                                         <br>
                                         <div class="text-right">
                                             <a href="editprofil.php" class="btn btn-warning btn-sm">EDIT PROFILE</a>
                                         </div>
                                         <h5 class="text-center card-tittle margin mt-3">
                                             <?= $data_pendaftar['nama'] ?>
                                         </h5>
                                         <ul class="list-group">
                                             <li class="list-group-item">
                                                 <h6 class="mb-0" style="color: black;">Tempat,Tanggal lahir</h6>
                                                 <Small class="text-muted"><?= $data_pendaftar['tmpt_lahir'] ?>,<?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'])); ?></Small>

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

                         </div>

                     </div>



                 </div>

             </div>
             <!-- /.container-fluid -->

             <?php include('../template/footer.php'); ?>