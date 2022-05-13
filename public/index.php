<?php

use Tringuyen\Unlock\Core\Application;

require '../vendor/autoload.php';

$testapp = new Application();
$testapp->run();
$a = new \Tringuyen\Unlock\Model\Triangle(8, 3);
$b = new \Tringuyen\Unlock\Model\Square(5);
$c = new \Tringuyen\Unlock\Model\Circle(4);
$arr = array($a, $b);
$testboard = new \Tringuyen\Unlock\Model\Board();
echo $testboard->calculateArea($arr);
