<?php
require_once ("User.php");

class Mahasiswa extends User{
//atribut
    public $nama;
    public $nim;
    public $tanggal_lahir;
    public $jenis_kelamin;

    function __construct($nama,$nim,$tl,$jk){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->tanggal_lahir = $tl;
        $this->jenis_kelamin = $jk;
}
    public function tampilkanAngkatan(){
        echo substr($this->nim , 5,-4)."<br>";
    }

    public function tampilkanUmur(){
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    }
    public function tampilkanNama($nama){
        echo $this->nama;   
    }
}