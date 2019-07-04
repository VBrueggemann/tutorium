<?php

class Fraction
{
    private $numerator;
    private $denominator; // numerator/denominator

    public function __construct($numerator, $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function expand(float $expand)
    {
        $this->numerator = $this->numerator * $expand;
        $this->denominator = $this->denominator * $expand;
        return $this;
    }

    public function reduce(float $reduce)
    {
        return $this->expand(1/$reduce);
    }

    public function multiply(Fraction $other)
    {
        return new Fraction($this->numerator * $other->numerator, $this->denominator * $other->denominator);
    }

    public function divide(Fraction $other)
    {
        return $this->multiply(new Fraction($other->denominator, $other->numerator));
    }

    public function add(Fraction $other)
    {
        $kgv = $this->kgv($this->denominator, $other->denominator);
        return new Fraction($this->numerator * ($kgv / $this->denominator) + $other->numerator * ($kgv / $other->denominator), $kgv);
    }

    public function sub(Fraction $other)
    {
        return $this->add(new Fraction(-$other->numerator, $other->denominator));
    }

    private function ggt($m, $n) {
        if ($n==0){
            return $m;
        }
        return $this->ggt($n, $m % $n);
    }

    private function kgv($m, $n) {
        return ($m * $n) / $this->ggt($m, $n);
    }

    public function print()
    {
        return "$this->numerator / $this->denominator \n";
        return $this->numerator . '/' . $this->denominator . PHP_EOL;
    }
}