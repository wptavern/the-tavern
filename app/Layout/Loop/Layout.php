<?php
/**
 * Loop Layout.
 *
 * Creates a layout object for the loop content area.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Layout\Loop;

use Tavern\Layout\Layout as Base;

/**
 * Loop layout class.
 *
 * @since  2.1.0
 * @access public
 */
class Layout extends Base {

	/**
	 * Array of image sizes this layout supports for its featured images.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @var    array
	 */
	protected $image_sizes = [];

	/**
	 * Whether the layout supports columns.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @var    bool
	 */
	protected $supports_columns = false;

	/**
	 * Whether the layout supports width options.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @var    bool
	 */
	protected $supports_width = false;

	/**
	 * Whether the layout requires a featured image.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @var    bool
	 */
	protected $requires_image = false;

	/**
	 * Returns a JSON-ready array of only the properties we'll need for use
	 * in the customize-preview JS.
	 *
	 * @since  2.1.0
	 * @access public
	 * @return array
	 */
	public function jsonSerialize() {

		$json = parent::jsonSerialize();

		$json['imageSizes']      = $this->imageSizes();
		$json['supportsColumns'] = $this->supportsColumns();
		$json['supportsWidth']   = $this->supportsWidth();

		return $json;
	}

	/**
	 * Returns array of supported featured image sizes.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @return array
	 */
	public function imageSizes() {
		return (array) $this->image_sizes;
	}

	/**
	 * Whether the layout supports columns.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @return bool
	 */
	public function supportsColumns() {
		return (bool) $this->supports_columns;
	}

	/**
	 * Whether the layout supports width options.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @return bool
	 */
	public function supportsWidth() {
		return (bool) $this->supports_width;
	}

	/**
	 * Whether the layout requires a featured image.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @return bool
	 */
	public function requiresImage() {
		return (bool) $this->requires_image;
	}
}
