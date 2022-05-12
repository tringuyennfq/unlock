<?php

namespace Tringuyen\Unlock\Model;

class Circle extends Shape
{
    public float $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
