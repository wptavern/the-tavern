/**
 * Editor block styles.
 *
 * This file handles the JavaScript for creating block styles in the editor.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

import * as blockStyles from './block-styles/index';

wp.domReady( () => {

	Object.keys( blockStyles ).forEach( block => {

		blockStyles[ block ].styles.forEach( options => {

			wp.blocks.registerBlockStyle(
				blockStyles[ block ].name,
				options
			);

		} );

	} );

	// Unregisters the circle-mask style added in Gutenber 6.4.0.  We may
	// revisit this in the future.

	wp.blocks.unregisterBlockStyle( 'core/image', 'circle-mask' );

} );
