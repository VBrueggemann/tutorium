<?php


class Bus
{
    public function dispatch(string $message)
    {

    }

    public function subscribe(callable $function)
    {

    }
}

$bus = new Bus();

$bus->subscribe(function ($message) {
    echo $message;
});

$bus->dispatch('hey');
