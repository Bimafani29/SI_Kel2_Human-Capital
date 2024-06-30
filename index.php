<?php
include_once("koneksi.php");
// Mengecek koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

 
// Mengambil semua data dari database
$result = mysqli_query($mysqli, "SELECT * FROM absensi ORDER BY id DESC");
 
if (!$result) {
    die("Query Error: " . mysqli_error($mysqli));
}
if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
 
    // Insert data ke database
    $add = mysqli_query($mysqli, "INSERT INTO absensi(nama,prodi,waktu_kehadiran) VALUES('$nama','$prodi', NOW())");
    if (!$add) {
        die("Insert Error: " . mysqli_error($mysqli));
    }

}
?>
 
<html>
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>Absensi Kehadiran</title>
</head>
 
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Universitas Pamulang Serang</span>
        </div>
    </nav>
 
    <div class="bg-success p-2 text-dark bg-opacity-10">
        <h1 class="p-4 text-center">Catatan Kehadiran</h1>
        <div class="container">
            <form action="" method="post" name="form_absen">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Prodi</label>
                        <select class="form-select" name="prodi">
                            <option value="#">-- Pilih Prodi --</option>
                            <option value="Sistem_Informasi">Sistem informasi</option>
                            <option value="Sistem_komputer">sistem komputer</option>
                            <option value="Management">management </option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="Submit">Hadir</button>
                    
                </div>
            </form>
 
            <table class="my-5 table table-striped">
                <tr class="table-dark">
                    <th>Nama</th>
                    <th>Prodi</th> 
                    <th>Waktu Kehadiran</th>
                    <th>Edit</th>
                    <th>hapus</th>
                </tr>
 
                <?php
                while ($r = mysqli_fetch_array($result)) {
                ?>
                    <tr class="table-secondary">
                        <td><?php echo $r['nama']; ?></td>
                        <td><?php echo $r['prodi']; ?></td>
                        <td><?php echo $r['waktu_kehadiran']; ?></td>
                        <td><a href="edit.php?id=<?php echo $r['id']; ?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $r['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
