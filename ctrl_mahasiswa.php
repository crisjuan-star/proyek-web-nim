<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES(

'$_POST[nim]',
'$_POST[nama]',
'$_POST[tempat_lahir]',
'$_POST[tanggal_lahir]',
'$_POST[fakultas]',
'$_POST[jurusan]',
'$_POST[ipk]'

)");

header("Location:tampil_mahasiswa.php");

}

if(isset($_POST['update'])){

mysqli_query($koneksi,"UPDATE mahasiswa SET

nim='$_POST[nim]',
nama='$_POST[nama]',
tempat_lahir='$_POST[tempat_lahir]',
tanggal_lahir='$_POST[tanggal_lahir]',
fakultas='$_POST[fakultas]',
jurusan='$_POST[jurusan]',
ipk='$_POST[ipk]'

WHERE nim='$_POST[nim_lama]'");

header("Location:tampil_mahasiswa.php");

}

?>