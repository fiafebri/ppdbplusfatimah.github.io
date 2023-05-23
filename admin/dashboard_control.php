<?php


//tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, penduduk WHERE pendaftar.id = 
penduduk.pendaftar_id AND penduduk.status = 0");


//cek hasil
if(!$all_pendaftar){
    die('Query Error : '. mysqli_error($koneksi));
   
}

//jumlah pendaftar
$jml_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, penduduk WHERE pendaftar.id = 
penduduk.pendaftar_id");

//cek hasil
if(!$jml_pendaftar){
    die('Query Error : '. mysqli_error($koneksi));
 
}

//jumlah pendaftar
$jml_lolos = mysqli_query($koneksi, "SELECT * FROM pendaftar, penduduk WHERE pendaftar.id = 
penduduk.pendaftar_id AND penduduk.status = 1;");

//cek hasil
if(!$jml_lolos){
    die('Query Error : '. mysqli_error($koneksi));
 
}

?>