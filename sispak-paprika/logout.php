<?php
session_start();
include('koneksi.php');

// Ambil nama pengguna dari session
$username = $_SESSION['login_user'];

// Masukkan log aktivitas
$log = "Logout";
$insert_log = "INSERT INTO log_aktivitas (nama, log, waktu) VALUES ('$username', '$log', NOW())";
mysqli_query($konek_db, $insert_log);

// Hapus session dan redirect ke halaman login
session_destroy();
header("Location: index.php");
exit();
?>
