/**
 * Custom header preview.
 *
 * This file handles the JavaScript for the live preview of the `custom-header`
 * feature in the customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

let settings = tavernCustomizePreview.colorSettings;

Object.keys( settings ).forEach( setting => {

	wp.customize( settings[ setting ].modName, value => {
		value.bind( to => {
			document.documentElement.style.setProperty(
				settings[ setting ].property,
				to ? to : 'transparent'
			);
		} );
	} );

} );
