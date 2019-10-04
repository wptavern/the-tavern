<?php
/**
 * Image Sizes Collection.
 *
 * Houses the collection of image sizes in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Image\Size;

use Tavern\Tools\Collection;

/**
 * Image sizes class.
 *
 * @since  1.0.0
 * @access public
 */
class Sizes extends Collection {

	/**
	 * Adds a new image size to the collection.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {
		parent::add( $name, new Size( $name, $value ) );
	}

	public function customizeChoices( $sizes = [] ) {

		$choices = [];

		foreach ( $this->all() as $size ) {

			if ( $sizes && ! in_array( $size->name(), $sizes ) ) {
				continue;
			}

			$choices[ $size->name() ] = $size->label();
		}

		return $choices;
	}
}
