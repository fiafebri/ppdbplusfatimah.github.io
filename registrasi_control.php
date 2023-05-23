<?php 
include('config/koneksi.php');
session_start();

if(isset($_POST['btn_registrasi'])){
    // print_r($_POST);
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir =date("Y-m-d", strtotime( $_POST['tanggal_lahir']));
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = md5($_POST['password']);
$ulangi_password = md5($_POST['ulangi_password']);


if($password != $ulangi_password){
    echo "Password Tidak Sama";
    echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
    die;
}

//insert kan ke tabel phpmyadmin
// $sql_user = "INSERT INTO users() values('') ";
$sql_user = "INSERT INTO users (nama, email, password, level) values ('$nama', '$email', '$password', 'siswa') ";
$result_user = mysqli_query($koneksi, $sql_user);

if($result_user){
    $data_user = mysqli_query($koneksi, "SELECT LAST_INSERT_ID()");
    while($u = mysqli_fetch_array($data_user)){
        $user_id = $u[0];
    }
//insert tabel pendaftaran
$sql_pendaftar = "INSERT INTO pendaftar (nama, tmpt_lahir, tgl_lahir, jenis_kelamin, agama, alamat, email, telephone, user_id) 
values('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$email', '$telephone', '$user_id')";

$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

if($result_pendaftar){

$_SESSION['pesan_registrasi'] = "Registrasi Berhasil, Login menggunakan Email dan Password anda!";

    header('location:login.php');
} else{
     //jika kueri gagal 
     echo "Error insert pendaftar: ". mysqli_error($koneksi);
     echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
     die;
}

} else{
    //jika kueri gagal 
    echo "Error insert users: ". mysqli_error($koneksi);
    echo "<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
    die;
}


}else{
    header('location:register.php');
}
?>