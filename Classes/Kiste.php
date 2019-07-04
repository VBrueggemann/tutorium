<?php


class Kiste
{
    private $inhalt;

    public function __construct($inhalt)
    {
        $this->inhalt = $inhalt;
    }

    public function getInhalt()
    {
        return $this->inhalt;
    }

    /**
     * @param mixed $inhalt
     */
    public function setInhalt($inhalt)
    {
        $this->inhalt = $inhalt;
    }


}