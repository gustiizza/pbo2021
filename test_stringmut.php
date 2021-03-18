<?php

require_once 'StringMutator.php';

$kata = new StringMutator('Dian Prawira');

$hasil = $kata->bold()->italic()->underscore()->getWord();

echo $hasil;
