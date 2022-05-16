<?php

namespace Tringuyen\Unlock\Helper;

use Tringuyen\Unlock\DesignPattern\SOLID\SRP\Duck;
use Tringuyen\Unlock\Model\Dog;

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
