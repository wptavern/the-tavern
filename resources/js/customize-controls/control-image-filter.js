/**
 * Image Filter Customize Control.
 *
 * This file handles the JavaScript for the image filter customize control.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

wp.customize.controlConstructor['tavern-image-filter'] = wp.customize.Control.extend( {

	ready : function() {

		// Global set via `wp_localize_script()`.
		let filters = tavernCustomizeControls.imageFilters;

		let control              = this;
		let functionSetting      = control.settings.function;
		let defaultAmountSetting = control.settings.default_amount;
		let hoverAmountSetting   = control.settings.hover_amount;

		// Updates the amount controls and amount settings when a new
		// filter function is chosen.
		functionSetting.bind( value => {

			let defaultAmountContainer = control.selector + ' .tavern-image-default-filter-amount';
			let hoverAmountContainer   = control.selector + ' .tavern-image-hover-filter-amount';
			let defaultAmountSelector  = control.selector + ' [data-customize-setting-link=' + defaultAmountSetting.id + ']';
			let hoverAmountSelector    = control.selector + ' [data-customize-setting-link=' + hoverAmountSetting.id   + ']';

			let amountContainers = document.querySelectorAll(
				defaultAmountContainer + ',' + hoverAmountContainer
			);

			let inputs = document.querySelectorAll(
				defaultAmountSelector + ',' + hoverAmountSelector
			);

			// Update the amounts settings with the default/lacuna
			// value for the filter.
			defaultAmountSetting.set( filters[ value ].lacuna );
			hoverAmountSetting.set(   filters[ value ].lacuna );

			// If no filter function is chosen, hide the amount controls.
			// Otherwise, display them.
			amountContainers.forEach( container => {
				container.style.display =
					! value || 'none' === value
					? 'none'
					: 'block';
			} );

			// Loop through the amount controls and set their min
			// and max attributes based on the filter chosen.
			inputs.forEach( input => {
				input.setAttribute( 'min', filters[ value ].min );
				input.setAttribute( 'max', filters[ value ].max );
			} );

		} );
	}
} );
