<?php
/**
 * Font Settings Collection.
 *
 * Houses the collection of font settings in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Typography\Setting;

use Tavern\Tools\Collection;

/**
 * Font settings class.
 *
 * @since  2.0.0
 * @access public
 */
class Settings extends Collection {

	/**
	 * Adds a new font setting to the collection.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {
		parent::add( $name, new Setting(
			$name,
			$value['options'],
			$value['collections']
		) );
	}
}
