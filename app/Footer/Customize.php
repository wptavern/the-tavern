<?php
/**
 * Footer customize class.
 *
 * Adds customizer elements for the footer component.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Footer;

use WP_Customize_Manager;
use Tavern\Customize\Customizable;
use Tavern\Tools\Mod;

use Tavern\Template\Footer as TemplateFooter;

/**
 * Footer customize class.
 *
 * @since  2.1.0
 * @access public
 */
class Customize extends Customizable {

	/**
	 * Registers customizer settings.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerSettings( WP_Customize_Manager $manager ) {

		// Register sidebar footer settings.
		$manager->add_setting( 'sidebar_footer_width', [
			'default'           => Mod::fallback( 'sidebar_footer_width' ),
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sanitize_key'
		] );

		// Register footer settings.
		$manager->add_setting( 'powered_by', [
			'default'           => Mod::fallback( 'powered_by' ),
			'sanitize_callback' => 'wp_validate_boolean',
			'transport'         => 'postMessage'
		] );

		$manager->add_setting( 'footer_credit', [
			// Translators: %s is the theme link.
			'default'           => Mod::fallback( 'footer_credit' ),
			'sanitize_callback' => function( $value ) {
				return wp_kses( $value, TemplateFooter::allowedTags() );
			},
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

		// Sidebar width control.
		$manager->add_control( 'sidebar_footer_width', [
			'section' => 'theme_footer_sidebar',
			'type'    => 'select',
			'label'   => __( 'Footer Sidebar: Width', 'tavern' ),
			'choices' => [
				'2xl'       => __( 'Medium',      'tavern' ),
				'3xl'       => __( 'Large',       'tavern' ),
				'4xl'       => __( 'Extra Large', 'tavern' ),
				'5xl'       => __( 'Huge',        'tavern' ),
				'6xl'       => __( 'Gargantuan',  'tavern' ),
				'7xl'       => __( 'Titanic',     'tavern' ),
				'full'      => __( 'Full',        'tavern' )
			]
		] );

		// Powered by control.
		$manager->add_control( 'powered_by', [
			'section'  => 'theme_footer_credit',
			'type'     => 'checkbox',
			'label'    => __( 'Show random "powered by" credit text.', 'tavern' )
		] );

		// Footer credit control.
		$manager->add_control( 'footer_credit', [
			'section'         => 'theme_footer_credit',
			'type'            => 'textarea',
			'label'           => __( 'Custom Footer Text', 'tavern' ),
			'active_callback' => function( $control ) {
				return ! $control->manager->get_setting( 'powered_by' )->value();
			}
		] );
	}

	/**
	 * Registers customizer partials.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerPartials( WP_Customize_Manager $manager ) {

		// Footer credit partial.
		$manager->selective_refresh->add_partial( 'powered_by', [
			'selector'            => '.app-footer__credit',
			'container_inclusive' => true,
			'settings'            => [ 'powered_by', 'footer_credit' ],
			'render_callback'     => function() {
				return TemplateFooter::renderCredit();
			}
		] );
	}
}
