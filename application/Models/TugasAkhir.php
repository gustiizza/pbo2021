<?php

namespace App\Models;
use App\Models\Mahasiswa;

class TugasAkhir{
    public $id;
    public $judulTA;
    public $mahasiswaTA = [];
    public $pembimbingTA = [];
    public $pengujiTA = [];

    function __construct($id, $judul, $mahasiswa, $pembimbing, $penguji){
        $this->id = $id;
        $this->judulTA = $judul;
        $this->mahasiswaTA = $mahasiswa;
        $this->pembimbingTA = $pembimbing;
        $this->pengujiTA = $penguji;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setJudulTA($judul){
        $this->judulTA = $judul;
    }

    public function getJudulTA()
    {
        return $this->judulTA;
    }
    
    public function setMahasiswaTA(Mahasiswa $mahasiswa)
    {
        $this->mahasiswaTA[] = $mahasiswa;
    }

    public function getMahasiswaTA()
    {
        return $this->mahasiswaTA;
    }

    public function setPembimbingTA(Dosen $dosen)
    {
        $this->pembimbingTA[] = $dosen;
    }

    public function getPembimbingTA()
    {
        return $this->pembimbingTA;
    }

    public function setPengujiTA(Dosen $dosen)
    {
        $this->pengujiTA[] = $dosen;
    }

    public function getPengujiTA()
    {
        return $this->pengujiTA;
    }

    public function tambahTA()
    {
        
    }
}
?>