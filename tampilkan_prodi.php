<?php
Include 'koneksi.php';

$sql = "select * from prodi ";
$select = mysqli_query($connect, $sql) or die ("gagal membaca database");
echo("<table> <tr><th> NIK </th> <th> Nama  </th> <th> Tanggal Lahir  </th><th> Jenis Kelamin  </th><th> Alamat  </th></tr>");
while ($row = mysqli_fetch_array($select)) {
    $nik = $row['NIK'];
    $nama = $row['Nama'];
    $ttl = $row ['Tanggal_lahir'];
    $jk = $row['Jenis_kelamin'];
    $alamat = $row['Alamat'];
  //  $pass = $row['Pasword'];

    Echo ("<tr> <td>$nik </td><td> $nama</td><td>$ttl </td><td> $jk</td><td>$alamat </td></tr>");
   
}
Echo ("</table>");
echo(" <a href = 'kampus.html'> Input Prodi </a>");
?>