<?php  
error_reporting(0);
include_once '../koneksi.php';
include_once 'models/Jawaban.php';

$gejala = $_POST['gejala'];
$keluhan = $_POST['keluhan'];
$deskripsi = $_POST['deskripsi'];
$jawaban = $_POST['jawaban'];
$id = $_POST['id'];

$data = [ $gejala, $keluhan, $deskripsi, $jawaban];

$model = new Jawaban(); // Make sure to use "Jawaban" with an uppercase "J."
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['id'];
        $model->ubah($data);
        break;
    case 'hapus': unset($data);
        $data[] = $_POST['id'];
        $model->hapus($data);break;
    default:
        header('location:index.php?url=Jawaban');
        break;
}

header('location:index.php?url=Jawaban');
?>