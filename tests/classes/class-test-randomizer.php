<?php


class Test_Randomizer implements \ContentRoulette\IRandomizer
{

    protected $counter;

    public function __construct() {
        $this->counter = 0;
    }

    public function get_random( int $max, int $min = 0 ): int
    {
        //This is a test randomizer, so rather than returning a randomized value,
        //we just return the value that we were told to
        return $this->counter;
    }

    public function set_value( int $value ) {
        $this->counter = $value;
    }
}