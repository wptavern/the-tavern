<?php
/**
 * Image Filters Config.
 *
 * Defines the image filters available for users with the image filter feature
 * in the customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [
	'none' => [
		'label' => __( 'None', 'tavern' )
	],
	'brightness' => [
		'label'   => __( 'Brightness', 'tavern' ),
		'min'     => 0,
		'max'     => 200,
		'lacuna'  => 100
	],
	'contrast' => [
		'label'  => __( 'Contrast', 'tavern' ),
		'min'    => 0,
		'max'    => 200,
		'lacuna' => 100
	],
	'grayscale' => [
		'label'  => __( 'Grayscale', 'tavern' ),
		'min'    => 0,
		'max'    => 100,
		'lacuna' => 0
	],
	'invert' => [
		'label'  => __( 'Invert', 'tavern' ),
		'min'    => 0,
		'max'    => 100,
		'lacuna' => 0
	],
	'opacity' => [
		'label'  => __( 'Opacity', 'tavern' ),
		'min'    => 0,
		'max'    => 100,
		'lacuna' => 100
	],
	'saturate' => [
		'label'  => __( 'Saturate', 'tavern' ),
		'min'    => 0,
		'max'    => 200,
		'lacuna' => 100
	],
	'sepia' => [
		'label'  => __( 'Sepia', 'tavern' ),
		'min'    => 0,
		'max'    => 100,
		'lacuna' => 0
	]
];
