<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use TriNguyen\Unlock\Application;
use TriNguyen\Unlock\Controller\HomeController;
use TriNguyen\Unlock\Controller\NotFoundController;

require 'vendor/autoload.php';
$application = new Application(
    new HomeController(),
    new NotFoundController()
);

$application->start();
echo $application->cal(2, 3);
