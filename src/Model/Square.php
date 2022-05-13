<?php

namespace Tringuyen\Unlock\Model;

class Square extends Shape
{
    public $height;
    public function __construct($height)
    {
        $this->height = $height;
    }
    public function area()
    {
        return $this->height*$this->height;
    }
}