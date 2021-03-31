<?php

require_once 'MyDate.php';
use application\MyDate;
$the_date = new MyDate();
$the_date->setDay(15);

echo $the_date->getDay();