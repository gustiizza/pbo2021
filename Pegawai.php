<?php
require_once ("User.php");

class Pegawai extends User{
    public $nip;
    public $nama;
    public $no_hp;
    public $gaji_pokok;

    function __construct($nip,$nama,$no_hp,$gaji_pokok){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->gaji_pokok = $gaji_pokok;        
    }
    public function tampilkanGaji(){
        echo "Jumlah Gaji : $this->gaji_pokok";
    }
}
?>