<?php
// Tugas Praktikum 12
namespace App;

class Frog
{
    use Pack;

    public function cekNama()
    {
        echo "Nama kodok ini adalah ".$this->name."<br>";
    }
    public function ovivar()                               
    {
        echo "Kodok ini merupakan hewan jenis ".$this->name."<br>";
    }
}