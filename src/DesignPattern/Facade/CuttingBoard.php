<?php

namespace Tringuyen\Unlock\DesignPattern\Facade;

class CuttingBoard
{
    /**
     * @param string $a
     * @return void
     */
    public function Cut(string $a): void
    {
        echo "Cutting " . $a . "<br>";
    }
}
