/**
 * Typography live preview.
 *
 * This file handles the JavaScript for the live preview of the theme typography
 * feature in the customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

let WebFont     = require( 'webfontloader' );
let settings    = tavernCustomizePreview.typographySettings;
let families    = tavernCustomizePreview.fontFamilies;
let styles      = tavernCustomizePreview.fontStyles;
let caps        = tavernCustomizePreview.fontVariantCaps;
let transforms  = tavernCustomizePreview.textTransforms;
let loadedFonts = [];

Object.keys( settings ).forEach( key => {

	let setting = settings[ key ];

	// If the Google Font is already loaded, add it to the loaded fonts array.
	if ( families[ setting.mods.family ].googleName ) {
		loadedFonts.push( setting.mods.family );
	}

	wp.customize( setting.modNames.family, value => {

		value.bind( to => {

			let family = families[ to ];

			// If this is a Google font, let's use the Web Font
			// Loader to load it up.
			if ( -1 === loadedFonts.indexOf( family.name ) && family.googleName ) {
				WebFont.load( {
					google : {
						families : [
							family.googleName + ':' + family.styles.join( ',' )
						]
					}
				} );

				// Add to loaded fonts array.
				loadedFonts.push( family.name );
			}

			// Update the custom CSS property.
			document.documentElement.style.setProperty(
				'--font-family-' + setting.name,
				family.stack
			);
		} );
	} );

	wp.customize( setting.modNames.style, value => {

		value.bind( to => {

			let style = styles[ to ];

			document.documentElement.style.setProperty(
				'--font-weight-' + setting.name,
				style.weight
			);

			document.documentElement.style.setProperty(
				'--font-style-' + setting.name,
				style.style
			);
		} );
	} );

	wp.customize( setting.modNames.transform, value => {

		value.bind( to => {

			let transform = transforms[ to ];

			document.documentElement.style.setProperty(
				'--text-transform-' + setting.name,
				transform.transform
			);
		} );
	} );

	wp.customize( setting.modNames.caps, value => {

		value.bind( to => {

			let cap = caps[ to ];

			document.documentElement.style.setProperty(
				'--font-variant-caps-' + setting.name,
				cap.cap
			);
		} );
	} );
} );
