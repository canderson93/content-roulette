<?php


class TestRandomizer implements \ContentRoulette\IRandomizer
{

    protected $counter;

    public function __construct() {
        $this->counter = 0;
    }

    public function getRandom(int $max, int $min = 0): int
    {
        //This is a test randomizer, so rather than returning a randomized value,
        //we just return the value that we were told to
        return $this->counter;
    }

    public function setValue(int $value) {
        $this->counter = $value;
    }
}