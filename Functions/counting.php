<?php

function counting(int $i)
{
    if ($i >= 10) {
        return $i;
    }
    return $i . ' ' . counting($i + 1);
}

//echo counting(1); //1 2 3 4 5 6 7 8 9 10

//function counting(int $i)
//{
//    $result = '';
//    for($i = 1;$i <= 10; $i++) {
//        $result = $result . $i;
//    }
//    return $result;
//}

function fibonacci(int $i)
{
    if($i == 0 || $i == 1) {
        return 1;
    }
    return fibonacci($i-1) + fibonacci($i-2);
}
for ($i = 0; $i < 100; $i++)
echo "\n" . fibonacci($i);