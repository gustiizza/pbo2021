<?php

require_once 'initialize.php';

use application\Dosen;

$dian = new Dosen('198411132015041001', 'Dian Prawira', '0800000', '50000000', '13118405', 'Tenaga Pengajar');

$dian->mengajar();
$dian->meneliti();

use application\Mahasiswa;

$lita = new Mahasiswa('H1101191058', 'Lita Novitasari', '01-01-1965', 'P');
$lita->tampilkanAngkatan();

use application\MyDate;
$tanggal = new MyDate();