<?php
/**
 * Asset-related functions and filters.
 *
 * This file holds some setup actions for scripts and styles as well as a helper
 * functions for work with assets.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern;

use Hybrid\App;
use Tavern\Tools\CustomProperties;
use Tavern\Settings\Options;

/**
 * Enqueue scripts/styles for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {

	// Disable core block styles.
	wp_dequeue_style( 'wp-block-library' );

	// Load WordPress' comment-reply script where appropriate.
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Enqueue theme scripts.
	wp_enqueue_script( 'tavern-app', asset( 'js/app.js' ), null, null, true );

	// Enqueue theme styles.
	wp_enqueue_style(
		'tavern-screen',
		asset( 'css/screen.css' ),
		null,
		null
	);

	wp_add_inline_style( 'tavern-screen', App::resolve( CustomProperties::class )->css() );

} );

/**
 * Unregisters the core block editor assets on the front end and admin.
 *
 * @link https://github.com/WordPress/gutenberg/issues/15007
 * @since  1.1.0
 * @access public
 * @return void
 */
add_action( 'enqueue_block_assets', function() {

	// Unregister core block and theme styles.
	wp_deregister_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library-theme' );

	// Re-register core block and theme styles with an empty string. This is
	// necessary to get styles set up correctly.
	wp_register_style( 'wp-block-library', '' );
	wp_register_style( 'wp-block-library-theme', '' );
} );

/**
 * Enqueue scripts/styles for the editor.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'enqueue_block_editor_assets', function() {

	$deps = [
		'wp-i18n',
		'wp-blocks',
		'wp-dom-ready',
		'wp-edit-post',
		'wp-element',
		'wp-token-list'
	];

	wp_enqueue_script( 'tavern-editor', asset( 'js/editor.js' ), $deps, null, true );

	// For now, we're adding translations via PHP. In the future, when our
	// tools catch up, we'll internationalize in the JS files.
	wp_localize_script( 'tavern-editor', 'tavernEditor', [
		'labels' => [
			'default'        => __( 'Default',         'tavern' ),
			'borderDouble'   => __( 'Double',          'tavern' ),
			'borderDashed'   => __( 'Dashed',          'tavern' ),
			'borderRadius'   => __( 'Border Radius',   'tavern' ),
			'designSettings' => __( 'Design Settings', 'tavern' ),
			'highlight'      => __( 'Highlight',       'tavern' ),
			'listType'       => __( 'Bullets',         'tavern' ),
			'none'           => __( 'None',            'tavern' ),
			'reverse'        => __( 'Reverse',         'tavern' ),
			'rounded'        => __( 'Rounded',         'tavern' ),
			'shadow'         => __( 'Shadow',          'tavern' ),

			// Lists.
			'lists' => [
				'disc'   => __( 'Disc',   'tavern' ),
				'circle' => __( 'Circle', 'tavern' ),
				'square' => __( 'Square', 'tavern' )
			],

			// Sizes.
			'sizes' => [
				'fine'       => __( 'Fine',        'tavern' ),
				'diminutive' => __( 'Diminutive',  'tavern' ),
				'tiny'       => __( 'Tiny',        'tavern' ),
				'small'      => __( 'Small',       'tavern' ),
				'medium'     => __( 'Medium',      'tavern' ),
				'large'      => __( 'Large',       'tavern' ),
				'extraLarge' => __( 'Extra Large', 'tavern' ),
				'huge'       => __( 'Huge',        'tavern' ),
				'gargantuan' => __( 'Gargantuan',  'tavern' ),
				'colossal'   => __( 'Colossal',    'tavern' )
			]
		]
	] );

	// Enqueue theme editor styles.
	wp_enqueue_style( 'tavern-editor', asset( 'css/editor.css' ), null, null );

	wp_add_inline_style( 'tavern-editor', App::resolve( CustomProperties::class )->css() );

} );

/**
 * Helper function for outputting an asset URL in the theme. This integrates
 * with Laravel Mix for handling cache busting. If used when you enqueue a script
 * or style, it'll append an ID to the filename.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $path  A relative path/file to append to the `public` folder.
 * @return string
 */
function asset( $path ) {

	// Get the Laravel Mix manifest.
	$manifest = App::resolve( 'tavern/mix' );

	// Make sure to trim any slashes from the front of the path.
	$path = '/' . ltrim( $path, '/' );

	if ( $manifest && isset( $manifest[ $path ] ) ) {
		$path = $manifest[ $path ];
	}

	return get_theme_file_uri( 'public' . $path );
}
