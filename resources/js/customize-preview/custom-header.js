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

// Site title.
wp.customize( 'blogname', value => {
	value.bind( to => {
		document.querySelector( '.app-header__title-link' ).textContent = to;
	} );
} );

// Site description.
wp.customize( 'blogdescription', value => {
	value.bind( to => {
		document.querySelector( '.app-header__description' ).textContent = to;
	} );
} );

// Branding separator.
wp.customize( 'branding_sep', value => {
	value.bind( to => {
		document.querySelector( '.app-header__sep' ).innerHTML = to;
	} );
} );
