<?php

namespace Point;

class RectangleArbitrary
{
    protected $pointA;
    protected $pointB;


    public function setPointA(Point $pointA)
    {
        $this->pointA = $pointA;
        return $this;
    }

    public function setPointB(Point $pointB)
    {
        $this->pointB = $pointB;
        return $this;
    }


    public function getPerimeter(): float
    {
        if (is_object($this->pointA) && is_object($this->pointB)) {
            $a = abs($this->pointA->getX() - $this->pointB->getX());
            $b = abs($this->pointA->getY() - $this->pointB->getY());
            $perimeter = 2 * ($a + $b);
        } else {
            $perimeter = -1;
        }

        return $perimeter;
    }
}