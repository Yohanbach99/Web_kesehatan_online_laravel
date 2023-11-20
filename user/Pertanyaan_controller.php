<?php  
include_once '../koneksi.php';
include_once 'models/Pertanyaan.php';

$gejala = $_POST['gejala'];
$keluhan = $_POST['keluhan'];
$deskripsi = $_POST['deskripsi'];
$user_id = $_POST['user_id'];
$kategori_id = $_POST['kategori_id'];


$data = [
    $gejala, $keluhan, $deskripsi, $user_id, $kategori_id
];

$model = new Pertanyaan();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'save': $model->save($data); break;
    default:
    header('location:index.php?url=pertanyaan');
    break;
}

header('location:index.php?url=pertanyaan');

?>