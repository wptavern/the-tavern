<?php
/**
 * Font Service Provider.
 *
 * Bootstraps the font components.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Editor;

use Hybrid\Tools\ServiceProvider;
use Tavern\Tools\CustomProperties;
use Tavern\Editor\Color;
use Tavern\Editor\Font;

/**
 * Font service provider class.
 *
 * @since  2.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds font components to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		// Editor colors.
		$this->app->singleton( Color\Colors::class );

		$this->app->singleton( Color\Component::class, function() {
			return new Color\Component(
				$this->app->resolve( Color\Colors::class ),
				$this->app->resolve( CustomProperties::class )
			);
		} );

		// Editor fonts.
		$this->app->singleton( Font\Size\Sizes::class );

		$this->app->singleton( Font\Size\Component::class, function() {
			return new Font\Size\Component(
				$this->app->resolve( Font\Size\Sizes::class  )
			);
		} );
	}

	/**
	 * Bootstrap the font family component.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {
		$this->app->resolve( Color\Component::class     )->boot();
		$this->app->resolve( Font\Size\Component::class )->boot();
	}
}
