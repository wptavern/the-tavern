/**
 * Paragraph Block Styles.
 *
 * This file exports all of the styles for the paragraph block.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

let labels = tavernEditor.labels;

export default {
	name  : 'core/paragraph',
	styles : [
		{
			name      : 'default',
			label     : labels.default,
			isDefault : true
		},
		{
			name  : 'highlight',
			label : labels.highlight
		}
	]
};
