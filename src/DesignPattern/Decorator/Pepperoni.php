<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

class Pepperoni extends PizzaDecorator
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
        return $this->topping->getName() . " Pepperoni";
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->topping->getPrice() + 25000;
    }
}
