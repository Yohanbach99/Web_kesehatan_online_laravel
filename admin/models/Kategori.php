<?php 

class Kategori{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    //mengambil dan melihat tabel jenis_produk
    public function dataKategori(){
    $sql = "SELECT * FROM kategori";
    
    //menggunakan mekanisme prepare statement PDO
    $ps = $this->koneksi->prepare($sql);
    $ps->execute();
    $rs = $ps->fetchAll();
    return $rs;
}

    //menampilkan detail nama_kategori
    public function detailKategori($id){
        $sql = "SELECT * FROM kategori WHERE id = :id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute(['id' => $id]);
        $rs = $ps->fetch();
        return $rs;
    }

    //edit nama_kategori
    public function editKategori($id, $nama_kategori){
        $sql = "UPDATE kategori SET nama_kategori = :nama_kategori WHERE id = :id";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute(['id' => $id, 'nama_kategori' => $nama_kategori]);
        $row = $ps->rowCount();
        return $row;
    }
    public function save($data){
        $sql = "INSERT INTO kategori (nama_kategori) 
        VALUES(?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);

}
}
?>