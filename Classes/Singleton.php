<?php

class Singleton {
    private static $instance;

    private function __construct(){}

    public static function getInstance() : Singleton
    {
        return self::$instance ?: self::$instance = new Singleton();
    }
}

