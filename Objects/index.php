<?php
include "Car.php";
include "Driver.php";

$drivers[] = new Driver('Joel');
$drivers[] = new Driver('Niklas');
$drivers[] = new Driver('Maren');

foreach ($drivers as $driver) {
    $cars[] = new Car('red', 6, $driver);
}

Car::$bestDriver = $drivers[0];

var_dump(Car::$bestDriver);
