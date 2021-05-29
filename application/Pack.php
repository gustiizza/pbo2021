<?php

namespace App;

/**
 * Trait to inherit another traits
 */
trait Pack
{
    use CanJump, CanMetamorphosis, IsOvivar, HasName{
    ovivar as public;
    }
    public function swimming()
    {
        echo $this->name." juga dapat berenang<br>";
    }
}