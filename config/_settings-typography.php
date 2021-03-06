<?php
/**
 * Typography Settings Config.
 *
 * Defines the font options available in the customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [
	'headings' => [
		'label'           => _x( 'Headings', 'font family setting', 'tavern' ),
		'description'     => __( 'Font used for text headings.', 'tavern' ),
		'family'          => 'frank-ruhl-libre',
		//'family'          => 'libre-baskerville',
		'style'           => '400',
		'variant'         => 'normal',
		'transform'       => 'none',
		'options'         => [ 'family', 'style', 'caps', 'transform' ]
	],
	'primary' => [
		'label'           => _x( 'Primary', 'font family setting', 'tavern' ),
		'description'     => __( 'Font used for most of the text on the site.', 'tavern' ),
		'family'          => 'lora',
		'options'         => [ 'family' ],
		'required_styles' => [ '400', '400i', '700', '700i' ]
	],
	'secondary' => [
		'label'           => _x( 'Secondary', 'font family setting', 'tavern' ),
		'description'     => __( 'Font used for secondary, less important text.', 'tavern' ),
		'family'          => 'lato',
		'options'         => [ 'family' ],
		'required_styles' => [ '400', '400i', '700', '700i' ]
	]
];
