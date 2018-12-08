<?php
/*
 * Plugin Name: Content Roulette
 * Version: 1.0.0
 * Author: Carl Anderson
 * License: MIT
 */


if (!defined('WPINC')) {
    die;
}

define('CONTENT_ROULETTE_VERSION', '1.0.0');

/**
 * Loads in the Content Roulette class, and tell it to register its hooks
 */
function run_content_roulette() {
    require_once( plugin_dir_path( __FILE__ ) . 'includes/class-content-roulette.php' );
    $instance = new \ContentRoulette\Content_Roulette();

    $instance->register_hooks();
}

run_content_roulette();