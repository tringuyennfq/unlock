<?php

namespace Tringuyen\Unlock\Helper;

class Dog extends Animal implements Characteristic
{
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
    public function __construct(int $height, int $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    /**
     * @return void
     */
    public function show(): void
    {
        echo "Height: ".$this->height."<br>";
        echo "Weight: ".$this->weight."<br>";
        echo "Personality: ".$this->personality()."<br>";
        echo "Speak: ".$this->speak()."<br>";
    }
}
