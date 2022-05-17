<?php

namespace Tringuyen\Unlock\DesignPattern\Factory;

class FemaleShoes implements ShoesInterface
{
    /**
     * @return SizeM
     */
    public function getShoes(): SizeM
    {
        return new SizeM();
    }
}