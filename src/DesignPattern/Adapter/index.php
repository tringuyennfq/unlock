<?php

use Tringuyen\Unlock\DesignPattern\Adapter\Ebook;
use Tringuyen\Unlock\DesignPattern\Adapter\EbookAdapter;
use Tringuyen\Unlock\DesignPattern\Adapter\Paperbook;

require __DIR__ . "/../../../vendor/autoload.php";

$ebook = new Ebook();
$paperbook = new Paperbook();
$ebookadapter = new EbookAdapter($ebook);
echo "Paperbook: \n";
$paperbook->open();
$paperbook->turnPage();
echo $paperbook->getPage() . "\n";
echo "Ebook: \n";
$ebookadapter->open();
$ebookadapter->turnPage();
echo $ebookadapter->getPage() . "\n";
