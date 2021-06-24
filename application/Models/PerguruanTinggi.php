<?php

namespace App\Models;

class PerguruanTinggi{
    public $id;
    public $namaPT;
    protected $akreditasi;

    function __construct($id,$namaPT,$akreditasi){
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNamaPT($namaPT){
        $this->namaPT = $namaPT;
    }

    public function getNamaPT(){
        return $this->namaPT;
    }

    public function setAkreditasi($akreditasi){
        $this->akreditasi = $akreditasi;
    }

    public function getAkreditasi(){
        return $this->akreditasi;
    }

    public function registerMaba()
    {
        
    }
}
?>