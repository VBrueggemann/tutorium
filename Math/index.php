<?php
include "Fraction.php";

$fraction = new Fraction(5, 7);
echo $fraction->print();

echo $fraction->expand(2)->print();

echo $fraction->reduce(2)->print();

echo $fraction->multiply(new Fraction(2,1))->print();

echo $fraction->divide(new Fraction(2,1))->print();

echo (new Fraction(1, 10))->add(new Fraction(1,5))->print();

echo (new Fraction(3, 10))->sub(new Fraction(1,5))->print();

$para = new Parabola(1,0,0);

var_dump($para->ableiten()->zero());
