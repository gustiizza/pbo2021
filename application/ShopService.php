<?php

namespace App;

use App\Product;

class ShopService
{
    public function changeProductPrice($price, Product $product)
    {
        $product->changePrice($price);
    }
}