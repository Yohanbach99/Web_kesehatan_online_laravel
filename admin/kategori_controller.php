<?php 
include_once '../koneksi.php';
include_once 'models/Kategori.php';


$nama_kategori = $_POST['nama_kategori'];


$data = [$nama_kategori];

$model = new kategori();
$tombol = $_REQUEST['proses'];

switch ($tombol) {
    case 'save': $model->save($data); break;
    default:
    header('location:index.php?url=kategori');
    break;
}

header('location:index.php?url=kategori');

?>
?>