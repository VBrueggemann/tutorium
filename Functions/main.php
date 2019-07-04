<?php
include 'Collection.php';

main();

function main() {
    $array = [];

    do {
        $input = readline('Input');

        if ($input == 1) {
            $number = readline('Add');
            $array = addToArray($array, $number);
        }

        var_dump($array);

    } while($input != 4);
}