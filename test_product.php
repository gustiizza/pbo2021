<?php

require_once 'Product.php';

$pro = new Product();
echo $pro->getProductType();
$pro->setProductType('FlashDisk');
echo "<br>";
echo $pro->getProductType();