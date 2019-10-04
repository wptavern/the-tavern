<?php
/**
 * Loop Layouts Collection.
 *
 * Houses the collection of layouts in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Layout\Loop;

use Tavern\Layout\Layouts as Base;
use Tavern\Tools\Collection;

/**
 * Loop Layouts class.
 *
 * @since  2.1.0
 * @access public
 */
class Layouts extends Base {

	/**
	 * Adds a new layout to the collection.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {

		parent::add(
			$name,
		 	$value instanceof Layout ? $value : new Layout( $name, $value )
		);
	}

	/**
	 * Gets a layout from the collection.
	 *
	 * Note that we're providing back-compat with the original `default`
	 * loop type here.  This should be removed in version 2.2.0 or later.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  string  $name
	 * @return mixed
	 */
	public function get( $name ) {

		$name = 'default' === $name ? 'blog' : $name;

		return parent::get( $name );
	}
}
