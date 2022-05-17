<?php

namespace Tringuyen\Unlock\DesignPattern\Facade;

class Stove
{
    /**
     * @param string $a
     * @return void
     */
    public function Add(string $a): void
    {
        echo "Adding ".$a." to the stove <br>";
    }

    /**
     * @return void
     */
    public function Cook(): void
    {
        echo "Cooking... <br>";
    }

    /**
     * @return void
     */
    public function TurnOff(): void
    {
        echo "Turning off... <br>";
    }
}
