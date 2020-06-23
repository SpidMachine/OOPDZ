<?php


class TArray
{
    protected $array = [];


    public function __construct($array)
    {
        $this->setArray($array);
    }

    public function max()
    {
        $max = $this->array[0];
        foreach ($this->array as $value) {
            if ($value > $max) {
                $max = $value;
            }
        }
        return $max;
    }

    public function min()
    {
        $min = $this->array[0];
        foreach ($this->array as $value) {
            if ($value < $min) {
                $min = $value;
            }
        }
        return $min;
    }

    public function avg()
    {
        echo $avg = $this->sum() / $this->count();
    }

    public function sum()
    {
        $sum = 0;
        foreach ($this->array as $value) {
            $sum += $value;

        }
        return $sum;
    }

    public function count()
    {
        return count($this->array);
    }

    /**
     * @param array $array
     */
    public function setArray(array $array)
    {
        $this->array = $array;
    }


}