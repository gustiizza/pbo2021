<?php
require ('vendor/autoload.php');
use App\Mahasiswa;

Mahasiswa::bergerak();
 
echo Mahasiswa::$status.'<br/>';

Mahasiswa::NON_AKTIF;
$status_mahasiswa = Mahasiswa::NON_AKTIF;

echo $status_mahasiswa.'<br/>';

echo Mahasiswa::hitungSks();