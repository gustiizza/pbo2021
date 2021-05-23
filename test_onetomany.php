<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$dian = new Pengguna(3, "Dian Prawira", new Alamat(5, "Pontianak"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi Saja');
$lapak_budi->setId(2);

$lapak_ani = new Penjual();
$lapak_ani->setName('Ani Jak');
$lapak_ani->setId(1);

$lapak_wati = new Penjual();
$lapak_wati->setName('Wati juga');
$lapak_wati->setId(3);

$dian->setPenjual($lapak_budi);
$dian->setPenjual($lapak_ani);
$dian->setPenjual($lapak_wati);

$penjual_dian =  $dian->getPenjual();
echo $penjual_dian[0]->getName(); // ada 3 index 0,1,2