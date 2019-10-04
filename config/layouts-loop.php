<?php
/**
 * Loop Layouts Config.
 *
 * Configuration for the theme's loop layouts.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [
	'blog' => [
		'label'       => __( 'Blog', 'tavern' ),
		'image_sizes' => [
			'tavern-landscape-medium',
			'tavern-landscape-large',
			'tavern-landscape-extra-large',
			'tavern-landscape-huge',
			'tavern-square-medium'
		]
	],
	'grid' => [
		'label'            => __( 'Grid', 'tavern' ),
		'supports_columns' => true,
		'supports_width'   => true,
		'requires_image'   => true,
		'image_sizes'      => [
			'tavern-landscape-medium',
			'tavern-portrait-small',
			'tavern-portrait-medium',
			'tavern-square-medium'
		]
	],
	'list' => [
		'label'       => __( 'List', 'tavern' ),
		'image_sizes' => []
	]
];
