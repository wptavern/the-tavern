/**
 * Design Settings Panel.
 *
 * Creates the design settings panel for the block editor.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

const { PanelBody } = wp.components;
const { __ } = wp.i18n;

// Global set via `wp_localize_script()`.
const { labels } = tavernEditor;

export default ( props, fields ) => {

	return (
		<PanelBody title={ labels.designSettings } initialOpen={ false }>
			{
				fields.map( ( field, i ) => {
					return field.control( props )
				} )
			}
		</PanelBody>
	);
};
