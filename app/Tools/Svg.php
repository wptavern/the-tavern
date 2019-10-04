<?php
/**
 * SVG class.
 *
 * A simple class for returning or outputting an SVG file.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Tools;

/**
 * SVG class.
 *
 * @since  1.0.0
 * @access public
 */
class Svg {

	/**
	 * Returns the SVG file contents.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @return string
	 */
	public static function render( $name ) {

		$svg = file_get_contents( static::path( "{$name}.svg" ) );

		return apply_filters( "tavern/svg/{$name}", $svg ?: '' );
	}

	/**
	 * Displays the SVG.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @return void
	 */
	public static function display( $name ) {
		echo static::render( $name );
	}

	/**
	 * Returns the path to the SVG folder or file if set.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public static function path( $file = '' ) {

		$file = trim( $file, '/' );

		return get_theme_file_path( $file ? "public/svg/{$file}" : 'public/svg' );
	}
}
