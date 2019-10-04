<?php
/**
 * Color Service Provider.
 *
 * Bootstraps the color component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Color;

use Hybrid\Tools\ServiceProvider;
use Tavern\Tools\CustomProperties;

/**
 * Color service provider class.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds color component to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( Setting\Settings::class );

		$this->app->singleton( Setting\Component::class, function() {
			return new Setting\Component(
				$this->app->resolve( Setting\Settings::class  ),
				$this->app->resolve( CustomProperties::class  )
			);
		} );

		$this->app->singleton( Customize::class, function() {
			return new Customize( [
				'settings' => $this->app->resolve( Setting\Settings::class )
			] );
		} );

		$this->app->alias( Setting\Settings::class, 'color/settings' );
	}

	/**
	 * Bootstrap the color component.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {
		$this->app->resolve( Setting\Component::class )->boot();
	}
}
