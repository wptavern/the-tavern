<?php
/**
 * Font Families Collection.
 *
 * Houses the collection of font families in a single array-object.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Typography\Font\Family;

use Tavern\Tools\Collection;

/**
 * Font families class.
 *
 * @since  2.0.0
 * @access public
 */
class Families extends Collection {

	/**
	 * Adds a new font family to the collection.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {
		parent::add( $name, new Family( $name, $value ) );
	}

	/**
	 * Returns an array of choices in key/value format for use with customize
	 * controls with the `choices` argument.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  array  $styles  Array of styles family must support.
	 * @return array
	 */
	public function customizeChoices( array $styles = [] ) {

		$choices = [
			'system' => [
				'label'   => __( 'System Fonts', 'tavern' ),
				'choices' => []
			],
			'google' => [
				'label'   => __( 'Google Fonts', 'tavern' ),
				'choices' => []
			]
		];

		foreach ( $this->all() as $family ) {

			if ( ! $styles || empty( array_diff( $styles, $family->styles() ) ) ) {

				$group = $family->isGoogleFont() ? 'google' : 'system';

				$choices[ $group ]['choices'][ $family->name() ] = $family->label();
			}
		}

		return $choices;
	}
}
