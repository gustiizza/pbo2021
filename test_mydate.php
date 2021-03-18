<?php

require_once 'MyDate.php';

$the_date = new MyDate();
$the_date->setDay(15);

echo $the_date->getDay();