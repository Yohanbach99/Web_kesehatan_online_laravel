<?php
session_start();
include_once 'models/Pertanyaan.php';
include_once '../koneksi.php';
include_once 'navbar/top.php';
include_once 'index.php';
include_once 'models/Kategori.php';
include_once 'models/Form_kategori.php';
include_once 'models/Jawaban.php';
include_once 'models/Gejala.php';
include_once 'models/User.php';

$sesi = $_SESSION['admin'];
if(isset($sesi)){

?>


<div>
    <div class="continer-fluid px-4">
        <!-- <h1>Selamat Datang di Halaman Admin</h1> -->

        <?php
        error_reporting(0); //ini digunakan untuk menyembunyikan error
        //membuat logik sederhana untuk mengarahkan url ke file yang
        //mempunyai extension.php
        //routing => file yang mengarahkan url

        /* ini juga bisa digunakan untuk menutupi error
        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        */

        $url = $_GET['url'];
        if ($url == 'dashboard') {
            include_once 'dashboard.php';
        } else if (!empty($url)) {
            include_once '' . $url . '.php';
        } else {
            include_once 'dashboard.php';
        }

        ?>
    </div>
</div>

<?php
include_once 'navbar/footer.php';

} else {
    echo '<script>alert("anda tidak boleh masuk");history.back();</script>';
}
?>