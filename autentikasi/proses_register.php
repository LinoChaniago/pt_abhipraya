<?php
require_once "../koneksi.php";

$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo "<script>alert('Password tidak cocok!'); window.history.back();</script>";
    exit;
}

// TANPA password_hash
$sql = "INSERT INTO user (nama_user, username, email, tgl_lahir, password) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nama_user, $username, $email, $tgl_lahir, $password);

if ($stmt->execute()) {
    echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
