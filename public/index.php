<?php
require_once __DIR__."/../vendor/autoload.php";
use \App\Wcs\Hello;

$hello = new Hello();
$sayHello = new \HelloWorld\SayHello();
echo $sayHello->world();