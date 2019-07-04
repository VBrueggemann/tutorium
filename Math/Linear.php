<?php


class Linear
{
    private $a;
    private $b;
    
    public function __construct($a = 1, $b = 0)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function zero()
    {
        return [
            -$this->b / $this->a
        ];
    }
    
    public function ableiten()
    {
        return
    }
}