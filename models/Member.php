<?php
class Member{
    private $koneksi;
    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function cekLogin($data){
        $sql = "SELECT * FROM user WHERE email = ? AND password = SHA1(MD5(SHA1(?))) ";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}
?>