<?php
session_start();
// Konfigurasi koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "magang"; // Ganti dengan nama database kamu

$conn = new mysqli("localhost", "root", "", "magang");


// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// Folder untuk menyimpan file upload
$upload_dir = "uploads/";
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true);
}

// Fungsi untuk upload file
function uploadFile($fieldName, $upload_dir) {
    if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
        $fileTmp  = $_FILES[$fieldName]['tmp_name'];
        $fileName = basename($_FILES[$fieldName]['name']);
        $fileName = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $fileName); // filter nama file
        $newName  = time() . "_" . $fileName;
        $targetPath = $upload_dir . $newName;

        if (move_uploaded_file($fileTmp, $targetPath)) {
            return $targetPath;
        }
    }
    return null;
}

// Proses upload
$nik = "-";
if (isset( $_POST["nik"]) && $_POST["nik"] !== "") {
    $nik = strval($_POST["nik"]);
}
$foto_latarmerah = uploadFile("foto_latarmerah", $upload_dir);
$skck            = uploadFile("skck", $upload_dir);
$surat_sehat     = uploadFile("surat_sehat", $upload_dir);
$lisensi         = uploadFile("lisensi", $upload_dir);


// Pastikan semua file berhasil diupload
if ($foto_latarmerah && $skck && $surat_sehat && $lisensi) {
  $recurrent_statement = $conn->prepare("INSERT INTO recurrent_basic (foto_latarmerah, lisensi, nik, skck, surat_sehat) VALUES (?, ?, ?, ?, ?)");
$recurrent_statement->bind_param("sssss", $foto_latarmerah, $lisensi, $nik, $skck, $surat_sehat);
    if ($recurrent_statement->execute()) {
        echo "✅ Data berhasil disimpan.";
    } else {
        echo ": " . $recurrent_statement->error;
    }

    $recurrent_statement->close();
} else {
    echo "❌ Gagal upload satu atau lebih file.";
}

$conn->close();
?>
