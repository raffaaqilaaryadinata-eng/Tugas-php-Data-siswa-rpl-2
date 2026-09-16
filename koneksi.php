<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "db_rpl";

// Melakukan koneksi ke database
$koneksi = mysqli_connect($host, $user, $pass, $db);

//cek koneksi
if (!$koneksi) {
    die(" Koneksi gagal " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>