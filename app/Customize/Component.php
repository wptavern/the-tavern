<?php
/**
 * Customize component.
 *
 * Integrates the theme's settings into the customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern\Customize;

use WP_Customize_Manager;
use Tavern\Tools\Collection;
use Hybrid\App;
use Hybrid\Contracts\Bootable;

use function Tavern\asset;

/**
 * Handles setting up everything we need for the customizer.
 *
 * @link   https://developer.wordpress.org/themes/customize-api
 * @since  1.0.0
 * @access public
 */
class Component implements Bootable {

	/**
	 * Array of `Customizable` components bound to the container.
	 *
	 * @since  2.1.0
	 * @access protected
	 * @var    array
	 */
	protected $components = [];

	/**
	 * Sets up initial object properties.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  array  $components  Array `Customizable` component names.
	 * @return void
	 */
	public function __construct( array $components = [] ) {
		$this->components = $components;
	}

	/**
	 * Adds actions on the appropriate customize action hooks.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {

		// Register panels, sections, settings, controls, and partials.
		array_map( function( $callback ) {
			add_action( 'customize_register', [ $this, $callback ] );
		}, [
			'registerPanels',
			'registerSections',
			'registerSettings',
			'registerControls',
			'registerPartials'
		] );

		// Enqueue scripts and styles.
		add_action( 'customize_controls_enqueue_scripts', [ $this, 'controlsEnqueue'] );
		add_action( 'customize_preview_init',             [ $this, 'previewEnqueue' ] );
	}

	/**
	 * Callback for registering panels.
	 *
	 * @link   https://developer.wordpress.org/themes/customize-api/customizer-objects/#panels
	 * @since  1.0.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager  Instance of the customize manager.
	 * @return void
	 */
	public function registerPanels( WP_Customize_Manager $manager ) {

		$panels = [
			'theme_global'  => __( 'Theme: Global',  'tavern' ),
			'theme_header'  => __( 'Theme: Header',  'tavern' ),
			'theme_content' => __( 'Theme: Content', 'tavern' ),
			'theme_footer'  => __( 'Theme: Footer',  'tavern' )
		];

		foreach ( $panels as $panel => $label ) {
			$manager->add_panel( $panel, [
				'title'    => $label,
				'priority' => 100
			] );
		}

		// Register component panels.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->registerPanels( $manager );
		}
	}

	/**
	 * Callback for registering sections.
	 *
	 * @link   https://developer.wordpress.org/themes/customize-api/customizer-objects/#sections
	 * @since  1.0.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager  Instance of the customize manager.
	 * @return void
	 */
	public function registerSections( WP_Customize_Manager $manager ) {

		// -------------------------------------------------------------
		// Global sections.
		// -------------------------------------------------------------

		$manager->add_section( 'theme_global_layout', [
			'panel'    => 'theme_global',
			'title'    => __( 'Layout', 'tavern' ),
			'priority' => 5
		] );

		$manager->add_section( 'theme_global_typography', [
			'panel'    => 'theme_global',
			'title'    => __( 'Typography', 'tavern' ),
			'priority' => 10
		] );

		$manager->add_section( 'theme_global_colors', [
			'panel'    => 'theme_global',
			'title'    => __( 'Colors', 'tavern' ),
			'priority' => 15
		] );

		$manager->add_section( 'theme_body_background', [
			'panel'     => 'theme_global',
			'title'     => __( 'Background', 'tavern' ),
			'priority'  => 15
		] );

		$manager->add_section( 'theme_global_media', [
			'panel'    => 'theme_global',
			'title'    => __( 'Media', 'tavern' ),
			'priority' => 25
		] );

		// Move the additional CSS section.
		$custom_css        = $manager->get_section( 'custom_css' );
		$custom_css->panel = 'theme_global';

		// -------------------------------------------------------------
		// Header sections.
		// -------------------------------------------------------------

		$manager->add_section( 'theme_header_layout', [
			'panel'    => 'theme_header',
			'title'    => __( 'Layout', 'tavern' ),
			'priority' => 5
		] );

		$manager->add_section( 'theme_header_colors', [
			'panel'    => 'theme_header',
			'title'    => __( 'Colors', 'tavern' ),
			'priority' => 15
		] );

		$manager->add_section( 'theme_header_background', [
			'panel'     => 'theme_header',
			'title'     => __( 'Background', 'tavern' ),
			'priority'  => 15
		] );

		// Customize the title/tagline section.
		$title_tagline           = $manager->get_section( 'title_tagline' );
		$title_tagline->panel    = 'theme_header';
		$title_tagline->title    = __( 'Branding', 'tavern' );
		$title_tagline->priority = 20;

		// -------------------------------------------------------------
		// Content sections.
		// -------------------------------------------------------------

		$manager->add_section( 'theme_content_colors', [
			'panel'    => 'theme_content',
			'title'    => __( 'Colors', 'tavern' ),
			'priority' => 15
		] );

		$manager->add_section( 'theme_content_background', [
			'panel'     => 'theme_content',
			'title'     => __( 'Background', 'tavern' ),
			'priority'  => 15
		] );

		// Customize the static front page section.
		$static_front           = $manager->get_section( 'static_front_page' );
		$static_front->panel    = 'theme_content';
		$static_front->priority = 20;

		// -------------------------------------------------------------
		// Footer sections.
		// -------------------------------------------------------------

		$manager->add_section( 'theme_footer_colors', [
			'panel'    => 'theme_footer',
			'title'    => __( 'Colors', 'tavern' ),
			'priority' => 15
		] );

		$manager->add_section( 'theme_footer_background', [
			'panel'     => 'theme_footer',
			'title'     => __( 'Background: Footer', 'tavern' ),
			'priority'  => 15
		] );

		$manager->add_section( 'theme_sidebar_footer_background', [
			'panel'     => 'theme_footer',
			'title'     => __( 'Background: Sidebar', 'tavern' ),
			'priority'  => 15
		] );

		$manager->add_section( 'theme_footer_sidebar', [
			'panel'    => 'theme_footer',
			'title'    => __( 'Sidebar', 'tavern' ),
			'description' => sprintf(
				'<a class="button button-secondary" href="javascript:wp.customize.panel( \'widgets\' ).focus();">%s</a>',
				__( 'Add Footer Widgets &rarr;', 'tavern' )
			),
			'priority' => 20
		] );

		$manager->add_section( 'theme_footer_credit', [
			'panel'    => 'theme_footer',
			'title'    => __( 'Credit', 'tavern' ),
			'priority' => 25
		] );

		// -------------------------------------------------------------
		// Component sections.
		// -------------------------------------------------------------

		foreach ( $this->components as $component ) {
			App::resolve( $component )->registerSections( $manager );
		}
	}

	/**
	 * Callback for registering settings.
	 *
	 * @link   https://developer.wordpress.org/themes/customize-api/customizer-objects/#settings
	 * @since  1.0.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager  Instance of the customize manager.
	 * @return void
	 */
	public function registerSettings( WP_Customize_Manager $manager ) {

		// Update the `transform` property of core WP settings.
		$settings = [
			$manager->get_setting( 'blogname' ),
			$manager->get_setting( 'blogdescription' )
		];

		array_walk( $settings, function( &$setting ) {
			$setting->transport = 'postMessage';
		} );

		// Register component settings.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->registerSettings( $manager );
		}

		$manager->add_setting( 'header_sticky', [
			'default'           => \Tavern\Tools\Mod::fallback( 'header_sticky' ),
			'sanitize_callback' => 'wp_validate_boolean',
			'transport'         => 'postMessage'
		] );

		$manager->add_setting( 'branding_sep', [
			'default'           => \Tavern\Tools\Mod::fallback( 'branding_sep' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'postMessage'
		] );
	}

	/**
	 * Callback for registering controls.
	 *
	 * @link   https://developer.wordpress.org/themes/customize-api/customizer-objects/#controls
	 * @since  1.0.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager  Instance of the customize manager.
	 * @return void
	 */
	public function registerControls( WP_Customize_Manager $manager ) {

		// Register JS control types.
		$manager->register_control_type( Controls\BackgroundPosition::class );
		$manager->register_control_type( Controls\BackgroundSvg::class      );
		$manager->register_control_type( Controls\ImageFilter::class        );
		$manager->register_control_type( Controls\Typography::class         );

		// Change background color control labels.
		$bg_color              = $manager->get_control( 'background_color' );
		$bg_color->label       = __( 'Background', 'tavern' );
		$bg_color->description = __( 'Background color used for the site.', 'tavern' );

		// Register component controls.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->registerControls( $manager );
		}

		// Sticky header control.
		$manager->add_control( 'header_sticky', [
			'section'     => 'theme_header_layout',
			'type'        => 'checkbox',
			'label'       => __( 'Always stick header to top of screen?', 'tavern' ),
			'description' => __( 'Note: Header is sticky on mobile by default.', 'tavern' )
		] );

		$choices  = [ '' => '' ];

		foreach ( \Tavern\Tools\Config::get( 'character-entities' ) as $entity ) {
			$choices[ $entity ] = esc_html( $entity );
		}

		// Branding separator control.
		$manager->add_control( 'branding_sep', [
			'section'     => 'title_tagline',
			'type'        => 'select',
			'label'       => __( 'Separator', 'tavern' ),
			'description' => __( 'Character used as a separator between the title and tagline.', 'tavern' ),
			'choices'     => $choices
		] );
	}

	/**
	 * Callback for registering partials.
	 *
	 * @link   https://developer.wordpress.org/themes/customize-api/tools-for-improved-user-experience/#selective-refresh-fast-accurate-updates
	 * @since  1.0.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager  Instance of the customize manager.
	 * @return void
	 */
	public function registerPartials( WP_Customize_Manager $manager ) {

		// If the selective refresh component is not available, bail.
		if ( ! isset( $manager->selective_refresh ) ) {
			return;
		}

		// Selectively refreshes the title in the header.
		$manager->selective_refresh->add_partial( 'blogname', [
			'selector'        => '.app-header__title-link',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			}
		] );

		// Selectively refreshes the tagline in the header.
		$manager->selective_refresh->add_partial( 'blogdescription', [
			'selector'        => '.app-header__description',
			'render_callback' => function() {
				return get_bloginfo( 'description', 'display' );
			}
		] );

		// Register component partials.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->registerPartials( $manager );
		}
	}

	/**
	 * Register or enqueue scripts/styles for the controls that are output
	 * in the controls frame.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function controlsEnqueue() {

		// Enqueue controls style.
		wp_enqueue_style(
			'tavern-customize-controls',
			asset( 'css/customize-controls.css' ),
			[],
			null
		);

		// Enqueue controls script.
		wp_enqueue_script(
			'tavern-customize-controls',
			asset( 'js/customize-controls.js' ),
			[ 'customize-controls' ],
			null,
			true
		);

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component controls JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->controlsJson( $json );
		}

		// Pass JSON to the controls script.
		wp_localize_script(
			'tavern-customize-controls',
			'tavernCustomizeControls',
			$json
		);
	}

	/**
	 * Register or enqueue scripts/styles for the live preview frame.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function previewEnqueue() {

		// Enqueue preview style.
		wp_enqueue_style(
			'tavern-customize-preview',
			asset( 'css/customize-preview.css' ),
			[],
			null
		);

		// Enqueue preview script.
		wp_enqueue_script(
			'tavern-customize-preview',
			asset( 'js/customize-preview.js' ),
			[ 'customize-preview' ],
			null,
			true
		);

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component preview JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->previewJson( $json );
		}

		// Pass JSON to the preview script.
		wp_localize_script(
			'tavern-customize-preview',
			'tavernCustomizePreview',
			$json
		);
	}
}
