<?php

namespace App;

class Mobil
{
    public $roda;
    public $kursi;
    public function nyalakan()
    {
        echo "mobil dengan roda $this->roda menyala <br>";
    }
    public function mundur()
    {
        $this->nyalakan();
        echo "mobil berjalan mundur <br>";
    }
}