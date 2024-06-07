<?php
// Konfigurasi database
$servername = "localhost"; // Nama server
$username = "root";        // Nama pengguna database
$password = "";            // Kata sandi pengguna database
$dbname = "db_solania"; // Nama database yang akan digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} 


echo "Koneksi berhasil";
?>
 
 <a href="../index.php" target="_blank" class="btn btn-primary" >Kembali</a>