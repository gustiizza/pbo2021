<?php

class Pegawai  
{
    public $nama;

    public function sapa()
    {
        echo "Halo ". $this->nama. " posisi anda saat ini adalah pegawai\n";
    }
    public function masuk()
    {
        echo "Anda masuk kerja pada tanggal ". date('y-md'). "\n";
    }
}

class KetuaJurusan extends Pegawai 
{
    public function sapa()
    {
        echo "Hei ". $this->nama. " nama anda itukan ketua jurusan ya\n";
    }
    public function parentSapa()
    {
        return parent::sapa();
    }
}
class Rumus
{
    public $sisi;
    public $panjang;
    public $lebar;
    public $tinggi;
    
    public function luaspersegi()
    {
        $luas = $this -> sisi*2;
        return $luas;
    }
    public function kelpersegi()
    {
        $keliling = $this -> sisi*4;
        return $keliling;
    }
    public function luasperpanjang()
    {
        $luas = $this -> panjang * $this -> lebar;
        return $luas;
    }
    public function kelperpanjang()
    {
        $luas = 2 * $this -> panjang + $this -> lebar;
        return $luas; 
    }
}

    
$budi = new KetuaJurusan();
$budi->nama ='Budi Saja';
$budi->parentsapa();
$budi->masuk();