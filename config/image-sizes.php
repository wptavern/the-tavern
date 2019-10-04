<?php
/**
 * Image Sizes Config.
 *
 * Defines the image sizes that the theme sets.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [

	// Landscape sizes.
	'post-thumbnail' => [
		'label'            => __( 'Landscape: Thumbnail', 'tavern' ),
		'width'            => 178,
		'height'           => 100,
		'is_featured_size' => false
	],
	'tavern-landscape-medium' => [
		'label'  => __( 'Landscape: Medium', 'tavern' ),
		'width'  => 640,
		'height' => 360
	],
	'tavern-landscape-large' => [
		'label'  => __( 'Landscape: Large', 'tavern' ),
		'width'  => 896,
		'height' => 504
	],
	'tavern-landscape-extra-large' => [
		'label'  => __( 'Landscape: Extra Large', 'tavern' ),
		'width'  => 1366,
		'height' => 768
	],
	'tavern-landscape-huge' => [
		'label'  => __( 'Landscape: Huge', 'tavern' ),
		'width'  => 1920,
		'height' => 1080
	],

	// Portrait Sizes.
	'tavern-portrait-small' => [
		'label'  => __( 'Portrait: Small', 'tavern' ),
		'width'  => 320,
		'height' => 426
	],

	'tavern-portrait-medium' => [
		'label'  => __( 'Portrait: Medium', 'tavern' ),
		'width'  => 640,
		'height' => 853
	],

	// Square Sizes.
	'tavern-square-small' => [
		'label'  => __( 'Square: Small', 'tavern' ),
		'width'  => 320,
		'height' => 320
	],

	'tavern-square-medium' => [
		'label'  => __( 'Square: Medium', 'tavern' ),
		'width'  => 640,
		'height' => 640
	]

];
