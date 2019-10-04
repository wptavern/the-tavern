<?php
/**
 * Views Collection.
 *
 * Houses the collection of views in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Settings\Admin\Views;

use Hybrid\Tools\Collection;

/**
 * Views class.
 *
 * @since  1.0.0
 * @access public
 */
class Views extends Collection {

	/**
	 * Adds a new view to the collection.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {

		$view = is_string( $value ) ? new $value() : $value;

		parent::add( $name, $view );
	}
}
