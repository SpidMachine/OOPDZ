<?php

namespace Point;

interface PointInterface
{

    public function setX(int $x);

    public function setY(int $y);

    public function getX(): int;

    public function getY(): int;
}