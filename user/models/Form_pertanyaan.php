<?php  
class Form_pertanyaan{
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataForm() {
        // mengambil dan melihat table jenis_produk
        $sql = "SELECT
        p.id AS id_pertanyaan,
        p.gejala,
        p.keluhan,
        p.deskripsi,
        p.user_id,
        k.id AS id_kategori,
        k.nama_kategori,
        p.jawaban
    FROM
        pertanyaan p
    INNER JOIN
        kategori k ON p.kategori_id = k.id;";

        // menggunakan mekanisme prepere statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchALL();

        return $rs;
    }

    public function save($data) {
        $sql = "INSERT INTO pertanyaan (hasil_pertanyaan) VALUES (?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>
