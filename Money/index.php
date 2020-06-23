<?php

include("src/autoload.php");

$money = new Money(2.395, 2.715, 3.51);
$money->setValue(100);
echo $money->toUSD();
echo "<br>";
echo $money->toEUR();
echo "<br>";
echo $money->toRUB();