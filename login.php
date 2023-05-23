<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website PPDB Online SD Plus Fatimah Az-zahra'">
    <meta name="author" content="e-development.tech">

    <title>Login - Website Pendaftaran</title>
    <!-- gambar tittle -->
    <link rel="icon" type="image/png" href="asset/img/logoku.png">

    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
 <style>
    .img-logo{
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
                                        <img src="asset/img/logoku.png" alt="Logo aplikasi" class="img-logo" >
                                         <h1 class="h4 text-gray-900 ">Login Laman Pendaftaran</h1>
                                         <h1 class="h4 text-gray-900 mb-4"><b>SD PlUS FATIMAH AZ-ZAHRO'</b></h1>

                                    <?php 
                                    session_start();
                                    if(isset($_SESSION['pesan_registrasi'])) { ?>

                                        <div class="alert alert-success">
                                            <?= $_SESSION['pesan_registrasi']?>
                                        </div>

                                    <?php } 
                                     if(isset($_SESSION['login_error'])) { ?>

                                        <div class="alert alert-danger">
                                            <?= $_SESSION['login_error']?>
                                        </div>

                                    <?php } 
                                    session_destroy();
                                    ?>
                                    
                                        </div>
                                    <form class="user" action="login_control.php" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email"
                                                placeholder="Masukkan Email...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                            </div>
                                        </div>
                                        <button type="submit" name="btn_login" value="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.html">Kembali Ke BERANDA</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">REGISTRASI Siswa baru</a>
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