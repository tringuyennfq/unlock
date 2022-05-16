<?php

use Tringuyen\Unlock\DesignPattern\Decorator\Mozzarella;
use Tringuyen\Unlock\DesignPattern\Decorator\Pepperoni;
use Tringuyen\Unlock\DesignPattern\Decorator\Pizza;

require __DIR__.'/../../../vendor/autoload.php';
$a = new Pepperoni(new Mozzarella(new Pizza()));
echo "Name: ";
echo $a->getName()."\n";
