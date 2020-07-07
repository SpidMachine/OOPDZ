<?php

include '../vendor/autoload.php';

use App\Pattern\MyClass;

//$obj = new  MyClass();
$obj = Myclass::createInstance();
echo $obj->hello();

$obj->increase();
$obj->increase();

echo $obj->getCounter();

$obj2 = MyClass::createInstance();

echo $obj2->getCounter();
