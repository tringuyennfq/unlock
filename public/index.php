<?php

use Tringuyen\Unlock\Core\Application;

require '../vendor/autoload.php';

$testapp = new Application();
$testapp->router->get('/', function () {
    return 'Home';
});
$testapp->router->get('/about', function () {
    return 'About';
});
$testapp->router->get('/contact', 'contact');

$testapp->run();
