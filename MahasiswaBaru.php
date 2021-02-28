<?php
require_once ("Mahasiswa.php");

class MahasiswaBaru extends Mahasiswa{
    public $no_regristrasi;

    function __construct($nim, $nama, $tgl, $jk,$no_regristrasi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
        $this->no_registrasi = $no_regristrasi;
    }
    public function bayarGedung(){
        
    }
}
?>