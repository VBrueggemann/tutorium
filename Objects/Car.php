<?php

class Car
{
    public static $bestDriver;
    private $color;
    private $doors;
    private $driver;

    /**
     * Car constructor.
     *
     * @param $color
     * @param $doors
     * @param $driver
     */
    public function __construct(string $color, int $doors, Driver $driver)
    {
        $this->color = $color;
        $this->doors = $doors;
        $this->driver = $driver;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }
}