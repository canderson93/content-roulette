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
 * Time: 12:31 PM
 */

namespace ContentRoulette;


interface IRandomizer
{

    /**
     * Returns a random number between $min and $max
     *
     * @param int $max maximum value to output (incl)
     * @param int $min minimum value to output (incl)
     *
     * @return int random value
     */
    public function getRandom(int $max, int $min = 0) : int;
}