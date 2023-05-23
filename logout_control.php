<?php
 session_start();
 session_destroy();

 session_start();
 $_SESSION['login_error'] = "Anda berhasil logout";

 header('location:login.php');
?>