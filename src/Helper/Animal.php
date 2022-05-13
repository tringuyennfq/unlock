<?php

namespace Tringuyen\Unlock\Helper;

abstract class Animal
{
    public int $weight;
    public int $height;
    abstract public function speak();

    /**
     * @return string
     */
    public function eat(): string
    {
        return "eat";
    }
}
