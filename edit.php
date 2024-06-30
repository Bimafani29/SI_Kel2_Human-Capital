<?php
include_once("koneksi.php");

// Mengecek koneksi
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    // Update data di database
    $result = mysqli_query($mysqli, "UPDATE absensi SET nama='$nama', prodi='$prodi' WHERE id=$id");

    if ($result) {
        header("Location: index.php");
    } else {
        die("Update Error: " . mysqli_error($mysqli));
    }
}

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM absensi WHERE id=$id");

if (!$result) {
    die("Query Error: " . mysqli_error($mysqli));
}

while ($res = mysqli_fetch_array($result)) {
    $nama = $res['nama'];
    $prodi = $res['prodi'];
}
?>

<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Edit Data Absensi</h1>
        <form name="form1" method="post" action="edit.php">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Prodi</label>
                <select class="form-select" name="prodi">
                            <option value="#">-- Pilih Prodi --</option>
                            <option value="Sistem_Informasi">Sistem informasi</option>
                            <option value="Sistem_komputer">sistem komputer</option>
                            <option value="Management">management </option>
                        </select>
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>
        </form>
    </div>
</body>
</html>
