<?php
/**
 * Font Family Component.
 *
 * Manages the font family component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Typography\Font\Family;

use WP_Customize_Manager;

use Hybrid\Contracts\Bootable;
use Tavern\Tools\Config;
use Tavern\Tools\CustomProperties;

/**
 * Font component class.
 *
 * @since  2.0.0
 * @access public
 */
class Component implements Bootable {

	/**
	 * Stores the font families object.
	 *
	 * @since  2.0.0
	 * @access protected
	 * @var    Families
	 */
	protected $families;

	/**
	 * Creates the component object.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  Families  $families
	 * @return void
	 */
	public function __construct( Families $families ) {
		$this->families = $families;
	}

	/**
	 * Bootstraps the component.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {

		// Run registration on `after_setup_theme`.
		add_action( 'after_setup_theme', [ $this, 'register' ] );

		// Register default families.
		add_action( 'tavern/typography/font/family/register', [ $this, 'registerDefaultFamilies' ] );
	}

	/**
	 * Runs the register actions.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		// Hook for registering custom fonts.
		do_action( 'tavern/typography/font/family/register', $this->families );

		// Back-compat hook for pre-2.0.0.
		do_action( 'tavern/font/family/register', $this->families );
	}

	/**
	 * Registers default families.
	 *
	 * @since  2.0.0
	 * @access public
	 * @param  Families  $families
	 * @return void
	 */
	public function registerDefaultFamilies( $families ) {

		foreach ( Config::get( 'font-families' ) as $name => $options ) {
			$families->add( $name, $options );
		}
	}
}
