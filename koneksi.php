<?php
$dsn = 'mysql:dbname=pese_db_kes;host=localhost';
$user = 'pese_peserta38.msib5';
$password = 'Msib5**123';

try {
    $dbh = new PDO ($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Sukses Koneksi : ".$user;
} catch (PDOException $e){
    echo 'Koneksi Gagal '.$e->getMessage();
}

?>
