<?php

namespace Tringuyen\Unlock\DesignPattern\Decorator;

abstract class PizzaDecorator implements PizzaInterface
{
    protected $topping;

    public function __construct(Pizza $pizza)
    {
        $this->topping = $pizza;
    }

    /**
     * @return string
     */
    abstract public function getName(): string;

    /**
     * @return float
     */
    abstract public function getPrice(): float;
}
