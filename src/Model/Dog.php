<?php

namespace Tringuyen\Unlock\Model;

use Tringuyen\Unlock\Helper\Animal;
use Tringuyen\Unlock\Helper\CharacteristicInterface;

class Dog extends Animal implements CharacteristicInterface
{
    public function __construct(int $height, int $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }
    /**
     * @return string
     */
    public function speak(): string
    {
        return 'woof';
    }

    /**
     * @return string
     */
    public function personality(): string
    {
        return 'positive';
    }
}
