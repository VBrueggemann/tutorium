<?php

abstract class Car {
    protected $color;
    protected $brand;
    protected $doorCount;

    public function __construct($color, $brand, $doorCount)
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->doorCount = $doorCount;
    }

    public abstract function fuelEfficiency();
}