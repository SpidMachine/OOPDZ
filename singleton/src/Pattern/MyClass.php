<?php

namespace App\Pattern;


class MyClass extends Singleton
{
    private $counter = 0;

    public function hello()
    {
        return "Hello";
    }

    public function getCounter()
    {
        return $this->counter;
    }

    public function increase()
    {
        $this->counter++;
    }

}