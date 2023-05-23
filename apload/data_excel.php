<?php
include('../config/koneksi.php');

$all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, penduduk.no_nik, penduduk.no_kk, penduduk.status FROM pendaftar, penduduk 
WHERE pendaftar.id = penduduk.pendaftar_id order by status, nama");

                    ?> 