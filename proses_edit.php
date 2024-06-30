<?php
include 
// Ambil ID data yang akan diedit dari parameter GET atau POST
$id = $_GET['id']; // Misalnya dari URL ?id=1

// Lakukan query SQL untuk mengambil data berdasarkan ID
$query = "SELECT * FROM absensi WHERE id = $id";
$result = mysqli_query($koneksi, $query); // $koneksi adalah objek koneksi ke database

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Tampilkan nilai-nilai dalam formulir untuk diedit
    echo '<form action="proses_edit.php" method="post">';
    echo 'Nama: <input type="text" name="nama" value="' . $row['nama'] . '"><br>';
    echo 'Email: <input type="email" name="prodi" value="' . $row['prodi'] . '"><br>';
    // Tambahkan input hidden untuk mengirim ID data yang akan diedit
    echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
    echo '<input type="submit" value="Simpan Perubahan">';
    echo '</form>';
} else {
    echo 'Data tidak ditemukan.';
}

mysqli_close($koneksi);
?>