<?php

require_once "vendor/autoload.php";

$demo = new App\DemoRun();
$demo->kata1();
$demo->kata2(new \App\Kata2\FreeShippingCalculator());
$demo->kata3();