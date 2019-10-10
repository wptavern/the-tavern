<?php
/**
 * Font Families Config.
 *
 * Defines the available font families that users can select for the front end.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [
	'system-ui' => [
		// Translators: Font family label.
		'label' => __( 'System UI', 'tavern' ),
		'stack' => 'system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'abril-fatface' => [
		// Translators: Font family label.
		'label'  => __( 'Abril Fatface', 'tavern' ),
		'stack'  => '"Abril Fatface", serif',
		'google' => 'Abril+Fatface',
		'styles' => [ '400' ]
	],
	'aguafina-script' => [
		// Translators: Font family label.
		'label'  => __( 'Aguafina Script', 'tavern' ),
		'stack'  => '"Aguafina Script", cursive',
		'google' => 'Aguafina+Script',
		'styles' => [ '400' ]
	],
	'alegreya' => [
		// Translators: Font family label.
		'label'  => __( 'Alegreya', 'tavern' ),
		'stack'  => 'Alegreya, serif',
		'google' => 'Alegreya',
		'styles' => [ '400', '400i', '500', '500i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'alegreya-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Alegreya Sans', 'tavern' ),
		'stack'  => '"Alegreya Sans", sans-serif',
		'google' => 'Alegreya+Sans',
		'styles' => [ '100', '100i', '300', '300i', '400', '400i', '500', '500i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'alfa-slab-one' => [
		// Translators: Font family label.
		'label'  => __( 'Alfa Slab One', 'tavern' ),
		'stack'  => '"Alfa Slab One", cursive',
		'google' => 'Alfa+Slab+One',
		'styles' => [ '400' ]
	],
	'almendra' => [
		// Translators: Font family label.
		'label'  => __( 'Almendra', 'tavern' ),
		'stack'  => 'Almendra, serif',
		'google' => 'Almendra',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'almendra-display' => [
		// Translators: Font family label.
		'label'  => __( 'Almendra Display', 'tavern' ),
		'stack'  => '"Almendra Display", cursive',
		'google' => 'Almendra+Display',
		'styles' => [ '400' ]
	],
	'almendra-sc' => [
		// Translators: Font family label.
		'label'  => __( 'Almendra Small Caps', 'tavern' ),
		'stack'  => '"Almendra SC", serif',
		'google' => 'Almendra+SC',
		'styles' => [ '400' ]
	],
	'amaranth' => [
		// Translators: Font family label.
		'label'  => __( 'Amaranth', 'tavern' ),
		'stack'  => 'Amaranth, sans-serif',
		'google' => 'Amaranth',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'amiri' => [
		// Translators: Font family label.
		'label'  => __( 'Amiri', 'tavern' ),
		'stack'  => 'Amiri, serif',
		'google' => 'Amiri',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'andale-mono' => [
		// Translators: Font family label.
		'label' => __( 'Andale Mono', 'tavern' ),
		'stack' => '"Andale Mono", Consolas, Monaco, Menlo, Courier, Verdana, sans-serif'
	],
	'anonymous-pro' => [
		// Translators: Font family label.
		'label'  => __( 'Anonymous Pro', 'tavern' ),
		'stack'  => '"Anonymous Pro", monospace',
		'google' => 'Anonymous+Pro',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'archivo' => [
		// Translators: Font family label.
		'label'  => __( 'Archivo', 'tavern' ),
		'stack'  => 'Archivo, sans-serif',
		'google' => 'Archivo',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'archivo-black' => [
		// Translators: Font family label.
		'label'  => __( 'Archivo Black', 'tavern' ),
		'stack'  => '"Archivo Black", sans-serif',
		'google' => 'Archivo+Black',
		'styles' => [ '400'  ]
	],
	'archivo-narrow' => [
		// Translators: Font family label.
		'label'  => __( 'Archivo Narrow', 'tavern' ),
		'stack'  => '"Archivo Narrow", sans-serif',
		'google' => 'Archivo+Narrow',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'arial' => [
		// Translators: Font family label.
		'label' => __( 'Arial', 'tavern' ),
		'stack' => 'Arial, "Helvetica Neue", Helvetica, sans-serif'
	],
	'arial-black' => [
		// Translators: Font family label.
		'label'  => __( 'Arial Black', 'tavern' ),
		'stack'  => '"Arial Black", "Arial Bold", Arial, sans-serif',
		'styles' => [ '900', '900i' ]
	],
	'arial-narrow' => [
		// Translators: Font family label.
		'label' => __( 'Arial Narrow', 'tavern' ),
		'stack' => '"Arial Narrow", Arial, "Helvetica Neue", Helvetica, sans-serif'
	],
	'arimo' => [
		// Translators: Font family label.
		'label'  => __( 'Arimo', 'tavern' ),
		'stack'  => 'Arimo, sans-serif',
		'google' => 'Arimo',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'arizonia' => [
		// Translators: Font family label.
		'label'  => __( 'Arizonia', 'tavern' ),
		'stack'  => 'Arizonia, cursive',
		'google' => 'Arizonia',
		'styles' => [ '400' ]
	],
	'arsenal' => [
		// Translators: Font family label.
		'label'  => __( 'Arsenal', 'tavern' ),
		'stack'  => 'Arsenal, sans-serif',
		'google' => 'Arsenal',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'arvo' => [
		// Translators: Font family label.
		'label'  => __( 'Arvo', 'tavern' ),
		'stack'  => 'Arvo, serif',
		'google' => 'Arvo',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'asap' => [
		// Translators: Font family label.
		'label'  => __( 'Asap', 'tavern' ),
		'stack'  => 'Asap, sans-serif',
		'google' => 'Asap',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'asap-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Asap Condensed', 'tavern' ),
		'stack'  => '"Asap Condensed", sans-serif',
		'google' => 'Asap+Condensed',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'averia-libre' => [
		// Translators: Font family label.
		'label'  => __( 'Averia Libre', 'tavern' ),
		'stack'  => '"Averia Libre", cursive',
		'google' => 'Averia+Libre',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i' ]
	],
	'averia-gruesa-libre' => [
		// Translators: Font family label.
		'label'  => __( 'Averia Gruesa Libre', 'tavern' ),
		'stack'  => '"Averia Gruesa Libre", cursive',
		'google' => 'Averia+Gruesa+Libre',
		'styles' => [ '400' ]
	],
	'averia-sans-libre' => [
		// Translators: Font family label.
		'label'  => __( 'Averia Sans Libre', 'tavern' ),
		'stack'  => '"Averia Sans Libre", sans-serif',
		'google' => 'Averia+Sans+Libre',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i' ]
	],
	'averia-serif-libre' => [
		// Translators: Font family label.
		'label'  => __( 'Averia Serif Libre', 'tavern' ),
		'stack'  => '"Averia Serif Libre", sans-serif',
		'google' => 'Averia+Serif+Libre',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i' ]
	],
	'bangers' => [
		// Translators: Font family label.
		'label'  => __( 'Bangers', 'tavern' ),
		'stack'  => 'Bangers, cursive',
		'google' => 'Bangers',
		'styles' => [ '400' ]
	],
	'barlow' => [
		// Translators: Font family label.
		'label'  => __( 'Barlow', 'tavern' ),
		'stack'  => 'Barlow, sans-serif',
		'google' => 'Barlow',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'barlow-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Barlow Condensed', 'tavern' ),
		'stack'  => '"Barlow Condensed", sans-serif',
		'google' => 'Barlow+Condensed',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'barlow-semi-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Barlow Semi Condensed', 'tavern' ),
		'stack'  => '"Barlow Semi Condensed", sans-serif',
		'google' => 'Barlow+Semi+Condensed',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'baskerville' => [
		// Translators: Font family label.
		'label' => __( 'Baskerville', 'tavern' ),
		'stack' => 'Baskerville, "Times New Roman", Times, serif'
	],
	'berkshire-swash' => [
		// Translators: Font family label.
		'label'  => __( 'Berkshire Swash', 'tavern' ),
		'stack'  => '"Berkshire Swash", cursive',
		'google' => 'Berkshire+Swash',
		'styles' => [ '400' ]
	],
	'bitter' => [
		// Translators: Font family label.
		'label'  => __( 'Bitter', 'tavern' ),
		'stack'  => 'Bitter, serif',
		'google' => 'Bitter',
		'styles' => [ '400', '400i', '700' ]
	],
	'bree-serif' => [
		// Translators: Font family label.
		'label'  => __( 'Bree Serif', 'tavern' ),
		'stack'  => '"Bree Serif", serif',
		'google' => 'Bree+Serif',
		'styles' => [ '400' ]
	],
	'brush-script-mt' => [
		// Translators: Font family label.
		'label' => __( 'Brush Script MT', 'tavern' ),
		'stack' => '"Brush Script MT", cursive'
	],
	'cabin' => [
		// Translators: Font family label.
		'label'  => __( 'Cabin', 'tavern' ),
		'stack'  => 'Cabin, sans-serif',
		'google' => 'Cabin',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'cabin-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Cabin Condensed', 'tavern' ),
		'stack'  => '"Cabin Condensed", sans-serif',
		'google' => 'Cabin+Condensed',
		'styles' => [ '400', '500', '600', '700' ]
	],
	'cabin-sketch' => [
		// Translators: Font family label.
		'label'  => __( 'Cabin Sketch', 'tavern' ),
		'stack'  => '"Cabin Sketch", cursive',
		'google' => 'Cabin+Sketch',
		'styles' => [ '400', '700' ]
	],
	'cambay' => [
		// Translators: Font family label.
		'label'  => __( 'Cambay', 'tavern' ),
		'stack'  => 'Cambay, sans-serif',
		'google' => 'Cambay',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'cantarell' => [
		// Translators: Font family label.
		'label'  => __( 'Cantarell', 'tavern' ),
		'stack'  => 'Cantarell, sans-serif',
		'google' => 'Cantarell',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'cardo' => [
		// Translators: Font family label.
		'label'  => __( 'Cardo', 'tavern' ),
		'stack'  => 'Cardo, serif',
		'google' => 'Cardo',
		'styles' => [ '400', '400i', '700' ]
	],
	'caudex' => [
		// Translators: Font family label.
		'label'  => __( 'Caudex', 'tavern' ),
		'stack'  => 'Caudex, serif',
		'google' => 'Caudex',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'caveat' => [
		// Translators: Font family label.
		'label'  => __( 'Caveat', 'tavern' ),
		'stack'  => 'Caveat, cursive',
		'google' => 'Caveat',
		'styles' => [ '400', '700' ]
	],
	'caveat-brush' => [
		// Translators: Font family label.
		'label'  => __( 'Caveat Brush', 'tavern' ),
		'stack'  => '"Caveat Brush", cursive',
		'google' => 'Caveat+Brush',
		'styles' => [ '400' ]
	],
	'cherry-swash' => [
		// Translators: Font family label.
		'label'  => __( 'Cherry Swash', 'tavern' ),
		'stack'  => '"Cherry Swash", cursive',
		'google' => 'Cherry+Swash',
		'styles' => [ '400', '700' ]
	],
	'chivo' => [
		// Translators: Font family label.
		'label'  => __( 'Chivo', 'tavern' ),
		'stack'  => 'Chivo, sans-serif',
		'google' => 'Chivo',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i', '900', '900i' ]
	],
	'comfortaa' => [
		// Translators: Font family label.
		'label'  => __( 'Comfortaa', 'tavern' ),
		'stack'  => 'Comfortaa, cursive',
		'google' => 'Comfortaa',
		'styles' => [ '300', '400', '500', '600', '700' ]
	],
	'comic-sans' => [
		// Translators: Font family label.
		'label' => __( 'Comic Sans', 'tavern' ),
		'stack' => '"Comic Sans MS", "Comic Sans", "Chalkboard SE", "Comic Neue", cursive'
	],
	'cookie' => [
		// Translators: Font family label.
		'label'  => __( 'Cookie', 'tavern' ),
		'stack'  => 'Cookie, cursive',
		'google' => 'Cookie',
		'styles' => [ '400' ]
	],
	'cormorant' => [
		// Translators: Font family label.
		'label'  => __( 'Cormorant', 'tavern' ),
		'stack'  => 'Cormorant, serif',
		'google' => 'Cormorant',
		'styles' => [ '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'cormorant-garamond' => [
		// Translators: Font family label.
		'label'  => __( 'Cormorant Garamond', 'tavern' ),
		'stack'  => '"Cormorant Garamond", serif',
		'google' => 'Cormorant+Garamond',
		'styles' => [ '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'cormorant-infant' => [
		// Translators: Font family label.
		'label'  => __( 'Cormorant Infant', 'tavern' ),
		'stack'  => '"Cormorant Infant", serif',
		'google' => 'Cormorant+Infant',
		'styles' => [ '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'cormorant-sc' => [
		// Translators: Font family label.
		'label'  => __( 'Cormorant Small Caps', 'tavern' ),
		'stack'  => '"Cormorant SC", serif',
		'google' => 'Cormorant+SC',
		'styles' => [ '300', '400', '500', '600', '700' ]
	],
	'cormorant-upright' => [
		// Translators: Font family label.
		'label'  => __( 'Cormorant Upright', 'tavern' ),
		'stack'  => '"Cormorant Upright", serif',
		'google' => 'Cormorant+Upright',
		'styles' => [ '300', '400', '500', '600', '700' ]
	],
	'cormorant-unicase' => [
		// Translators: Font family label.
		'label'  => __( 'Cormorant Unicase', 'tavern' ),
		'stack'  => '"Cormorant Unicase", serif',
		'google' => 'Cormorant+Unicase',
		'styles' => [ '300', '400', '500', '600', '700' ]
	],
	'courier-new' => [
		// Translators: Font family label.
		'label' => __( 'Courier New', 'tavern' ),
		'stack' => '"Courier New", Courier, Verdana, sans-serif'
	],
	'cousine' => [
		// Translators: Font family label.
		'label'  => __( 'Cousine', 'tavern' ),
		'stack'  => 'Cousine, monospace',
		'google' => 'Cousine',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'crimson-text' => [
		// Translators: Font family label.
		'label'  => __( 'Crimson Text', 'tavern' ),
		'stack'  => '"Crimson Text", serif',
		'google' => 'Crimson+Text',
		'styles' => [ '400', '400i', '600', '600i', '700', '700i' ]
	],
	'cuprum' => [
		// Translators: Font family label.
		'label'  => __( 'Cuprum', 'tavern' ),
		'stack'  => 'Cuprum, sans-serif',
		'google' => 'Cuprum',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'dancing-script' => [
		// Translators: Font family label.
		'label'  => __( 'Dancing Script', 'tavern' ),
		'stack'  => '"Dancing Script", cursive',
		'google' => 'Dancing+Script',
		'styles' => [ '400', '700' ]
	],
	'eb-garamond' => [
		// Translators: Font family label.
		'label'  => __( 'EB Garamond', 'tavern' ),
		'stack'  => '"EB Garamond", serif',
		'google' => 'EB+Garamond',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i' ]
	],
	'economica' => [
		// Translators: Font family label.
		'label'  => __( 'Economica', 'tavern' ),
		'stack'  => 'Economica, sans-serif',
		'google' => 'Economica',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'elsie' => [
		// Translators: Font family label.
		'label'  => __( 'Elsie', 'tavern' ),
		'stack'  => 'Elsie, cursive',
		'google' => 'Elsie',
		'styles' => [ '400', '900' ]
	],
	'elsie-swash-caps' => [
		// Translators: Font family label.
		'label'  => __( 'Elsie Swash Caps', 'tavern' ),
		'stack'  => '"Elsie Swash Caps", cursive',
		'google' => 'Elsie+Swash+Caps',
		'styles' => [ '400', '900' ]
	],
	'exo' => [
		// Translators: Font family label.
		'label'  => __( 'Exo', 'tavern' ),
		'stack'  => 'Exo, sans-serif',
		'google' => 'Exo',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'exo-2' => [
		// Translators: Font family label.
		'label'  => __( 'Exo 2', 'tavern' ),
		'stack'  => '"Exo 2", sans-serif',
		'google' => 'Exo+2',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'expletus-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Expletus Sans', 'tavern' ),
		'stack'  => '"Expletus Sans", sans-serif',
		'google' => 'Expletus+Sans',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'faustina' => [
		// Translators: Font family label.
		'label'  => __( 'Faustina', 'tavern' ),
		'stack'  => 'Faustina, serif',
		'google' => 'Faustina',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'fira-mono' => [
		// Translators: Font family label.
		'label'  => __( 'Fira Mono', 'tavern' ),
		'stack'  => '"Fira Mono", monospace',
		'google' => 'Fira+Mono',
		'styles' => [ '400', '500', '700' ]
	],
	'fira-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Fira Sans', 'tavern' ),
		'stack'  => '"Fira Sans", sans-serif',
		'google' => 'Fira+Sans',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'fira-sans-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Fira Sans Condensed', 'tavern' ),
		'stack'  => '"Fira Sans Condensed", sans-serif',
		'google' => 'Fira+Sans+Condensed',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'fira-sans-extra-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Fira Sans Extra Condensed', 'tavern' ),
		'stack'  => '"Fira Sans Extra Condensed", sans-serif',
		'google' => 'Fira+Sans+Extra+Condensed',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'frank-ruhl-libre' => [
		// Translators: Font family label.
		'label'  => __( 'Frank Ruhl Libre', 'tavern' ),
		'stack'  => '"Frank Ruhl Libre", serif',
		'google' => 'Frank+Ruhl+Libre',
		'styles' => [ '100', '400', '500', '700', '900' ]
	],
	'gentium-basic' => [
		// Translators: Font family label.
		'label'  => __( 'Gentium Basic', 'tavern' ),
		'stack'  => '"Gentium Basic", serif',
		'google' => 'Gentium+Basic',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'gentium-book-basic' => [
		// Translators: Font family label.
		'label'  => __( 'Gentium Book Basic', 'tavern' ),
		'stack'  => '"Gentium Book Basic", serif',
		'google' => 'Gentium+Book+Basic',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'georgia' => [
		// Translators: Font family label.
		'label' => __( 'Georgia', 'tavern' ),
		'stack' => 'Georgia, "Times New Roman", Times, serif'
	],
	'gill-sans' => [
		// Translators: Font family label.
		'label' => __( 'Gill Sans', 'tavern' ),
		'stack' => '"Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif'
	],
	'give-you-glory' => [
		// Translators: Font family label.
		'label'  => __( 'Give You Glory', 'tavern' ),
		'stack'  => '"Give You Glory", cursive',
		'google' => 'Give+You+Glory',
		'styles' => [ '400' ]
	],
	'gloria-hallelujah' => [
		// Translators: Font family label.
		'label'  => __( 'Gloria Hallelujah', 'tavern' ),
		'stack'  => '"Gloria Hallelujah", cursive',
		'google' => 'Gloria+Hallelujah',
		'styles' => [ '400' ]
	],
	'great-vibes' => [
		// Translators: Font family label.
		'label'  => __( 'Great Vibes', 'tavern' ),
		'stack'  => '"Great Vibes", cursive',
		'google' => 'Great+Vibes',
		'styles' => [ '400' ]
	],
	'handlee' => [
		// Translators: Font family label.
		'label'  => __( 'Handlee', 'tavern' ),
		'stack'  => 'Handlee, cursive',
		'google' => 'Handlee',
		'styles' => [ '400' ]
	],
	'helvetica' => [
		// Translators: Font family label.
		'label' => __( 'Helvetica', 'tavern' ),
		'stack' => '"Helvetica Neue", Helvetica, Arial, sans-serif'
	],
	'henny-penny' => [
		// Translators: Font family label.
		'label'  => __( 'Henny Penny', 'tavern' ),
		'stack'  => '"Henny Penny", cursive',
		'google' => 'Henny+Penny',
		'styles' => [ '400' ]
	],
	'hoefler-text' => [
		// Translators: Font family label.
		'label' => __( 'Hoefler Text', 'tavern' ),
		'stack' => '"Hoefler Text", Garamond, "Times New Roman", Times, sans-serif'
	],
	'ibm-plex-mono' => [
		// Translators: Font family label.
		'label'  => __( 'IBM Plex Mono', 'tavern' ),
		'stack'  => '"IBM Plex Mono", monospace',
		'google' => 'IBM+Plex+Mono',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'ibm-plex-sans' => [
		// Translators: Font family label.
		'label'  => __( 'IBM Plex Sans', 'tavern' ),
		'stack'  => '"IBM Plex Sans", sans-serif',
		'google' => 'IBM+Plex+Sans',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'ibm-plex-sans-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'IBM Plex Sans Condensed', 'tavern' ),
		'stack'  => '"IBM Plex Sans Condensed", sans-serif',
		'google' => 'IBM+Plex+Sans+Condensed',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'ibm-plex-serif' => [
		// Translators: Font family label.
		'label'  => __( 'IBM Plex Serif', 'tavern' ),
		'stack'  => '"IBM Plex Serif", serif',
		'google' => 'IBM+Plex+Serif',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'impact' => [
		// Translators: Font family label.
		'label' => __( 'Impact', 'tavern' ),
		'stack' => 'Impact, Haettenschweiler, "Franklin Gothic Bold", Charcoal, "Helvetica Inserat", "Bitstream Vera Sans Bold", "Arial Black", sans-serif'
	],
	'indie-flower' => [
		// Translators: Font family label.
		'label'  => __( 'Indie Flower', 'tavern' ),
		'stack'  => '"Indie Flower", cursive',
		'google' => 'Indie+Flower',
		'styles' => [ '400' ]
	],
	'istok-web' => [
		// Translators: Font family label.
		'label'  => __( 'Istok Web', 'tavern' ),
		'stack'  => '"Istok Web", sans-serif',
		'google' => 'Istock+Web',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'josefin-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Josefin Sans', 'tavern' ),
		'stack'  => '"Josefin Sans", sans-serif',
		'google' => 'Josefin+Sans',
		'styles' => [ '100', '100i', '300', '300i', '400', '400i', '600', '600i', '700', '700i' ]
	],
	'josefin-slab' => [
		// Translators: Font family label.
		'label'  => __( 'Josefin Slab', 'tavern' ),
		'stack'  => '"Josefin Slab", serif',
		'google' => 'Josefin+Slab',
		'styles' => [ '100', '100i', '300', '300i', '400', '400i', '600', '600i', '700', '700i' ]
	],
	'kanit' => [
		// Translators: Font family label.
		'label'  => __( 'Kanit', 'tavern' ),
		'stack'  => 'Kanit, sans-serif',
		'google' => 'Kanit',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'karla' => [
		// Translators: Font family label.
		'label'  => __( 'Karla', 'tavern' ),
		'stack'  => 'Karla, sans-serif',
		'google' => 'Karla',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'lato' => [
		// Translators: Font family label.
		'label'  => __( 'Lato', 'tavern' ),
		'stack'  => 'Lato, sans-serif',
		'google' => 'Lato',
		'styles' => [ '100', '100i', '300', '300i', '400', '400i', '700', '700i', '900', '900i' ]
	],
	'libre-baskerville' => [
		// Translators: Font family label.
		'label'  => __( 'Libre Baskerville', 'tavern' ),
		'stack'  => '"Libre Baskerville", serif',
		'google' => 'Libre+Baskerville',
		'styles' => [ '400', '400i', '700' ]
	],
	'libre-franklin' => [
		// Translators: Font family label.
		'label'  => __( 'Libre Franklin', 'tavern' ),
		'stack'  => '"Libre Franklin", sans-serif',
		'google' => 'Libre+Franklin',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'lobster-two' => [
		// Translators: Font family label.
		'label'  => __( 'Lobster Two', 'tavern' ),
		'stack'  => '"Lobster Two", cursive',
		'google' => 'Lobster+Two',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'lora' => [
		// Translators: Font family label.
		'label'  => __( 'Lora', 'tavern' ),
		'stack'  => 'Lora, Georgia, serif',
		'google' => 'Lora',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'lucida-grande' => [
		// Translators: Font family label.
		'label' => __( 'Lucida Grande', 'tavern' ),
		'stack' => '"Lucida Grande", "Lucida Sans", "Lucida Sans Unicode", sans-serif'
	],
	'mali' => [
		// Translators: Font family label.
		'label'  => __( 'Mali', 'tavern' ),
		'stack'  => 'Mali, cursive',
		'google' => 'Mali',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'manuale' => [
		// Translators: Font family label.
		'label'  => __( 'Manuale', 'tavern' ),
		'stack'  => 'Manuale, sans-serif',
		'google' => 'Manuale',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i' ]
	],
	'marvel' => [
		// Translators: Font family label.
		'label'  => __( 'Marvel', 'tavern' ),
		'stack'  => 'Marvel, sans-serif',
		'google' => 'Marvel',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'menlo' => [
		// Translators: Font family label.
		'label' => __( 'Menlo', 'tavern' ),
		'stack' => 'Menlo, Consolas, Monaco, "Andale Mono", Courier, Verdana, monospace'
	],
	'merriweather' => [
		// Translators: Font family label.
		'label'  => __( 'Merriweather', 'tavern' ),
		'stack'  => 'Merriweather, serif',
		'google' => 'Merriweather',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i', '900', '900i' ]
	],
	'merriweather-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Merriweather Sans', 'tavern' ),
		'stack'  => '"Merriweather Sans", serif',
		'google' => 'Merriweather+Sans',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i', '800', '800i' ]
	],
	'montserrat' => [
		// Translators: Font family label.
		'label'  => __( 'Montserrat', 'tavern' ),
		'stack'  => 'Montserrat, sans-serif',
		'google' => 'Montserrat',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'montserrat-alternates' => [
		// Translators: Font family label.
		'label'  => __( 'Montserrat Alternates', 'tavern' ),
		'stack'  => '"Montserrat Alternates", sans-serif',
		'google' => 'Montserrat+Alternates',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'monaco' => [
		// Translators: Font family label.
		'label' => __( 'Monaco', 'tavern' ),
		'stack' => 'Monaco, Consolas, Menlo, Courier, Verdana, sans-serif'
	],
	'muli' => [
		// Translators: Font family label.
		'label'  => __( 'Muli', 'tavern' ),
		'stack'  => 'Muli, sans-serif',
		'google' => 'Muli',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'neuton' => [
		// Translators: Font family label.
		'label'  => __( 'Neuton', 'tavern' ),
		'stack'  => 'Neuton, serif',
		'google' => 'Neuton',
		'styles' => [ '200', '300', '400', '400i', '700', '800' ]
	],
	'nobile' => [
		// Translators: Font family label.
		'label'  => __( 'Nobile', 'tavern' ),
		'stack'  => 'Nobile, sans-serif',
		'google' => 'Nobile',
		'styles' => [ '400', '400i', '500', '500i', '700', '700i' ]
	],
	'nothing-you-could-do' => [
		// Translators: Font family label.
		'label'  => __( 'Nothing You Could Do', 'tavern' ),
		'stack'  => '"Nothing You Could Do", cursive',
		'google' => 'Nothing+You+Could+Do',
		'styles' => [ '400' ]
	],
	'noticia-text' => [
		// Translators: Font family label.
		'label'  => __( 'Noticia Text', 'tavern' ),
		'stack'  => '"Noticia Text", serif',
		'google' => 'Noticia+Text',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'noto-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Noto Sans', 'tavern' ),
		'stack'  => '"Noto Sans", sans-serif',
		'google' => 'Noto+Sans',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'noto-serif' => [
		// Translators: Font family label.
		'label'  => __( 'Noto Serif', 'tavern' ),
		'stack'  => '"Noto Serif", serif',
		'google' => 'Noto+Serif',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'nunito' => [
		// Translators: Font family label.
		'label'  => __( 'Nunito', 'tavern' ),
		'stack'  => 'Nunito, sans-serif',
		'google' => 'Nunito',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'nunito-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Nunito Sans', 'tavern' ),
		'stack'  => '"Nunito Sans", sans-serif',
		'google' => 'Nunito+Sans',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'palatino' => [
		// Translators: Font family label.
		'label' => __( 'Palatino', 'tavern' ),
		'stack' => '"Palatino Linotype", Palatino, Georgia, "Times New Roman", Times, serif'
	],
	'oleo-script' => [
		// Translators: Font family label.
		'label'  => __( 'Oleo Script', 'tavern' ),
		'stack'  => '"Oleo Script", cursive',
		'google' => 'Oleo+Script',
		'styles' => [ '400', '700' ]
	],
	'oleo-script-swash-caps' => [
		// Translators: Font family label.
		'label'  => __( 'Oleo Script Swash Caps', 'tavern' ),
		'stack'  => '"Oleo Script Swash Caps", cursive',
		'google' => 'Oleo+Script+Swash+Caps',
		'styles' => [ '400', '700' ]
	],
	'open-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Open Sans', 'tavern' ),
		'stack'  => '"Open Sans", sans-serif',
		'google' => 'Open+Sans',
		'styles' => [ '300', '300i', '400', '400i', '600', '600i', '700', '700i', '800', '800i' ]
	],
	'open-sans-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Open Sans Condensed', 'tavern' ),
		'stack'  => '"Open Sans Condensed", sans-serif',
		'google' => 'Open+Sans+Condensed',
		'styles' => [ '300', '300i', '700' ]
	],
	'oswald' => [
		// Translators: Font family label.
		'label'  => __( 'Oswald', 'tavern' ),
		'stack'  => 'Oswald, sans-serif',
		'google' => 'Oswald',
		'styles' => [ '200', '300', '400', '500', '600', '700' ]
	],
	'overlock' => [
		// Translators: Font family label.
		'label'  => __( 'Overlock', 'tavern' ),
		'stack'  => 'Overlock, cursive',
		'google' => 'Overlock',
		'styles' => [ '400', '400i', '700', '700i', '900', '900i' ]
	],
	'overlock-sc' => [
		// Translators: Font family label.
		'label'  => __( 'Overlock Small Caps', 'tavern' ),
		'stack'  => '"Overlock SC", cursive',
		'google' => 'Overlock+SC',
		'styles' => [ '400' ]
	],
	'overpass' => [
		// Translators: Font family label.
		'label'  => __( 'Overpass', 'tavern' ),
		'stack'  => 'Overpass, sans-serif',
		'google' => 'Overpass',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'overpass-mono' => [
		// Translators: Font family label.
		'label'  => __( 'Overpass Mono', 'tavern' ),
		'stack'  => '"Overpass Mono", monospace',
		'google' => 'Overpass+Mono',
		'styles' => [ '300', '400', '600', '700' ]
	],
	'pacifico' => [
		// Translators: Font family label.
		'label'  => __( 'Pacifico', 'tavern' ),
		'stack'  => 'Pacifico, cursive',
		'google' => 'Pacifico',
		'styles' => [ '400' ]
	],
	'patua-one' => [
		// Translators: Font family label.
		'label'  => __( 'Patua One', 'tavern' ),
		'stack'  => '"Patua One", cursive',
		'google' => 'Patua+One',
		'styles' => [ '400' ]
	],
	'philosopher' => [
		// Translators: Font family label.
		'label'  => __( 'Philosopher', 'tavern' ),
		'stack'  => 'Philosopher, sans-serif',
		'google' => 'Philosopher',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'playball' => [
		// Translators: Font family label.
		'label'  => __( 'Playball', 'tavern' ),
		'stack'  => 'Playball, cursive',
		'google' => 'Playball',
		'styles' => [ '400' ]
	],
	'playfair-display' => [
		// Translators: Font family label.
		'label'  => __( 'Playfair Display', 'tavern' ),
		'stack'  => '"Playfair Display", Georgia, serif',
		'google' => 'Playfair+Display',
		'styles' => [ '400', '400i', '700', '700i', '900', '900i' ]
	],
	'playfair-display-sc' => [
		// Translators: Font family label.
		'label'  => __( 'Playfair Display Small Caps', 'tavern' ),
		'stack'  => '"Playfair Display SC", Georgia, serif',
		'google' => 'Playfair+Display+SC',
		'styles' => [ '400', '400i', '700', '700i', '900', '900i' ]
	],
	'poppins' => [
		// Translators: Font family label.
		'label'  => __( 'Poppins', 'tavern' ),
		'stack'  => 'Poppins, sans-serif',
		'google' => 'Poppins',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'prata' => [
		// Translators: Font family label.
		'label'  => __( 'Prata', 'tavern' ),
		'stack'  => 'Prata, serif',
		'google' => 'Prata',
		'styles' => [ '400' ]
	],
	'prompt' => [
		// Translators: Font family label.
		'label'  => __( 'Prompt', 'tavern' ),
		'stack'  => 'Prompt, sans-serif',
		'google' => 'Prompt',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'proza-libre' => [
		// Translators: Font family label.
		'label'  => __( 'Proza Libre', 'tavern' ),
		'stack'  => '"Proza Libre", sans-serif',
		'google' => 'Proza+Libre',
		'styles' => [ '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i' ]
	],
	'pt-sans' => [
		// Translators: Font family label.
		'label'  => __( 'PT Sans', 'tavern' ),
		'stack'  => '"PT Sans", sans-serif',
		'google' => 'PT+Sans',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'pt-sans-caption' => [
		// Translators: Font family label.
		'label'  => __( 'PT Sans Caption', 'tavern' ),
		'stack'  => '"PT Sans Caption", sans-serif',
		'google' => 'PT+Sans+Caption',
		'styles' => [ '400', '700' ]
	],
	'pt-sans-narrow' => [
		// Translators: Font family label.
		'label'  => __( 'PT Sans Narrow', 'tavern' ),
		'stack'  => '"PT Sans Narrow", sans-serif',
		'google' => 'PT+Sans+Narrow',
		'styles' => [ '400', '700' ]
	],
	'pt-serif' => [
		// Translators: Font family label.
		'label'  => __( 'PT Serif', 'tavern' ),
		'stack'  => '"PT Serif", serif',
		'google' => 'PT+Serif',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'pt-serif-caption' => [
		// Translators: Font family label.
		'label'  => __( 'PT Serif Caption', 'tavern' ),
		'stack'  => '"PT Serif Caption", serif',
		'google' => 'PT+Serif+Caption',
		'styles' => [ '400', '400i' ]
	],
	'puritan' => [
		// Translators: Font family label.
		'label'  => __( 'Puritan', 'tavern' ),
		'stack'  => 'Puritan, sans-serif',
		'google' => 'Puritan',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'quantico' => [
		// Translators: Font family label.
		'label'  => __( 'Quantico', 'tavern' ),
		'stack'  => 'Quantico, sans-serif',
		'google' => 'Quantico',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'quattrocento' => [
		// Translators: Font family label.
		'label'  => __( 'Quattrocento', 'tavern' ),
		'stack'  => 'Quattrocento, serif',
		'google' => 'Quattrocento',
		'styles' => [ '400', '700' ]
	],
	'quattrocento-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Quattrocento Sans', 'tavern' ),
		'stack'  => '"Quattrocento Sans", sans-serif',
		'google' => 'Quattrocento+Sans',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'quicksand' => [
		// Translators: Font family label.
		'label'  => __( 'Quicksand', 'tavern' ),
		'stack'  => 'Quicksand, sans-serif',
		'google' => 'Quicksand',
		'styles' => [ '300', '400', '500', '700' ]
	],
	'raleway' => [
		// Translators: Font family label.
		'label'  => __( 'Raleway', 'tavern' ),
		'stack'  => 'Raleway, sans-serif',
		'google' => 'Raleway',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'rambla' => [
		// Translators: Font family label.
		'label'  => __( 'Rambla', 'tavern' ),
		'stack'  => 'Rambla, sans-serif',
		'google' => 'Rambla',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'righteous' => [
		// Translators: Font family label.
		'label'  => __( 'Righteous', 'tavern' ),
		'stack'  => 'Righteous, cursive',
		'google' => 'Righteous',
		'styles' => [ '400' ]
	],
	'roboto' => [
		// Translators: Font family label.
		'label'  => __( 'Roboto', 'tavern' ),
		'stack'  => 'Roboto, Arial, Helvetica, sans-serif',
		'google' => 'Roboto',
		'styles' => [ '100', '100i', '300', '300i', '400', '400i', '500', '500i', '700', '700i', '900', '900i' ]
	],
	'roboto-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Roboto Condensed', 'tavern' ),
		'stack'  => '"Roboto Condensed", Arial, Helvetica, sans-serif',
		'google' => 'Roboto+Condensed',
		'styles' => [ '300', '300i', '400', '400i', '700', '700i' ]
	],
	'roboto-mono' => [
		// Translators: Font family label.
		'label'  => __( 'Roboto Mono', 'tavern' ),
		'stack'  => '"Roboto Mono", monospace',
		'google' => 'Roboto+Mono',
		'styles' => [ '100', '100i', '300', '300i', '400', '400i', '500', '500i', '700', '700i' ]
	],
	'roboto-slab' => [
		// Translators: Font family label.
		'label'  => __( 'Roboto Slab', 'tavern' ),
		'stack'  => '"Roboto Slab", monospace',
		'google' => 'Roboto+Slab',
		'styles' => [ '100', '300', '400', '700' ]
	],
	'rosario' => [
		// Translators: Font family label.
		'label'  => __( 'Rosario', 'tavern' ),
		'stack'  => 'Rosario, sans-serif',
		'google' => 'Rosario',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'rouge-script' => [
		// Translators: Font family label.
		'label'  => __( 'Rouge Script', 'tavern' ),
		'stack'  => '"Rouge Script", cursive',
		'google' => 'Rouge+Script',
		'styles' => [ '400' ]
	],
	'rubik' => [
		// Translators: Font family label.
		'label'  => __( 'Rubik', 'tavern' ),
		'stack'  => 'Rubik, sans-serif',
		'google' => 'Rubik',
		'styles' => [ '300', '300i', '400', '400i', '500', '500i', '700', '700i', '900', '900i' ]
	],
	'sacramento' => [
		// Translators: Font family label.
		'label'  => __( 'Sacramento', 'tavern' ),
		'stack'  => 'Sacramento, cursive',
		'google' => 'Sacramento',
		'styles' => [ '400' ]
	],
	'sansita' => [
		// Translators: Font family label.
		'label'  => __( 'Sansita', 'tavern' ),
		'stack'  => 'Sansita, sans-serif',
		'google' => 'Sansita',
		'styles' => [ '400', '400i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'satisfy' => [
		// Translators: Font family label.
		'label'  => __( 'Satisfy', 'tavern' ),
		'stack'  => 'Satisfy, cursive',
		'google' => 'Satisfy',
		'styles' => [ '400' ]
	],
	'scada' => [
		// Translators: Font family label.
		'label'  => __( 'Scada', 'tavern' ),
		'stack'  => 'Scada, sans-serif',
		'google' => 'Scada',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'shadows-into-light' => [
		// Translators: Font family label.
		'label'  => __( 'Shadows Into Light', 'tavern' ),
		'stack'  => '"Shadows Into Light", cursive',
		'google' => 'Shadows+Into+Light',
		'styles' => [ '400' ]
	],
	'shadows-into-light-two' => [
		// Translators: Font family label.
		'label'  => __( 'Shadows Into Light Two', 'tavern' ),
		'stack'  => '"Shadows Into Light Two", cursive',
		'google' => 'Shadows+Into+Light+Two',
		'styles' => [ '400' ]
	],
	'share' => [
		// Translators: Font family label.
		'label'  => __( 'Share', 'tavern' ),
		'stack'  => 'Share, sans-serif',
		'google' => 'Share',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'slabo-27px' => [
		// Translators: Font family label.
		'label'  => __( 'Slabo 27px', 'tavern' ),
		'stack'  => '"Slabo 27px", serif',
		'google' => 'Slabo+27px',
		'styles' => [ '400' ]
	],
	'source-code-pro' => [
		// Translators: Font family label.
		'label'  => __( 'Source Code Pro', 'tavern' ),
		'stack'  => '"Source Code Pro", monospace',
		'google' => 'Source+Code+Pro',
		'styles' => [ '200', '300', '400', '500', '600', '700', '900' ]
	],
	'source-sans-pro' => [
		// Translators: Font family label.
		'label'  => __( 'Source Sans Pro', 'tavern' ),
		'stack'  => '"Source Sans Pro", sans-serif',
		'google' => 'Source+Sans+Pro',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '600', '600i', '700', '700i', '900', '900i' ]
	],
	'source-serif-pro' => [
		// Translators: Font family label.
		'label'  => __( 'Source Serif Pro', 'tavern' ),
		'stack'  => '"Source Serif Pro", Georgia, serif',
		'google' => 'Source+Serif+Pro',
		'styles' => [ '400', '600', '700' ]
	],
	'space-mono' => [
		// Translators: Font family label.
		'label'  => __( 'Space Mono', 'tavern' ),
		'stack'  => '"Space Mono", monospace',
		'google' => 'Space+Mono',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'spectral' => [
		// Translators: Font family label.
		'label'  => __( 'Spectral', 'tavern' ),
		'stack'  => 'Spectral, serif',
		'google' => 'Spectral',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i' ]
	],
	'spectral-sc' => [
		// Translators: Font family label.
		'label'  => __( 'Spectral Small Caps', 'tavern' ),
		'stack'  => '"Spectral SC", serif',
		'google' => 'Spectral+SC',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i' ]
	],
	'tahoma' => [
		// Translators: Font family label.
		'label' => __( 'Tahoma', 'tavern' ),
		'stack' => 'Tahoma, Geneva, Verdana, sans-serif'
	],
	'tangerine' => [
		// Translators: Font family label.
		'label'  => __( 'Tangerine', 'tavern' ),
		'stack'  => 'Tangerine, cursive',
		'google' => 'Tangerine',
		'styles' => [ '400', '700' ]
	],
	'taviraj' => [
		// Translators: Font family label.
		'label'  => __( 'Taviraj', 'tavern' ),
		'stack'  => 'Taviraj, serif',
		'google' => 'Taviraj',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'times-new-roman' => [
		// Translators: Font family label.
		'label' => __( 'Times New Roman', 'tavern' ),
		'stack' => '"Times New Roman", Times, Georgia, serif'
	],
	'tinos' => [
		// Translators: Font family label.
		'label'  => __( 'Tinos', 'tavern' ),
		'stack'  => 'Tinos, serif',
		'google' => 'Tinos',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'titillium-web' => [
		// Translators: Font family label.
		'label'  => __( 'Titillium Web', 'tavern' ),
		'stack'  => '"Titillium Web", sans-serif',
		'google' => 'Titillium+Web',
		'styles' => [ '200', '200i', '300', '300i', '400', '400i', '600', '600i', '700', '700i', '900' ]
	],
	'trebuchet-ms' => [
		// Translators: Font family label.
		'label' => __( 'Trebuchet MS', 'tavern' ),
		'stack' => '"Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Arial, sans-serif'
	],
	'trirong' => [
		// Translators: Font family label.
		'label'  => __( 'Trirong', 'tavern' ),
		'stack'  => 'Trirong, serif',
		'google' => 'Trirong',
		'styles' => [ '100', '100i', '200', '200i', '300', '300i', '400', '400i', '500', '500i', '600', '600i', '700', '700i', '800', '800i', '900', '900i' ]
	],
	'ubuntu' => [
		// Translators: Font family label.
		'label'  => __( 'Ubuntu', 'tavern' ),
		'stack'  => 'Ubuntu, sans-serif',
		'google' => 'Ubuntu',
		'styles' => [ '300', '300i', '400', '400i', '500', '500i', '700', '700i' ]
	],
	'ubuntu-condensed' => [
		// Translators: Font family label.
		'label'  => __( 'Ubuntu Condensed', 'tavern' ),
		'stack'  => '"Ubuntu Condensed", sans-serif',
		'google' => 'Ubuntu+Condensed',
		'styles' => [ '400' ]
	],
	'ubuntu-mono' => [
		// Translators: Font family label.
		'label'  => __( 'Ubuntu Mono', 'tavern' ),
		'stack'  => '"Ubuntu Mono", monospace',
		'google' => 'Ubuntu+Mono',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'ultra' => [
		// Translators: Font family label.
		'label'  => __( 'Ultra', 'tavern' ),
		'stack'  => 'Ultra, cursive',
		'google' => 'Ultra',
		'styles' => [ '400' ]
	],
	'unna' => [
		// Translators: Font family label.
		'label'  => __( 'Unna', 'tavern' ),
		'stack'  => 'Unna, serif',
		'google' => 'Unna',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'verdana' => [
		// Translators: Font family label.
		'label' => __( 'Verdana', 'tavern' ),
		'stack' => 'Verdana, sans-serif'
	],
	'volkhov' => [
		// Translators: Font family label.
		'label'  => __( 'Volkhov', 'tavern' ),
		'stack'  => 'Volkhov, serif',
		'google' => 'Volkhov',
		'styles' => [ '400', '400i', '700', '700i' ]
	],
	'vollkorn' => [
		// Translators: Font family label.
		'label'  => __( 'Vollkorn', 'tavern' ),
		'stack'  => 'Vollkorn, serif',
		'google' => 'Vollkorn',
		'styles' => [ '400', '400i', '600', '600i', '700', '700i', '900', '900i' ]
	],
	'work-sans' => [
		// Translators: Font family label.
		'label'  => __( 'Work Sans', 'tavern' ),
		'stack'  => '"Work Sans", sans-serif',
		'google' => 'Work+Sans',
		'styles' => [ '100', '200', '300', '400', '500', '600', '700', '800', '900' ]
	],
	'yellowtail' => [
		// Translators: Font family label.
		'label'  => __( 'Yellowtail', 'tavern' ),
		'stack'  => 'Yellowtail, cursive',
		'google' => 'Yellowtail',
		'styles' => [ '400' ]
	],
	'zilla-slab' => [
		// Translators: Font family label.
		'label'  => __( 'Zilla Slab', 'tavern' ),
		'stack'  => '"Zilla Slab", serif',
		'google' => 'Zilla+Slab',
		'styles' => [ '300', '300i', '400', '400i', '500', '500i', '700', '700i' ]
	]
];
