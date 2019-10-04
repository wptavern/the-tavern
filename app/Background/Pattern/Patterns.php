<?php
/**
 * Patterns Collection.
 *
 * Houses the collection of patterns in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Background\Pattern;

use Tavern\Tools\Collection;

/**
 * Patterns class.
 *
 * @since  2.2.0
 * @access public
 */
class Patterns extends Collection {

	/**
	 * Adds a new pattern to the collection.
	 *
	 * @since  2.2.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {

		parent::add(
			$name,
		 	$value instanceof Pattern ? $value : new Pattern( $name, $value )
		);
	}
}
