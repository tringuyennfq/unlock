<?php

use TriNguyen\Unlock\Core\Application;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '/var/www/unlock/vendor/autoload.php';

$test = new Application();
$test->run();
