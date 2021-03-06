<?php
/**
 * Background customize class.
 *
 * Adds customizer elements for the background component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Background;

use WP_Customize_Manager;
use WP_Customize_Color_Control;
use WP_Customize_Image_Control;
use Tavern\Customize\Customizable;
use Tavern\Customize\Controls\BackgroundPosition;
use Tavern\Customize\Controls\BackgroundSvg;
use Tavern\Tools\Collection;
use Tavern\Tools\Mod;

/**
 * Background customize class.
 *
 * @since  2.2.0
 * @access public
 */
class Customize extends Customizable {

	/**
	 * Houses the collection of patterns.
	 *
	 * @since  2.2.0
	 * @access protected
	 * @var    Pattern\Patterns
	 */
	protected $patterns;

	/**
	 * Registers customizer settings.
	 *
	 * @since  2.2.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerSettings( WP_Customize_Manager $manager ) {

		array_map( function( $section ) use ( $manager ) {

			$manager->add_setting( "{$section}_background_type", [
				'default'              => Mod::fallback( "{$section}_background_type" ),
				'transport'            => 'postMessage',
				'sanitize_callback'    => function( $value ) {
					return in_array( $value, [ 'image', 'svg' ] ) ? $value : '';
				}
			] );

			$manager->add_setting( "color_{$section}_background_fill", [
				'default'              => maybe_hash_hex_color( Mod::fallback( "color_{$section}_background_fill" ) ),
				'sanitize_callback'    => 'sanitize_hex_color_no_hash',
				'sanitize_js_callback' => 'maybe_hash_hex_color',
				'transport'            => 'postMessage'
			] );

			$manager->add_setting( "{$section}_background_fill_opacity", [
				'default'              => Mod::fallback( "{$section}_background_fill_opacity" ),
				'sanitize_callback'    => 'sanitize_text_field',
				'transport'            => 'postMessage'
			] );

			$manager->add_setting( "{$section}_background_svg", [
				'default'              => Mod::fallback( "{$section}_background_svg" ),
				'sanitize_callback'    => 'sanitize_key',
				'transport'            => 'postMessage'
			] );

			$manager->add_setting( "{$section}_background_image", [
				'default'              => Mod::fallback( "{$section}_background_image" ),
			//	'sanitize_callback'    => 'esc_url_raw',
				'transport'            => 'postMessage'
			] );

			$manager->add_setting( "{$section}_background_attachment", [
				'default'              => Mod::fallback( "{$section}_background_attachment" ),
				'transport'            => 'postMessage',
				'sanitize_callback'    => function( $value ) {

					$attachments = [
						'scroll',
						'fixed',
						'local'
					];

					return in_array( $value, $attachments ) ? $value : 'scroll';
				}
			] );

			$manager->add_setting( "{$section}_background_position", [
				'default'              => Mod::fallback( "{$section}_background_position" ),
				'transport'            => 'postMessage',
				'sanitize_callback'    => function( $value ) {

					$positions = [
						'bottom',
						'center',
						'left',
						'left-bottom',
						'left-top',
						'right',
						'right-bottom',
						'right-top',
						'top'
					];

					return in_array( $value, $positions ) ? $value : 'top';
				}
			] );

			$manager->add_setting( "{$section}_background_size", [
				'default'              => Mod::fallback( "{$section}_background_size" ),
				'transport'            => 'postMessage',
				'sanitize_callback'    => function( $value ) {

					$sizes = [
						'auto',
						'cover',
						'container'
					];

					return in_array( $value, $sizes ) ? $value : 'auto';
				}
			] );

			$manager->add_setting( "{$section}_background_repeat", [
				'default'              => Mod::fallback( "{$section}_background_repeat" ),
				'transport'            => 'postMessage',
				'sanitize_callback'    => function( $value ) {

					$repeats = [
						'no-repeat',
						'repeat',
						'repeat-x',
						'repeat-y'
					];

					return in_array( $value, $repeats ) ? $value : 'top';
				}
			] );

		}, [ 'body', 'header', 'content', 'footer', 'sidebar_footer' ] );
	}

	/**
	 * Registers customizer controls.
	 *
	 * @since  2.2.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerControls( WP_Customize_Manager $manager ) {

		array_map( function( $section ) use ( $manager ) {

			$manager->add_control( "{$section}_background_type", [
				'section'  => "theme_{$section}_background",
				'label'    => __( 'Background Type', 'tavern' ),
				'priority' => 25,
				'type'     => 'select',
				'choices'  => [
					''      => __( 'None',    'tavern' ),
					'image' => __( 'Image',   'tavern' ),
					'svg'   => __( 'Pattern', 'tavern' )
				]
			] );

			$manager->add_control(
				new WP_Customize_Color_Control( $manager, "color_{$section}_background_fill", [
					'section'         => "theme_{$section}_background",
					'label'           => __( 'Foreground Color', 'tavern' ),
					'priority'        => 25,
					'active_callback' => function() use ( $section ) {
						return 'svg' === Mod::get( "{$section}_background_type" );
					}
				] )
			);

			$manager->add_control( "{$section}_background_fill_opacity", [
				'section'     => "theme_{$section}_background",
				'label'       => __( 'Foreground Opacity', 'tavern' ),
				'priority'    => 25,
				'type'        => 'number',
				'input_attrs' => [
					'min' => '0.1',
					'max' => '1',
					'step' => '0.1'
				],
				'active_callback' => function() use ( $section ) {
					return 'svg' === Mod::get( "{$section}_background_type" );
				}
			] );

			$choices = [];

			foreach ( $this->patterns as $pattern ) {
				$choices[ $pattern->name() ] = [
					'label'    => $pattern->label(),
					'cssValue' => $pattern->cssValue(
						maybe_hash_hex_color( Mod::get( "color_{$section}_background_fill" ) ),
						Mod::get( "{$section}_background_fill_opacity" )
					)
				];
			}

			$manager->add_control(
				new BackgroundSvg( $manager, "{$section}_background_svg", [
					'section'         => "theme_{$section}_background",
					'label'           => __( 'Background Pattern', 'tavern' ),
					'choices'         => $choices,
					'background'      => Mod::color( "{$section}-background" ),
					'priority'        => 25,
					'active_callback' => function() use ( $section ) {
						return 'svg' === Mod::get( "{$section}_background_type" );
					}
				] )
			);

			$manager->add_control(
				new WP_Customize_Image_Control( $manager, "{$section}_background_image", [
					'section'         => "theme_{$section}_background",
					'label'           => __( 'Background Image', 'tavern' ),
					'priority'        => 25,
					'active_callback' => function() use ( $section ) {
						return 'image' === Mod::get( "{$section}_background_type" );
					}
				] )
			);

			$manager->add_control( "{$section}_background_attachment", [
				'section'  => "theme_{$section}_background",
				'label'    => __( 'Background Attachment', 'tavern' ),
				'priority' => 30,
				'type'     => 'select',
				'choices'  => [
					'scroll'    => __( 'Scroll', 'tavern' ),
					'fixed'     => __( 'Fixed',  'tavern' ),
				//	'local'     => __( 'Local',  'tavern' )
				],
				'active_callback' => function() use ( $section ) {
					return ( 'svg' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_svg" ) ) ||
					       ( 'image' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_image" ) );
				}
			] );

			$manager->add_control( "{$section}_background_size", [
				'section'  => "theme_{$section}_background",
				'label'    => __( 'Background Size', 'tavern' ),
				'priority' => 30,
				'type'     => 'select',
				'choices'  => [
					'auto'    => __( 'Auto',    'tavern' ),
					'cover'   => __( 'Cover',   'tavern' ),
					'contain' => __( 'Contain', 'tavern' )
				],
				'active_callback' => function() use ( $section ) {
					return ( 'svg' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_svg" ) ) ||
					       ( 'image' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_image" ) );
				}
			] );

			$manager->add_control( "{$section}_background_repeat", [
				'section'  => "theme_{$section}_background",
				'label'    => __( 'Background Repeat', 'tavern' ),
				'priority' => 30,
				'type'     => 'select',
				'choices'  => [
					'no-repeat' => __( 'No Repeat',           'tavern' ),
					'repeat'    => __( 'Repeat',              'tavern' ),
					'repeat-x'  => __( 'Repeat Horizontally', 'tavern' ),
					'repeat-y'  => __( 'Repeat Vertically',   'tavern' )
				],
				'active_callback' => function() use ( $section ) {
					return ( 'svg' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_svg" ) ) ||
					       ( 'image' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_image" ) );
				}
			] );

			$manager->add_control(
				new BackgroundPosition( $manager, "{$section}_background_position", [
					'section'         => "theme_{$section}_background",
					'label'           => __( 'Background Position', 'tavern' ),
					'background'      => Mod::get( "{$section}_background_position" ),
					'priority'        => 30,
					'active_callback' => function() use ( $section ) {
						return ( 'svg' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_svg" ) ) ||
						       ( 'image' === Mod::get( "{$section}_background_type" ) && Mod::get( "{$section}_background_image" ) );
					}
				] )
			);

		}, [ 'body', 'header', 'content', 'footer', 'sidebar_footer' ] );
	}

	/**
	* Registers JSON for the customize controls script via `wp_localize_script()`.
	*
	* @since  2.2.0
	* @access public
	* @param  Collection  $json
	* @return void
	*/
	public function controlsJson( Collection $json ) {

		$json->add( 'backgroundPatterns', $this->patterns );
	}

	/**
	* Registers JSON for the customize preview script via `wp_localize_script()`.
	*
	* @since  2.2.0
	* @access public
	* @param  Collection  $json
	* @return void
	*/
	public function previewJson( Collection $json ) {

		$json->add( 'backgroundPatterns', $this->patterns );
	}
}
