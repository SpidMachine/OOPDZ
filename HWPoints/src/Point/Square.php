<?php


namespace Point;

class Square extends RectangleArbitrary
{
    public function setPointB(Point $point)
    {
        $this->check($this->pointA, $point);
        return parent::setPointB($point);
    }

    public function setPointA(Point $point)
    {
        $this->check($this->pointB, $point);
        return parent::setPointA($point);
    }

    public function check(?Point $otherPoint, Point $ourPoint)
    {
        if (is_object($otherPoint)) {
            $a = abs($otherPoint->getX() - $ourPoint->getX());
            $b = abs($otherPoint->getY() - $ourPoint->getY());
            if ($a == $b) {
                echo "Квадрат $a=$b";
            } else {
                echo "Это прямоугольник $a<>$b";
            }
        }
    }
}