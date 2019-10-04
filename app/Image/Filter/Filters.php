<?php
/**
 * Image Filters Collection.
 *
 * Houses the collection of image filters in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Image\Filter;

use Tavern\Tools\Collection;

/**
 * Image filters class.
 *
 * @since  1.0.0
 * @access public
 */
class Filters extends Collection {

	/**
	 * Adds a new image filter to the collection.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {
		parent::add( $name, new Filter( $name, $value ) );
	}
}
