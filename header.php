<?php
session_start();
// if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
//     header("location:autentikasi/login.php?pesan=belum_login");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Website KP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

    

        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PT. ABHIPRAYA</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>

                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="autentikasi/login.php">LOGIN</a></li>
                    <!-- <li><a href="autentikasi/logout.php">LOGOUT</a></li> -->
                    <!-- <li style="color: white; margin-top: 25px; font-family: Arial; font-size: 14px;">
                        <?php echo htmlspecialchars($_SESSION['nama_user']); ?>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="content">