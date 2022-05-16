<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

class Pizza implements PizzaInterface
{

    public function getName()
    {
        return "Pizza";
    }
    public function getPrice()
    {
        return 100000;
    }
}
