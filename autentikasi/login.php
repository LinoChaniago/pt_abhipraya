<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="main">
        <div class="form">
            <h2>Login</h2>
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<p style='color:red;'>Login gagal! Username atau password salah!</p>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<p>Anda telah logout.</p>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "<p>Anda harus login terlebih dahulu.</p>";
                }
            }
            ?>
            <form method="POST" action="cek_login.php">
                <input type="text" name="nama_user" placeholder="Nama User" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btnn" type="submit">Login</button>
            </form>
            <p class="link">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>
</body>
</html>
