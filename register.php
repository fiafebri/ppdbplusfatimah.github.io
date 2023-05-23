<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website PPDB Online SD Plus Fatimah Az-zahra'">
    <meta name="author" content="e-development.tech">

    <title>Registrasi - Website Pendaftaran
    
    </title>
    <!-- gambar tittle -->
    <link rel="icon" type="image/png" href="asset/img/logoku.png">

    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .img-logo {
            max-height: 150px;
            margin-bottom: 12px;
        }
       
    .bg-gradient-primary{
    background-image:linear-gradient(180deg,#8c9500 10%,#f6ff5d 100%);
    }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Siswa baru</h1>
                                    </div>

                                    <form class="user" action="registrasi_control.php" method="POST">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="texs" class="form-control" id="nama" name="nama" placeholder="Nama Full Anda">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="texs" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <div class="form-check">
                                                    <input type="radio" class="form-check-input" id="laki" value="L" name="jenis_kelamin">
                                                    <label for="laki" class="form-check-label">Laki-Laki</label>
                                                </div>
                                                <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="perempuan" value="P" name="jenis_kelamin">
                                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="agama">Agama</label>
                                               <select name="agama" id="agama" class="form-control">
                                                   <option value="">Pilih Agama</option>
                                                   <option value="islam">Islam</option>
                                                   <option value="kristen">Kristen</option>
                                                   <option value="katolik">Katolik</option>
                                                   <option value="hindu">Hindu</option>
                                                   <option value="budha">Budha</option>
                                                   <option value="konghucu">Konghucu</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="email">Email aktif</label>
                                                <input type="email" class="form-control" id="email" name="email" 
                                                placeholder="Email Anda...">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="telephone">Telephone</label>
                                                <input type="texs" class="form-control" id="telephone" name="telephone" placeholder="No Telephone..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="ulangi_password">Ulangi Password</label>
                                                <input type="password" class="form-control" id="ulangi_password" name="ulangi_password" placeholder="Ulangi Password">
                                            </div>
                                        </div>
                                         <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-user btn-block">
                                            Registrasi
                                         </button>
                                        <hr>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.html">Kembali ke BERANDA</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Sudah Punya AKUN | LOGIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="asset/asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>

</body>

</html>