<?php
/**
 * Gallery service provider.
 *
 * Bootstraps the Gallery component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Gallery;

use Hybrid\Tools\ServiceProvider;

/**
 * Gallery service provider class.
 *
 * @since  2.1.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds components to the container.
	 *
	 * @since  2.1.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( Classic::class );
	}

	/**
	 * Bootstrap components.
	 *
	 * @since  2.1.0
	 * @access public
	 * @return void
	 */
	public function boot() {
		$this->app->resolve( Classic::class )->boot();
	}
}
