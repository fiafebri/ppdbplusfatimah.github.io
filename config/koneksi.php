<?php
// $nama = "edi";

// echo $nama;
$host ="localhost";
$username="root";
$password="";
$database="pendaftaran";

$koneksi = mysqli_connect($host, $username, $password, $database);

if($koneksi->connect_error){
    echo "koneksi database gagal: ". mysqli_connect_error();
    die;
} else {
//    echo "koneksi database berhasil";   
}
?>