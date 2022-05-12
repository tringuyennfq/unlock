<?php

namespace Tringuyen\Unlock\Model;

use Tringuyen\Unlock\Helper\Animal;

class AnimalAction
{
    public function speak(Animal $animal)
    {
        if (is_a($animal, Duck::class)) {
            return 'Quack';
        } elseif (is_a($animal, Dog::class)) {
            return 'Woof';
        }
    }
}
