<?php
/**
 * Base Editor Colors.
 *
 * Overwrite this config in `editor-colors.php`.
 *
 * This file defines the editor color palette naming system.  Out of the box,
 * the theme handles all of the color variations in its CSS.  So, child themes
 * merely need to register their preferred colors following the system.
 *
 * `white`, `black`, `primary`, and `secondary` are the base color names.
 *
 * There are 10 color groups in 9 shades.  The naming convention for colors is:
 * `{$color}-{?$shade}`.
 *
 * The 10 supported color groups are:
 *
 * - gray
 * - red
 * - orange
 * - yellow
 * - green
 * - teal
 * - blue
 * - indigo
 * - purple
 * - pink
 *
 * The 9 shades are:
 *
 * - {$color}-900
 * - {$color}-800
 * - {$color}-700
 * - {$color}-600
 * - {$color}-500
 * - {$color}-400
 * - {$color}-300
 * - {$color}-200
 * - {$color}-100
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [
	'primary' => [
		'label'        => __( 'Primary', 'tavern' ),
		'is_theme_mod' => true
	],
	'secondary' => [
		'label'        => __( 'Secondary', 'tavern' ),
		'is_theme_mod' => true
	],
	'black' => [
		'color' => '22292f',
		'label' => __( 'Black', 'tavern' )
	],
	'white' => [
		'color' => 'ffffff',
		'label' => __( 'White', 'tavern' )
	],
	'gray-900' => [
		'color' => '1a202c',
		'label' => __( 'Gray: 900', 'tavern' )
	],
	'gray-800' => [
		'color' => '2d3748',
		'label' => __( 'Gray: 800', 'tavern' )
	],
	'gray-700' => [
		'color' => '4a5568',
		'label' => __( 'Gray: 700', 'tavern' )
	],
	'gray-600' => [
		'color' => '718096',
		'label' => __( 'Gray: 600', 'tavern' )
	],
	'gray-500' => [
		'color' => 'a0aec0',
		'label' => __( 'Gray: 500', 'tavern' )
	],
	'gray-400' => [
		'color' => 'cbd5e0',
		'label' => __( 'Gray: 400', 'tavern' )
	],
	'gray-300' => [
		'color' => 'e2e8f0',
		'label' => __( 'Gray: 300', 'tavern' )
	],
	'gray-200' => [
		'color' => 'edf2f7',
		'label' => __( 'Gray: 200', 'tavern' ),
	],
	'gray-100' => [
		'color' => 'f7fafc',
		'label' => __( 'Gray: 100', 'tavern' )
	],
	'red-900' => [
		'color' => '742a2a',
		'label' => __( 'Red: 900', 'tavern' )
	],
	'red-800' => [
		'color' => '9b2c2c',
		'label' => __( 'Red: 800', 'tavern' )
	],
	'red-700' => [
		'color' => 'c53030',
		'label' => __( 'Red: 700', 'tavern' )
	],
	'red-600' => [
		'color' => 'e53e3e',
		'label' => __( 'Red: 600', 'tavern' )
	],
	'red-500' => [
		'color' => 'b11a21',
		'label' => __( 'Red: 500', 'tavern' )
	],
	'red-400' => [
		'color' => 'fc8181',
		'label' => __( 'Red: 400', 'tavern' )
	],
	'red-300' => [
		'color' => 'feb2b2',
		'label' => __( 'Red: 300', 'tavern' )
	],
	'red-200' => [
		'color' => 'fed7d7',
		'label' => __( 'Red: 200', 'tavern' )
	],
	'red-100' => [
		'color' => 'fff5f5',
		'label' => __( 'Red: 100', 'tavern' )
	],
	'orange-900' => [
		'color' => '7b341e',
		'label' => __( 'Orange: 900', 'tavern' )
	],
	'orange-800' => [
		'color' => '9c4221',
		'label' => __( 'Orange: 800', 'tavern' )
	],
	'orange-700' => [
		'color' => 'c05621',
		'label' => __( 'Orange: 700', 'tavern' )
	],
	'orange-600' => [
		'color' => 'dd6b20',
		'label' => __( 'Orange: 600', 'tavern' )
	],
	'orange-500' => [
		'color' => 'ed8936',
		'label' => __( 'Orange: 500', 'tavern' )
	],
	'orange-400' => [
		'color' => 'f6ad55',
		'label' => __( 'Orange: 400', 'tavern' )
	],
	'orange-300' => [
		'color' => 'fbd38d',
		'label' => __( 'Orange: 300', 'tavern' )
	],
	'orange-200' => [
		'color' => 'feebc8',
		'label' => __( 'Orange: 200', 'tavern' )
	],
	'orange-100' => [
		'color' => 'fffaf0',
		'label' => __( 'Orange: 100', 'tavern' )
	],
	'yellow-900' => [
		'color' => '744210',
		'label' => __( 'Yellow: 900', 'tavern' )
	],
	'yellow-800' => [
		'color' => '975a16',
		'label' => __( 'Yellow: 800', 'tavern' )
	],
	'yellow-700' => [
		'color' => 'b7791f',
		'label' => __( 'Yellow: 700', 'tavern' )
	],
	'yellow-600' => [
		'color' => 'd69e2e',
		'label' => __( 'Yellow: 600', 'tavern' )
	],
	'yellow-500' => [
		'color' => 'ecc94b',
		'label' => __( 'Yellow: 500', 'tavern' )
	],
	'yellow-400' => [
		'color' => 'f6e05e',
		'label' => __( 'Yellow: 400', 'tavern' )
	],
	'yellow-300' => [
		'color' => 'faf089',
		'label' => __( 'Yellow: 300', 'tavern' )
	],
	'yellow-200' => [
		'color' => 'fefcbf',
		'label' => __( 'Yellow: 200', 'tavern' )
	],
	'yellow-100' => [
		'color' => 'fffff0',
		'label' => __( 'Yellow: 100', 'tavern' )
	],
	'green-900' => [
		'color' => '22543d',
		'label' => __( 'Green: 900', 'tavern' )
	],
	'green-800' => [
		'color' => '276749',
		'label' => __( 'Green: 800', 'tavern' )
	],
	'green-700' => [
		'color' => '2f855a',
		'label' => __( 'Green: 700', 'tavern' )
	],
	'green-600' => [
		'color' => '38a169',
		'label' => __( 'Green: 600', 'tavern' )
	],
	'green-500' => [
		'color' => '48bb78',
		'label' => __( 'Green: 500', 'tavern' )
	],
	'green-400' => [
		'color' => '68d391',
		'label' => __( 'Green: 400', 'tavern' )
	],
	'green-300' => [
		'color' => '9ae6b4',
		'label' => __( 'Green: 300', 'tavern' )
	],
	'green-200' => [
		'color' => 'c6f6d5',
		'label' => __( 'Green: 200', 'tavern' )
	],
	'green-100' => [
		'color' => 'f0fff4',
		'label' => __( 'Green: 100', 'tavern' )
	],
	'teal-900' => [
		'color' => '234e52',
		'label' => __( 'Teal: 900', 'tavern' )
	],
	'teal-800' => [
		'color' => '285e61',
		'label' => __( 'Teal: 800', 'tavern' )
	],
	'teal-700' => [
		'color' => '2c7a7b',
		'label' => __( 'Teal: 700', 'tavern' )
	],
	'teal-600' => [
		'color' => '319795',
		'label' => __( 'Teal: 600', 'tavern' )
	],
	'teal-500' => [
		'color' => '38b2ac',
		'label' => __( 'Teal: 500', 'tavern' )
	],
	'teal-400' => [
		'color' => '4fd1c5',
		'label' => __( 'Teal: 400', 'tavern' )
	],
	'teal-300' => [
		'color' => '81e6d9',
		'label' => __( 'Teal: 300', 'tavern' )
	],
	'teal-200' => [
		'color' => 'b2f5ea',
		'label' => __( 'Teal: 200', 'tavern' )
	],
	'teal-100' => [
		'color' => 'e6fffa',
		'label' => __( 'Teal: 100', 'tavern' )
	],
	'blue-900' => [
		'color' => '2a4365',
		'label' => __( 'Blue: 900', 'tavern' )
	],
	'blue-800' => [
		'color' => '2c5282',
		'label' => __( 'Blue: 800', 'tavern' )
	],
	'blue-700' => [
		'color' => '2b6cb0',
		'label' => __( 'Blue: 700', 'tavern' )
	],
	'blue-600' => [
		'color' => '3182ce',
		'label' => __( 'Blue: 600', 'tavern' )
	],
	'blue-500' => [
		'color' => '4299e1',
		'label' => __( 'Blue: 500', 'tavern' )
	],
	'blue-400' => [
		'color' => '63b3ed',
		'label' => __( 'Blue: 400', 'tavern' )
	],
	'blue-300' => [
		'color' => '90cdf4',
		'label' => __( 'Blue: 300', 'tavern' )
	],
	'blue-200' => [
		'color' => 'bee3f8',
		'label' => __( 'Blue: 200', 'tavern' )
	],
	'blue-100' => [
		'color' => 'ebf8ff',
		'label' => __( 'Blue: 100', 'tavern' )
	],
	'indigo-900' => [
		'color' => '3c366b',
		'label' => __( 'Indigo: 900', 'tavern' )
	],
	'indigo-800' => [
		'color' => '434190',
		'label' => __( 'Indigo: 800', 'tavern' )
	],
	'indigo-700' => [
		'color' => '4c51bf',
		'label' => __( 'Indigo: 700', 'tavern' )
	],
	'indigo-600' => [
		'color' => '5a67d8',
		'label' => __( 'Indigo: 600', 'tavern' )
	],
	'indigo-500' => [
		'color' => '667eea',
		'label' => __( 'Indigo: 500', 'tavern' )
	],
	'indigo-400' => [
		'color' => '7f9cf5',
		'label' => __( 'Indigo: 400', 'tavern' )
	],
	'indigo-300' => [
		'color' => 'a3bffa',
		'label' => __( 'Indigo: 300', 'tavern' )
	],
	'indigo-200' => [
		'color' => 'c3dafe',
		'label' => __( 'Indigo: 200', 'tavern' )
	],
	'indigo-100' => [
		'color' => 'ebf4ff',
		'label' => __( 'Indigo: 100', 'tavern' )
	],
	'purple-900' => [
		'color' => '44337a',
		'label' => __( 'Purple: 900', 'tavern' )
	],
	'purple-800' => [
		'color' => '553c9a',
		'label' => __( 'Purple: 800', 'tavern' )
	],
	'purple-700' => [
		'color' => '6b46c1',
		'label' => __( 'Purple: 700', 'tavern' )
	],
	'purple-600' => [
		'color' => '805ad5',
		'label' => __( 'Purple: 600', 'tavern' )
	],
	'purple-500' => [
		'color' => '9f7aea',
		'label' => __( 'Purple: 500', 'tavern' )
	],
	'purple-400' => [
		'color' => 'b794f4',
		'label' => __( 'Purple: 400', 'tavern' )
	],
	'purple-300' => [
		'color' => 'd6bcfa',
		'label' => __( 'Purple: 300', 'tavern' )
	],
	'purple-200' => [
		'color' => 'e9d8fd',
		'label' => __( 'Purple: 200', 'tavern' )
	],
	'purple-100' => [
		'color' => 'faf5ff',
		'label' => __( 'Purple: 100', 'tavern' )
	],
	'pink-900' => [
		'color' => '702459',
		'label' => __( 'Pink: 900', 'tavern' )
	],
	'pink-800' => [
		'color' => '97266d',
		'label' => __( 'Pink: 800', 'tavern' )
	],
	'pink-700' => [
		'color' => 'b83280',
		'label' => __( 'Pink: 700', 'tavern' )
	],
	'pink-600' => [
		'color' => 'd53f8c',
		'label' => __( 'Pink: 600', 'tavern' )
	],
	'pink-500' => [
		'color' => 'ed64a6',
		'label' => __( 'Pink: 500', 'tavern' )
	],
	'pink-400' => [
		'color' => 'f687b3',
		'label' => __( 'Pink: 400', 'tavern' )
	],
	'pink-300' => [
		'color' => 'fbb6ce',
		'label' => __( 'Pink: 300', 'tavern' )
	],
	'pink-200' => [
		'color' => 'fed7e2',
		'label' => __( 'Pink: 200', 'tavern' )
	],
	'pink-100' => [
		'color' =>  'fff5f7',
		'label' => __( 'Pink: 100', 'tavern' )
	]
];
