<?php

$koneksi = mysqli_connect("localhost", "root", "", "proyek-web-2414090001");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>