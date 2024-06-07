<?php
include 'koneksi.php';

// Mendapatkan data dari form
$id_pesan = $_POST['id_pesan'];
$nama = $_POST['nama'];

$no_wa = $_POST['no_wa'];
$paket_pesanan = $_POST['paket_pesanan'];
$alamat = $_POST['alamat'];

// Query untuk menambahkan data ke database
$sql = "INSERT INTO pesan (id_pesan,nama, alamat, no_wa, paket_pesanan) VALUES ('$id_pesan','$nama', '$alamat', '$no_wa','$paket_pesanan')";

// Mengeksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
