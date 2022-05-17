<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

class Mozzarella extends PizzaDecorator
{
    protected $topping;

    public function __construct($pizza)
    {
        $this->topping = $pizza;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->topping->getName() . " Mozzarella";
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->topping->getPrice() + 50000;
    }
}
