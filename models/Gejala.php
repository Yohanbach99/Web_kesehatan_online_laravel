<?php 

class Gejala{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataGejala(){
    $sql = "SELECT
    pertanyaan.id,
    pertanyaan.gejala,
    pertanyaan.keluhan,
    pertanyaan.deskripsi,
    user.nama AS nama_user,
    kategori.nama_kategori AS nama_kategori
FROM
    pertanyaan
INNER JOIN user ON pertanyaan.user_id = user.id
INNER JOIN kategori ON pertanyaan.kategori_id = kategori.id;";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
}

?>