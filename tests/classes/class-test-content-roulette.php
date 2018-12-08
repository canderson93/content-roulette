<?php

/**
 * Class TestContentRoulette
 *
 * Extends ContentRoulette class to expose some private and public members
 * for testing
 */

class Test_Content_Roulette extends \ContentRoulette\Content_Roulette
{
    public function __construct( $randomizer = null ) {
        parent::__construct( $randomizer );
    }

    public function get_random_post(): ?WP_Post {
        //Expose protected parent method
        return parent::get_random_post();
    }
}