<?php

include "koneksi.php";

$nim=$_GET['nim'];

$data=mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim='$nim'");

$d=mysqli_fetch_array($data);

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Mahasiswa</title>

</head>

<body>

<h2>Edit Mahasiswa</h2>

<form action="ctrl_mahasiswa.php" method="POST">

<input type="hidden" name="nim_lama" value="<?= $d['nim']; ?>">

NIM

<br>

<input type="text" name="nim" value="<?= $d['nim']; ?>">

<br><br>

Nama

<br>

<input type="text" name="nama" value="<?= $d['nama']; ?>">

<br><br>

Tempat Lahir

<br>

<input type="text" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>">

<br><br>

Tanggal Lahir

<br>

<input type="date" name="tanggal_lahir" value="<?= $d['tanggal_lahir']; ?>">

<br><br>

Fakultas

<br>

<input type="text" name="fakultas" value="<?= $d['fakultas']; ?>">

<br><br>

Jurusan

<br>

<input type="text" name="jurusan" value="<?= $d['jurusan']; ?>">

<br><br>

IPK

<br>

<input type="text" name="ipk" value="<?= $d['ipk']; ?>">

<br><br>

<input type="submit" name="update" value="Update">

</form>

</body>

</html>