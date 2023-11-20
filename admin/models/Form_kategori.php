<?php  

class Form_kategori{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataForm() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT * FROM kategori;";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO kategori (nama_kategori) VALUES (?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>
