<?php

$id_user = $_SESSION['id_users'];
$sql_pendaftar = "SELECT * FROM pendaftar where id = '$id_user'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if (mysqli_num_rows($result_pendaftar)) {
    $data_pendaftar = mysqli_fetch_array($result_pendaftar);
    $id_pendaftar = $data_pendaftar['id'];

    $sql_penduduk = "SELECT * FROM penduduk where pendaftar_id = '$id_pendaftar'";
    $result_penduduk = mysqli_query($koneksi, $sql_penduduk);

    if (mysqli_num_rows($result_penduduk)) {
        $data_penduduk = mysqli_fetch_array($result_penduduk);
        $status = $data_penduduk['status'];
    } else {
        // jika belom ada data penduduk/ status kosong

    }

    // simpan data

    if (isset($_POST['btn_simpan']) && $_POST['btn_simpan'] == 'simpan_penduduk') {
        $no_nik = $_POST['no_nik'];
        $no_kk = $_POST['no_kk'];

        if (isset($_POST['id_penduduk'])) {
            //jika ada maka update
            $id_penduduk = $_POST['id_penduduk'];

            $sql_update_penduduk = "UPDATE penduduk set no_nik='$no_nik', no_kk='$no_kk' where 
        id ='$id_penduduk'";
            $query_update_penduduk = mysqli_query($koneksi, $sql_update_penduduk);

            if($query_update_penduduk) {
                //berhasil maka
                $_SESSION['pesan_sukses'] = "Edit Data Penduduk Sukses!";

                header('location:dashboard.php');
            } else {
                echo "error" . mysqli_error($koneksi);
                die;
            }
        } else {

            $sql_insert_penduduk = "INSERT INTO penduduk (no_nik, no_kk, status, pendaftar_id)
            values ('$no_nik', '$no_kk', 0, '$id_pendaftar')";

            $query_insert_penduduk = mysqli_query($koneksi, $sql_insert_penduduk);
            if ($query_insert_penduduk) {
                //berhasil maka
                header('location:datapenduduk.php');
            } else {
                echo "error" . mysqli_error($koneksi);
                die;
            }
            //insert
        }
    }
}
