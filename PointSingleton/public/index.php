<?php

include '../vendor/autoload.php';

use App\PointPattern\PointPattern;

$point = PointPattern::createInstance();

$point
    ->setX(10)
    ->setY(8);
echo $point->getX();
echo $point->getY();
echo "<br>";


$point2 = PointPattern::createInstance();



echo $point2->getX();
echo $point2->getY();

$point2->setX(3);
echo "<br>";

$point3 = PointPattern::createInstance();

echo $point3->getX();
echo $point3->getY();
//$point3->a = 20;
//echo $point3->prrr;
echo $point3;