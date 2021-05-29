<?php

namespace App;

/**
 * Trait untuk kamuflase
 */
trait CanJump
{
    public function jump()
    {
        echo "Sebagai kodok, ".$this->name." sudah ";
        echo "tentu dapat melompat dengan kedua kakinya<br>";
    }
}