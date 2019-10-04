/**
 * Layouts preview.
 *
 * This file handles the JavaScript for the live preview of the layouts feature
 * in the customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

// Gets an array of all layout class names.
let layouts = Object.values( tavernCustomizePreview.layouts ).map( layout =>
	'layout-' + layout.name
);

wp.customize( 'layout', value => {
	value.bind( to => {
		let body = document.querySelector( 'body' );

		// Remove all layout classes.
		body.classList.remove( ...layouts );

		// Add new layout class.
		body.classList.add( 'layout-' + to );
	} );
} );
