<?php
require __DIR__ . "/../../../vendor/autoload.php";

use Tringuyen\Unlock\DesignPattern\DependencyInjection\Human;
use Tringuyen\Unlock\DesignPattern\DependencyInjection\Personality;

$personality1 = new Personality("Humorous");
$Alex = new Human($personality1);
echo "Alex is " . $Alex->getPersonality() . "\n";
$personality2 = new Personality("Dumb");
$Alex->setPersonality($personality2);
echo "Alex is now " . $Alex->getPersonality() . "\n";
