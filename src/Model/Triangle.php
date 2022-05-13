<?php

namespace Tringuyen\Unlock\Model;

class Triangle extends Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function area()
    {
        return $this->height * $this->width * 1/2;
    }
}
