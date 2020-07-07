<?php

namespace App\PointPattern;

abstract class Singleton
{
    private static $instance = null;

    final private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function createInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}