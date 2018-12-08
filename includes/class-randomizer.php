<?php

namespace ContentRoulette;

require_once(plugin_dir_path(__FILE__) . 'interface-randomizer.php');

class Randomizer implements IRandomizer
{
    public function get_random( int $max, int $min = 0 ): int
    {
        return mt_rand( $min, $max );
    }
}