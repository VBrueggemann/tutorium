<?php

abstract class Tier
{
    public function __construct()
    {

    }

    protected $farbe = 'beige';

    public abstract function call() : string;

    public function getFarbe()
    {
        return $this->farbe;
    }
}