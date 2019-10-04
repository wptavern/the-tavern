<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Tools;

/**
 * Powered by class.
 *
 * @since  1.0.0
 * @access public
 */
class PoweredBy {

	/**
	 * Returns an array of all the powered by quotes.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public static function all() {

		return apply_filters( 'tavern/poweredby/collection', [
			__( 'Powered by heart and soul.', 'tavern' ),
			__( 'Powered by crazy ideas and passion.', 'tavern' ),
			__( 'Powered by the thing that holds all things together in the universe.', 'tavern' ),
			__( 'Powered by love.', 'tavern' ),
			__( 'Powered by the vast and endless void.', 'tavern' ),
			__( 'Powered by the code of a maniac.', 'tavern' ),
			__( 'Powered by peace and understanding.', 'tavern' ),
			__( 'Powered by coffee.', 'tavern' ),
			__( 'Powered by sleepness nights.', 'tavern' ),
			__( 'Powered by the love of all things.', 'tavern' ),
			__( 'Powered by something greater than myself.', 'tavern' )
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public static function display() {
		echo esc_html( static::render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public static function render() {
		$collection = static::all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}
