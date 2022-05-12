<?php

namespace Tringuyen\Unlock\Model;

use Tringuyen\Unlock\Helper\Animal;

class Duck extends Animal
{

    public function speak(): string
    {
        return 'Quack';
    }
}
