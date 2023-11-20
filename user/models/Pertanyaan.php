<?php 
class Pertanyaan{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataPertanyaan(){
    $sql = "SELECT
    pertanyaan.id,
    pertanyaan.gejala,
    pertanyaan.keluhan,
    pertanyaan.deskripsi,
    pertanyaan.jawaban,
    user.nama AS nama_user,
    kategori.nama_kategori AS nama_kategori
    FROM
    pertanyaan
    INNER JOIN user ON pertanyaan.user_id = user.id
    INNER JOIN kategori ON pertanyaan.kategori_id = kategori.id;";
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}
public function save($data){
    $sql = "INSERT INTO pertanyaan (gejala, keluhan, deskripsi, user_id, kategori_id) 
    VALUES(?,?,?,?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
}
}

?>
