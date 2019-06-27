<?php

class Huhn extends Tier
{
    public function __construct($farbe)
    {
        $this->farbe = $farbe;
    }

    public function call(): string
    {
        return 'bock bock';
    }

    public function getFarbe()
    {
        return parent::getFarbe();
    }
}