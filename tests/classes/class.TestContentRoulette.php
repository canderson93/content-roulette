<?php

/**
 * Class TestContentRoulette
 *
 * Extends ContentRoulette class to expose some private and public members
 * for testing
 */

class TestContentRoulette extends \ContentRoulette\ContentRoulette
{
    public function __construct($randomizer = null) {
        parent::__construct($randomizer);
    }

    public function get_random_post(): ?WP_Post {
        return parent::get_random_post();
    }
}