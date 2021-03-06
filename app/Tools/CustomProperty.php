<?php
/**
 * CSS Custom Property.
 *
 * Interface for defining an object to be used as a CSS custom property.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Tools;

use Closure;
use Tavern\Contracts\CssCustomProperty;

/**
 * CSS custom property interface.
 *
 * @since  2.0.0
 * @access public
 */
class CustomProperty implements CssCustomProperty {

	protected $selector = '';
	protected $property = '';
	protected $value = '';

	public function __construct( $selector, $property, $value ) {
		$this->selector = $selector;
		$this->property = $property;
		$this->value    = $value;
	}

	/**
	 * Returns a valid CSS selector for the property.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return string
	 */
	public function cssSelector() {
		return $this->selector;
	}

	/**
	 * Returns the CSS property.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return string
	 */
	public function cssProperty() {
		return $this->property;
	}

	/**
	 * Returns the CSS property value.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return string
	 */
	public function cssValue() {

		return $this->value instanceof Closure
		       ? $this->value->__invoke()
		       : $this->value;
	}
}
