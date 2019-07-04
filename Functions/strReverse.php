<?php

function strReverse(string $str): string
{
    $return='';
    for (
        ; $k >= 0; $k--, $i++)
    {
        $return[$i] = $str[$k];
    }

    return $return;
}

echo strReverse('1 2 3 4 5 6 7 8 9');