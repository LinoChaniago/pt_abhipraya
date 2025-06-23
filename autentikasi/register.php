<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/style.css">

    <!-- Tambahkan Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div class="main">
        <div class="form">
            <h2>Register</h2>
            <form method="POST" action="proses_register.php">
                <input type="text" name="nama_user" placeholder="Nama Lengkap" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>

                <!-- Diubah menjadi text agar Flatpickr bisa aktif -->
                <input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" required>

                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
                <button class="btnn" type="submit">Register</button>
            </form>
            <p class="link">Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Tambahkan Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#tgl_lahir", {
            dateFormat: "Y-m-d",         // format nilai di input
            altInput: true,              // tampilkan versi cantik
            altFormat: "d F Y",          // format yang dilihat user
            maxDate: "today"             // batasi agar tidak bisa pilih tanggal di masa depan
        });
    </script>
</body>
</html>
