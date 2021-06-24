<?php

namespace App\Models;

use App\Models\Pengguna;
use App\Models\Pegawai;


class Dosen extends Pengguna implements Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($nip, $nama, $no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
    }

    public function validasiMahasiswa()
    {
        
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
    
    public function setNoTelp($no_telp){
        $this->$no_telp = $no_telp;
    }

    public function getNoTelp(){
        return $this->no_telp;
    }

    public function setPembimbingTA(TugasAkhir $ta)
    {
        $this->pembimbingTA = $ta;
    }
    public function setPengujiTA(TugasAkhir $ta)
    {
        $this->pengujiTA = $ta;
    }
    public function getPembimbingTA()
    {
        return $this->pembimbingTA;
    }
    public function getPengujiTA()
    {
        return $this->pengujiTA;
    }
}

?>