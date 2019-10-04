<?php
/**
 * Settings Provider.
 *
 * Bootstraps the settings component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Settings;

use Hybrid\Tools\ServiceProvider;
use Tavern\Settings\Admin\OptionsPage;
use Tavern\Settings\Admin\Views\Views;

/**
 * Settings provider class.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds settings component to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		$this->app->singleton( Views::class );

		$this->app->singleton( OptionsPage::class, function() {

			return new OptionsPage(
				'tavern-settings',
				$this->app->resolve( Views::class ),
				[
					'label'      => __( 'Tavern Settings', 'tavern' ),
					'capability' => 'edit_theme_options'
				]
			);
		} );
	}

	/**
	 * Bootstrap the settings component.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {

		if ( is_admin() ) {
			$this->app->resolve( OptionsPage::class )->boot();
		}
	}
}
