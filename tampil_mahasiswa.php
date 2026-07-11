<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "koneksi.php";

$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>

<head>

<title>Daftar Mahasiswa</title>

<style>

table{

border-collapse:collapse;
width:100%;

}

table,th,td{

border:1px solid black;
padding:8px;

}

th{

background:#dddddd;

}

a{

text-decoration:none;

}

</style>

</head>

<body>

<h2 align="center">DAFTAR MAHASISWA</h2>

<p>

<a href="form_tambah.php">

<button>Tambah Data</button>

</a>

</p>

<table>

<tr>

<th>NIM</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Fakultas</th>
<th>Jurusan</th>
<th>IPK</th>
<th>Aksi</th>

</tr>

<?php

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td><?= $d['nim']; ?></td>

<td><?= $d['nama']; ?></td>

<td><?= $d['tempat_lahir']; ?></td>

<td><?= $d['tanggal_lahir']; ?></td>

<td><?= $d['fakultas']; ?></td>

<td><?= $d['jurusan']; ?></td>

<td><?= $d['ipk']; ?></td>

<td>

<a href="form_update.php?nim=<?= $d['nim']; ?>">

<button>Edit</button>

</a>

</td>

</tr>

<?php

}

?>

</table>

</body>

</html>