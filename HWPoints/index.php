<?php

include 'src/autoload.php';

use Point\Point;
use Point\Line;
use Point\Rectangle;
use Point\Triangle;
use Point\Triangle2;
use Point\Triangle3;
use Point\rectangleArbitrary;
use Point\Square;
use Point\Parallelepiped;
use Point\Cube;

$startPoint = new Point();
$endPoint = new Point();

// $startPoint
//     ->setX(2)
//     ->setY(3);

// $endPoint
//     ->setX(5)
//     ->setY(1);
$startPoint
    ->setX(3)
    ->setY(3);

$endPoint
    ->setX(1)
    ->setY(1);


$line = new Line();

$line
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);


// echo $line->getLength() . "<br>";

$rect = new Rectangle();

$rect
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);

// echo $rect->getArea() . "<br>";
// echo $rect->getPerimeter() . "<br>";

// $tr = new Triangle(
//     new Point(3, 3),
//     new Point(1, 1)
// );

// echo $tr->getPerimeter() . "<br>";
// echo $tr->getArea();

//$tr2 = new Triangle2();
//
//$pointA = new Point(0, 4);
//$pointB = new Point(2, 0);
//$pointC = new Point(0, 0);
//
//$tr2
//    ->setPointA($pointA)
//    ->setPointB($pointB)
//    ->setPointC($pointC);
//
//echo $tr2->getPerimeter();
////
////$tr3 = new Triangle3();
////$tr3->setPointA($pointA)
////    ->setPointB($pointB)
////    ->setPointC($pointC);
////echo $tr3->getPerimeter();
//
//$rectangleArbitrary = new RectangleArbitrary();
//$pointA = new Point(10, 10);
//$pointB = new Point(15, 5);
//
//$rectangleArbitrary
//    ->setPointA($pointA)
//    ->setPointB($pointB);
//
////echo $rectangleArbitrary->getPerimeter();
//
//$square = new Square();
//$square
//    ->setPointB($pointB)
//    ->setPointA($pointA);
//
//echo $square->getPerimeter();

//$square2 = new Square();
//$square2
//    ->setPointA($pointA)
//    ->setPointB($pointB);
//
//echo $square2->getPerimeter();

$parallelepiped = new Parallelepiped();
$pointA = new Point(0, 0);
$pointB = new Point(8, 0);
$pointC = new Point(11, 3);
$pointD = new Point(8, 6);

$parallelepiped
    ->setPointA($pointA)
    ->setPointB($pointB)
    ->setPointC($pointC)
    ->setPointD($pointD);

echo $parallelepiped->getPerimeter();


//$cube = new Cube();
//
//$cube->setPointB($pointB)
//    ->setPointA($pointA)
//    ->setPointD($pointD)
//    ->setPointC($pointC);
//
//echo $cube->getPerimeter();

