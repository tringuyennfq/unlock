<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

class Mozzarella extends PizzaDecorator
{
    protected $topping;

    public function __construct($pizza)
    {
        $this->topping = $pizza;
    }

    public function getName(): string
    {
        return $this->topping->getName()." Mozzarella";
    }

    public function getPrice(): float
    {
        return $this->topping->getPrice() + 50000;
    }
}
