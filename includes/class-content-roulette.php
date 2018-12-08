<?php
/**
 *
 * @package    totarasocial
 * @subpackage
 * @author     Carl Anderson <carl.anderson@totaralearning.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Totara Social, please see the README file distributed with this software.
 * @copyright  (C) 2014 onwards Totara Learning Solutions Ltd
 *
 */

/**
 * Created by PhpStorm.
 * User: carlanderson
 * Date: 7/12/18
 * Time: 12:04 PM
 */

namespace ContentRoulette;

class Content_Roulette
{
    /**
     * @var IRandomizer used to randomize values
     */
    protected $randomizer;

    public function __construct( $randomizer = null ) {

        if ( empty($randomizer) ) {
            require_once( plugin_dir_path(__FILE__) . 'class-randomizer.php' );
            $randomizer = new Randomizer();
        }

        $this->randomizer = $randomizer;
    }

    /**
     * Register WordPress Hooks for the ContentRoulette plugin
     */
    public function register_hooks(): void {
        add_action( 'template_redirect', array( $this, 'randomize_redirect' ), 9 );
        add_filter( 'query_vars', function( $vars ) {
            //Register random query var to trigger redirects
            $vars[] = "random";
            return $vars;
        });
    }

    /**
     * Gets a full list of wordpress posts, and randomly redirects to one of them
     */
    public function randomize_redirect(): void {

        $query = get_query_var( 'random', 'false' );
        if ( 'false' !== $query ) {
            $post = $this->get_random_post();

            if ( !empty( $post ) ) {
                wp_redirect( $post->guid );
                exit;
            }

        }
    }

    /**
     * Gets a random post
     * @return \WP_Post|null
     */
    protected function get_random_post(): ?\WP_Post {
        $pages = get_posts();
        $pages_count = count( $pages );

        //Redirect to the post
        if ( $pages_count < 0 ) {
            $index = $this->randomizer->get_random( $pages_count - 1, 0 );

            return $pages[ $index ];
        }

        return null;
    }
}