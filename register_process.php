<?php
// Buat koneksi ke database
include_once 'koneksi.php';
include_once 'config.php';

// Tangkap data dari form registrasi
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = "user"; 
$hashedPassword = sha1(md5(sha1($password)));

// Simpan data ke tabel User
$query = "INSERT INTO user (nama, umur, jenis_kelamin, email, password, role) VALUES ('$nama', '$umur', '$jenis_kelamin', '$email', '$hashedPassword', '$role')";

if ($conn->query($query) === TRUE) {
    // Pendaftaran berhasil, tampilkan popup
    echo '<script>alert("Registrasi berhasil. Silakan login.");</script>';
    echo '<script>window.location.href = "index.php";</script>';
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
