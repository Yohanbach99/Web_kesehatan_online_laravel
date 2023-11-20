<?php
$host = "localhost"; 
$username = "pese_peserta38.msib5";
$password = "Msib5**123";
$database = "pese_db_kes"; 

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>