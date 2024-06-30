<?php
include_once("koneksi.php");

// Mengecek koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$id = $_GET['id'];

// Hapus data dari database
$result = mysqli_query($mysqli, "DELETE FROM absensi WHERE id=$id");

if ($result) {
    header("Location: index.php");
} else {
    die("Delete Error: " . mysqli_error($mysqli));
}
?>
