<?php
session_start();
include_once 'koneksi.php';
include_once 'index.php';
include_once 'models/Gejala.php';
include_once 'models/Member.php';

// $model = new Gejala();
// $data_gejala = $model->dataGejala();


// include_once 'admin/koneksi.php';
// include_once 'models/Member.php';
// include_once 'admin/models/Produk.php';

global $member;
global $role;


// include_once 'header.php';


error_reporting(0);
$hal = $_GET['hal'];
if($hal == '/'){
	include_once 'home.php';
} else if( !empty($hal)){
	include_once '' .$hal.'.php';
} else {
	include_once 'home.php';
}


// include_once 'footer.php';
?>

