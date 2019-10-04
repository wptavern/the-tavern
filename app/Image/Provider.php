<?php
/**
 * Image Service Provider.
 *
 * Bootstraps the image component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Image;

use Hybrid\Tools\ServiceProvider;
use Tavern\Tools\CustomProperties;

/**
 * Image service provider class.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds image component to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( Filter\Filters::class );
		$this->app->singleton( Size\Sizes::class   );

		$this->app->singleton( Filter\Component::class, function() {
			return new Filter\Component(
				$this->app->resolve( Filter\Filters::class   ),
				$this->app->resolve( CustomProperties::class )
			);
		} );

		$this->app->singleton( Size\Component::class, function() {
			return new Size\Component(
				$this->app->resolve( Size\Sizes::class )
			);
		} );

		$this->app->singleton( Customize::class, function() {
			return new Customize( [
				'filters' => $this->app->resolve( Filter\Filters::class )
			] );
		} );

		$this->app->alias( Filter\Filters::class, 'image/filters' );
		$this->app->alias( Size\Sizes::class,     'image/sizes'   );
	}

	/**
	 * Bootstrap the image size component.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {
		$this->app->resolve( Filter\Component::class )->boot();
		$this->app->resolve( Size\Component::class   )->boot();
	}
}
