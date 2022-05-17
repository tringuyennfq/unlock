<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

class Pizza implements PizzaInterface
{

    /**
     * @return string
     */
    public function getName()
    {
        return "Pizza";
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return 100000;
    }
}
