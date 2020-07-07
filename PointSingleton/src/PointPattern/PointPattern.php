<?php

namespace App\PointPattern;

class PointPattern extends Singleton
{
    protected $x;
    protected $y;
    protected $a;

    public function __get($property)
    {
        if ($property == "text"){
            return 2;
        }else{
            return "error";
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function setX(int $x)
    {
        $this->x = $x;
        return $this;
    }

    public function setY(int $y)
    {
        $this->y = $y;
        return $this;
    }

    public function getX()
    {
        return " x = " . $this->x;
    }

    public function getY()
    {
        return " y = " . $this->y;
    }

    public function __toString()
    {
        return "x = $this->x y = $this->y";
    }

}
