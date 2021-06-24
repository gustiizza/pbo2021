<?php

namespace App\Models;

use App\Models\Pengguna;

class Mahasiswa extends Pengguna{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;
    public $judulTA;

    function __construct($nim, $nama, $ipk, $alamat){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setIpk($ipk){
        $this->IPK = $ipk;
    }

    public function getIpk(){
        return $this->IPK;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    public function inputMatkul()
    {
        
    }
    public function updateProfil()
    {
        
    }
}
?>