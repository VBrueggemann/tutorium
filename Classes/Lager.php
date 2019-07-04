<?php


class Lager
{
    private $kisten = [];

    public function addKiste(Kiste $kiste)
    {
        $this->kisten[] = $kiste;
    }

    public function indexKisten() : string
    {
        $string = '';
        for ($i = 0; $i < count($this->kisten); $i++) {
            $string = $string . $this->kisten[$i]->getInhalt() . "\n";
        }
        return $string;
    }
}