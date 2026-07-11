<?php
include 'koneksi.php';

$cari = "";

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
}

$query = mysqli_query($koneksi,"
SELECT mahasiswa.*, jurusan.nama_jurusan,
fakultas.nama_fakultas
FROM mahasiswa
JOIN jurusan
ON mahasiswa.id_jurusan = jurusan.id_jurusan
JOIN fakultas
ON jurusan.id_fakultas = fakultas.id_fakultas
WHERE
mahasiswa.nama LIKE '%$cari%'
OR mahasiswa.nim LIKE '%$cari%'
");
?>

<!DOCTYPE html>
<html>
<head>
<title>Daftar Mahasiswa</title>
</head>

<body>

<h2>Daftar Mahasiswa</h2>

<form method="GET">

<input
type="text"
name="cari"
placeholder="Cari nama atau NIM"
>

<button type="submit">
Cari
</button>

</form>

<br>

<table border="1" cellpadding="10">

<tr>
<th>NIM</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Fakultas</th>
<th>Jurusan</th>
<th>IPK</th>
</tr>

<?php while($data = mysqli_fetch_array($query)){ ?>

<tr>
<td><?php echo $data['nim']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['tempat_lahir']; ?></td>
<td><?php echo $data['tanggal_lahir']; ?></td>
<td><?php echo $data['nama_fakultas']; ?></td>
<td><?php echo $data['nama_jurusan']; ?></td>
<td><?php echo $data['ipk']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>