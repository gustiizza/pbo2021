<?php

namespace App\Models;

use App\Models\Pengguna;
use App\Models\Pegawai;

class TenagaKependidikan extends Pengguna implements Pegawai{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($nip, $nama, $alamat){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function setNip($nip){
        $this->nip = $nip;
    }

    public function getNip(){
        return $this->nip;
    }

    public function presensiMasuk(){

    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    public function hitungTunjanganKinerja()
    {
        
    }

}
?>