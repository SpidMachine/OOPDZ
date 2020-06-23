<?php


namespace Point;


class Parallelepiped
{
    protected $pointA;
    protected $pointB;
    protected $pointC;
    protected $pointD;

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

    public function setPointC(Point $pointC)
    {
        $this->pointC = $pointC;
        return $this;
    }

    public function setPointD(Point $pointD)
    {
        $this->pointD = $pointD;
        return $this;
    }

    public function getPerimeter(): float
    {
        if (is_object($this->pointA) && is_object($this->pointB) && is_object($this->pointC) && is_object($this->pointD)) {
            $AB = abs($this->pointA->getX() - $this->pointB->getX());
            $BC = abs($this->pointB->getY() - $this->pointC->getY());
            $DB = abs($this->pointB->getY() - $this->pointD->getY());
            $perimeter = 4 * ($AB + $BC + $DB);
        } else {
            $perimeter = -1;
        }

        return $perimeter;
    }
}