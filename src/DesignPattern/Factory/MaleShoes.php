<?php

namespace Tringuyen\Unlock\DesignPattern\Factory;

class MaleShoes implements ShoesInterface
{
    /**
     * @return SizeL
     */
    public function getShoes(): SizeL
    {
        return new SizeL();
    }
}