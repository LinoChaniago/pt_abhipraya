<?php
session_start();
include '../koneksi.php';

$nama_user = $_POST['nama_user'];
$password  = $_POST['password'];

// Query dengan mencocokkan langsung nama_user dan password
$query = mysqli_query($conn, "SELECT * FROM user WHERE nama_user='$nama_user' AND password='$password'");
$cek   = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['nama_user'] = $nama_user;
    $_SESSION['status'] = "login";
    header("Location: ../dashboard.php");
} else {
    header("Location: login.php?pesan=gagal");
}
?>
