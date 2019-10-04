/**
 * Border Radius Control.
 *
 * Outputs a select dropdown control for handling the border-radius.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

// Import the class update utility.
import updateClass from './../util/update-class';

// Get the core WP select control.
const { SelectControl } = wp.components;

// Global set via `wp_localize_script()`.
const { labels } = tavernEditor;

export default ( props ) => {

	let options = [
		{ label: labels.default,          value: ''     },
		{ label: labels.none,             value: 'none' },
		{ label: labels.sizes.small,      value: 'sm'   },
		{ label: labels.sizes.medium,     value: 'md'   },
		{ label: labels.sizes.large,      value: 'lg'   },
		{ label: labels.sizes.extraLarge, value: 'xl'   }
	];

	// Get the border-radius attribute.
	let { borderRadius } = props.attributes;

	return (
		<SelectControl
			key="borderRadius"
			label={ labels.borderRadius }
			value={ borderRadius }
			options={ options }
			onChange={ ( selected ) => {
				props.setAttributes( {
					borderRadius: selected,
					className: updateClass(
						props.attributes.className,
						selected ? 'rounded-' + selected : '',
						options.filter( opt => opt.value ).map( opt => 'rounded-' + opt.value )
					)
				} );
			} }
		/>
	);
};
