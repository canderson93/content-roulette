<?php

require_once(plugin_dir_path(__FILE__) . 'classes/class-test-content-roulette.php');
require_once(plugin_dir_path(__FILE__) . 'classes/class-test-randomizer.php');

class Content_Roulette_Test extends WP_UnitTestCase
{
    /**
     * Tests that loading a random post returns a value
     */
    public function test_loading_all_posts() {

        $randomizer = new Test_Randomizer();
        $instance = new Test_Content_Roulette( $randomizer );

        $randomPost = $instance->get_random_post();
        $this->assertEquals( array(), $randomPost );
    }
}
