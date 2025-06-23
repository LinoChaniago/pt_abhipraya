<?php 
require'function.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
     <title>Form Upload Dokumen</title>
     <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>
    <h2>Form Input Data dan Upload Berkas</h2>
    <form action="function.php" method="POST" enctype="multipart/form-data">
        <label>NIK:</label><br>
        <input type="text" name="nik" required><br><br>

        <label>Foto Latar Merah:</label><br>
        <input type="file" name="foto_latarmerah" accept="image/*" required><br><br>

        <label>SKCK:</label><br>
        <input type="file" name="skck" accept=".pdf,.jpg,.png" required><br><br>

        <label>Surat Sehat:</label><br>
        <input type="file" name="surat_sehat" accept=".pdf,.jpg,.png" required><br><br>

        <label>Lisensi:</label><br>
        <input type="file" name="lisensi" accept=".pdf,.jpg,.png" required><br><br>

        <label>Ijazah:</label><br>
        <input type="file" name="ijazah" accept=".pdf,.jpg,.png" required><br><br>

        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>
