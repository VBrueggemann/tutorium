<?php

include 'Linear.php';

class Parabola
{
    private $a;
    private $b;
    private $c;
    
    public function __construct($a = 1, $b = 0, $c = 0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function zero()
    {
        if ((($this->b/2) * ($this->b/2) - $this->c) < 0) {
            return [];
        }
        if ((($this->b/2) * ($this->b/2) - $this->c) == 0) {
            return [
                (-$this->b/2) + (sqrt(($this->b/2) * ($this->b/2))-$this->c)
            ];
        }

        return [
            (-$this->b/2) + (sqrt(($this->b/2) * ($this->b/2))-$this->c),
            (-$this->b/2) - (sqrt(($this->b/2) * ($this->b/2))-$this->c),
        ];
    }
    
    public function ableiten()
    {
        return new Linear(2*$this->a, $this->b);
    }
}

$para = new Parabola(1,0,0);
var_dump($para->ableiten()->zero());