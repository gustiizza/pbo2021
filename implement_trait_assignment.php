<?php

require_once('vendor/autoload.php');

use App\Frog;

$kodok = new Frog();
$kodok->name = 'Anura';

$kodok->cekNama();
$kodok->jump();
$kodok->breathe();
$kodok->ovivar();