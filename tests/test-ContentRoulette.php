<?php

require_once(plugin_dir_path(__FILE__) . 'classes/class.TestContentRoulette.php');
require_once(plugin_dir_path(__FILE__) . 'classes/class.TestRandomizer.php');

class ContentRoulette_Test extends WP_UnitTestCase
{
    /**
     * Tests that loading a random post returns a value
     */
    public function testLoadingAllPosts() {

        $randomizer = new TestRandomizer();
        $instance = new TestContentRoulette($randomizer);

        $randomPost = $instance->get_random_post();
        $this->assertEquals(array(), $randomPost);
    }
}
