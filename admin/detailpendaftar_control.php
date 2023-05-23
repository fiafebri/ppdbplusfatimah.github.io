<?php

$id_pendaftar = $_GET['id'];


$sql_pendaftar = "SELECT * FROM pendaftar where id = '$id_pendaftar'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);
$data_pendaftar = mysqli_fetch_array($result_pendaftar);

if(!$result_pendaftar){
    die('Query Error : '. mysqli_error($koneksi));
   
}

$sql_penduduk = "SELECT * FROM penduduk where pendaftar_id = '$id_pendaftar'";
$result_penduduk = mysqli_query($koneksi, $sql_penduduk);
$data_penduduk = mysqli_fetch_array($result_penduduk);

if(!$result_penduduk){
    die('Query Error : '. mysqli_error($koneksi));
   
}

    // ubah statusnya
    if(isset($_POST['simpan']) && $_POST['simpan'] == 'simpan_nilai'){
        $nilai = $_POST['nilai'];

        $sql_nilai = " UPDATE penduduk set status='$nilai' where pendaftar_id='$id_pendaftar'";
        $query_nilai = mysqli_query($koneksi, $sql_nilai);

        if($query_nilai){
            //berhasil
            $_SESSION['pesan_sukses'] = "Status Pendaftar berhasil diubah";
            header('location:pendaftaran.php');
        } else {
            echo "Gagal Update Status pendaftar"; die;
        }
    }
    if($data_pendaftar['foto'] != ''){
        $gambar = '' . $data_pendaftar['foto'];
    }else {
        $gambar  = '../asset/img/profile.jpg';
    }
?>