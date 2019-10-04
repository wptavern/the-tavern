<?php
/**
 * Image customize class.
 *
 * Adds customizer elements for the image component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Image;

use WP_Customize_Manager;
use Tavern\Customize\Controls;
use Tavern\Customize\Customizable;
use Tavern\Image\Filter\Filters;
use Tavern\Tools\Collection;
use Tavern\Tools\Mod;

/**
 * Image customize class.
 *
 * @since  2.1.0
 * @access public
 */
class Customize extends Customizable {

	/**
	 * Image filters object.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @var    Filter\Filters
	 */
	protected $filters;

	/**
	 * Registers customizer settings.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerSettings( WP_Customize_Manager $manager ) {

		// Image filter settings.
		$manager->add_setting( 'image_default_filter_function', [
			'default'           => 'grayscale',
			'sanitize_callback' => 'sanitize_key',
			'transport'         => 'postMessage'
		] );

		$manager->add_setting( 'image_default_filter_amount', [
			'default'           => Mod::fallback( 'image_default_filter_amount' ),
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage'
		] );

		$manager->add_setting( 'image_hover_filter_amount', [
			'default'           => Mod::fallback( 'image_hover_filter_amount' ),
			'sanitize_callback' => 'absint',
			'transport'         => 'postMessage'
		] );
	}

	/**
	 * Registers customizer controls.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerControls( WP_Customize_Manager $manager ) {

		// Image filter controls.
		$manager->add_control(
			new Controls\ImageFilter( $manager, 'image_filter', [
				'section'     => 'theme_global_media',
				'filters'     => $this->filters,
				'l10n'        => [
					'function' => [
						'label'       => __( 'Image Filter', 'tavern' ),
						'description' => __( 'CSS filter function to apply to images.', 'tavern' )
					],
					'default_amount' => [
						'label'       => __( 'Default Filter Amount', 'tavern' ),
						'description' => __( 'Filter amount applied to all images.', 'tavern' )
					],
					'hover_amount' => [
						'label'       => __( 'Hover Filter  Amount', 'tavern' ),
						'description' => __( 'Filter amount applied to linked images when they are hovered or focused.', 'tavern' )
					]
				],
				'settings'    => [
					'function'       => 'image_default_filter_function',
					'default_amount' => 'image_default_filter_amount',
					'hover_amount'   => 'image_hover_filter_amount'
				]
			] )
		);
	}

	/**
	* Registers JSON for the customize controls script via `wp_localize_script()`.
	*
	* @since  2.1.0
	* @access public
	* @param  Collection  $json
	* @return void
	*/
	public function controlsJson( Collection $json ) {

		$json->add( 'imageFilters', $this->filters );
	}
}
