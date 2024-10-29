<?php
$servername = "localhost"; // Nama server, biasanya 'localhost'
$username = "root";        // Username database, ubah sesuai dengan username Anda
$password = "";            // Password database, ubah sesuai dengan password Anda
$dbname = "uts_pemweb";      // Nama database yang akan digunakan

// Membuat koneksi
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
