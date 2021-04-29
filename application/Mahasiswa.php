<?php

namespace App;

class Mahasiswa extends User{
//atribut
    protected $nama;
    protected $nim;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 2;
    public static $status = self::AKTIF;
    public static $sks = 3;
    public static $bobot = 12;

    function __construct($nama,$nim,$tl,$jk){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->tanggal_lahir = $tl;
        $this->jenis_kelamin = $jk;
}
    public function tampilkanAngkatan(){
        echo "Merupakan angkatan tahun 20".substr($this->nim , 5,-4)."<br>";
    }
    public function tampilkanUmur(){
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    }
    public function tampilkanNama($nama){
        echo $this->nama;   
    }
    // setter
    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setNim($nim){
        $this->nim=$nim;
    }
    public function setTanggalLahir($tanggal_lahir){
        $this->tanggal_lahir=$tanggal_lahir;
    }
    public function setJanisKelamin($jenis_kelamin){
        $this->jenis_kelamin=$jenis_kelamin;
    }
    // getter
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getTanggalLahir(){
        return $this->tanggal_lahir;
    }
    public function getJenisKelamin(){
        return $this->jenis_kelamin;
    }
    //static 
    public static function bergerak()
    {
        echo "agen solusi, bukan agen perubahan";
    }
    final public function tuntaskan()
    {
        self::bergerak();
        echo 'memperbaiki menjadi lebih baik';
    }
    //praktikum08
    public static function hitungSks()
    {
        echo "jumlah SKS nya adalah ". "<b>" . self::$sks * self::$bobot . "<b>" . "<br/>";
    }
}