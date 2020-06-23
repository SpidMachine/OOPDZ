<?php


class Money
{
    protected $USD;
    protected $EUR;
    protected $RUB;
    private $value;

    public function __construct($USD, $EUR, $RUB)
    {
        $this->setUSD($USD);
        $this->setEUR($EUR);
        $this->setRUB($RUB);
    }

    public function toUSD()
    {

        return $this->value / $this->USD;
    }

    public function toEUR()
    {
        return $this->value / $this->EUR;
    }

    public function toRUB()
    {
        return $this->value / $this->RUB * 100;
    }


    /**
     * @param mixed $USD
     */
    public function setUSD($USD)
    {
        if ($this->USD > 0) {
            $this->USD = $USD;
        } else {
            echo "Ошибка!";
        }
    }

    /**
     * @param mixed $EUR
     */
    public function setEUR($EUR)
    {
        if ($this->EUR > 0) {
            $this->EUR = $EUR;
        } else {
            echo "Ошибка!";
        }
    }

    /**
     * @param mixed $RUB
     */
    public function setRUB($RUB)
    {
        if ($this->RUB > 0) {
            $this->RUB = $RUB;
        } else {
            echo "Ошибка!";
        }
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}