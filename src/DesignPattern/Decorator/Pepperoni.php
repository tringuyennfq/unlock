<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

class Pepperoni extends PizzaDecorator
{
    protected $topping;

    public function __construct($pizza)
    {
        $this->topping = $pizza;
    }

    public function getName(): string
    {
        return $this->topping->getName()." Pepperoni";
    }

    public function getPrice(): float
    {
        return $this->topping->getPrice() + 25000;
    }
}
