<?php

function sum($data) {
    $sum = 0;
    for ($i = 0; $i < count($data); $i++) {
        $sum = $sum + $data[$i];
    }
    return $sum;
}

//echo sum([1, 2, 77, 5, 5, 10]);

function biggestSum($array) {
    $result = 0;
    $biggestSum = sum($array[0]);

    for($i = 1; $i < count($array); $i++) {
        $sum = sum($array[$i]);
        if ($sum > $biggestSum) {
            $biggestSum = $sum;
            $result = $i;
        }
    }
    return $result;
}

echo biggestSum([[1, 2, 77, 5, 5, 10], [1, 2, 77, 6, 5, 10], [], [99], [1, 2, 77, 5, 5, 10]]); // 1
