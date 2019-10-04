<?php
/**
 * Customize service provider.
 *
 * Bootstraps the customize component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Customize;

use Hybrid\Tools\Collection;
use Hybrid\Tools\ServiceProvider;

use Tavern\Background;
use Tavern\Color;
use Tavern\Image;
use Tavern\Layout;
use Tavern\Footer;
use Tavern\Typography;

/**
 * Customize service provider.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds customize component to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		$this->app->singleton( Component::class, function() {
			return new Component( [
				Background\Customize::class,
				Color\Customize::class,
				Image\Customize::class,
				Layout\Customize::class,
				Footer\Customize::class,
				Typography\Customize::class
			] );
		} );
	}

	/**
	 * Bootstrap the customize component.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {
		$this->app->resolve( Component::class )->boot();
	}
}
