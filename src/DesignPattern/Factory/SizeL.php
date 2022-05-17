<?php

namespace Tringuyen\Unlock\DesignPattern\Factory;

class SizeL implements SizeInterface
{
    /**
     * @return string
     */
    public function getSize(): string
    {
        return "Size L";
    }
}
