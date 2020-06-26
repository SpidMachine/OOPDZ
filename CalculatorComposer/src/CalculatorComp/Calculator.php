<?php

namespace App\CalculatorComp;

class Calculator implements CalculatorInterface
{
    private $a;
    private $b;

    public function __construct($a = 0, $b = 0)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function mul()
    {
        return $this->a * $this->b;
    }

    public function dif()
    {
        return $this->a - $this->b;
    }

    public function div()
    {
        return $this->a / $this->b;
    }
}