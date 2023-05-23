<?php

//tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, penduduk.no_nik, penduduk.no_kk, penduduk.status FROM pendaftar, penduduk 
WHERE pendaftar.id = penduduk.pendaftar_id ");


//cek hasil
if(!$all_pendaftar){
    die('Query Error : '. mysqli_error($koneksi));
   
}

if(isset($_GET['action']) && $_GET['action'] == "hapus") {
    $id_pendaftar = $_GET['id'];
    $query_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar where id = '$id_pendaftar'");

    if(mysqli_num_rows($query_pendaftar)){

        $data_pendaftar = mysqli_fetch_array($query_pendaftar);
        $id_user = $data_pendaftar['user_id'];
        //hapus nilai
        $sql_hapus_penduduk = mysqli_query($koneksi, "DELETE FROM penduduk where pendaftar_id = 
        '$id_pendaftar' ");

//hapus foto pendaftar
        unlink('../upload/'. $data_pendaftar['foto']);
        $sql_hapus_pendaftar = mysqli_query($koneksi, "DELETE FROM pendaftar where id = '$id_pendaftar' ");

        $sql_hapus_user = mysqli_query($koneksi, "DELETE FROM users where id = '$id_user' ");

        if(!$sql_hapus_penduduk || !$sql_hapus_pendaftar || !$sql_hapus_user){
die('Query Error: '. mysqli_error($koneksi));
        }
            //Simpan session
            $_SESSION['pesan_sukses'] = "Data pendaftar berhasil dihapus";
            header('location:pendaftaran.php');
    } else {
        die('Data Pendaftar tidak ditemukan!');
    }
}
?>