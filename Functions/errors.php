<?php

//$array = ['a', 'b', 'c'];
//
//for ($i = 0; $i < count($array); $i++)
//{
//    echo $array[$i];
//}
//echo 'fertig';

//Rückgabe der Schnittmenge zweier Arrays
function intersect(array $first, array $second) : array
{
    $intersect = [];
    for ($i = 0; $i< count($first); $i++) {
        for ($j = 0; $j < count($second); $j++) {
            if ($first[$i] == $second[$j]) {
                $intersect[count($intersect)] = $first[$i];
            }
        }
    }

    return unique($intersect);
}

var_dump(intersect([1,2,3,4,1], [3,1])); //[3,1]

//Entfernt doppelte Elemente aus einem array
function unique(array $array) : array
{
    $result = [];

    for ($i = 0; $i < count($array); $i++) {
        $doesNotContain = true;

        for($k = 0; $k <count($result); $k++) {
            if ($array[$i] == $result[$k]) {
                $doesNotContain = false;
            }
        }

        if ($doesNotContain) {
            $result[count($result)] = $array[$i];
        }
    }

    return $result;
}

//
//$uniqueArray = unique([1,2,3,4,1,3,5]); //[1,2,3,4,5]
//
//var_dump($uniqueArray);

