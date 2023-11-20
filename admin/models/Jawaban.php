<?php 

class Jawaban{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataJawaban(){
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
public function getJawaban($id) {
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
    INNER JOIN kategori ON pertanyaan.kategori_id = kategori.id
    WHERE pertanyaan.id = ?;";

    // menggunakan mekanisme prepere statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();

    return $rs;
}
public function simpan($data){
    $sql = "INSERT INTO pertanyaan (gejala, keluhan, deskripsi, user_id, kategori_id, jawaban) VALUES (?,?,?,?,?,?)";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
}
public function ubah($data){
    $sql = "UPDATE pertanyaan SET gejala=?, keluhan=?, deskripsi= ?, jawaban=? WHERE id=?";
     $ps = $this->koneksi->prepare($sql);
     $ps->execute($data);

}
public function hapus($data){
    $sql = "DELETE FROM pertanyaan WHERE id=?";
    $ps = $this->koneksi->prepare($sql);
    $ps->execute($data);
 }

}
?>
