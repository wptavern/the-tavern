<?php
/**
 * Theme filters and actions.
 *
 * Adds and defines custom filters and actions the theme adds to core WordPress.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

namespace Tavern;

use Tavern\Settings\Options;
use Tavern\Tools\Config;
use Tavern\Tools\Svg;
use Tavern\Template\ErrorPage;

# Add social icons.
add_filter( 'walker_nav_menu_start_el', __NAMESPACE__ . '\nav_menu_social_icons', 10, 4 );

add_filter( 'pre_option_image_default_size', function( $size ) {
	return 'full';
} );

add_filter( 'render_block_dsb/details-summary-block', function( $content, $block ) {

	//wp_die( var_dump( $content ) );

	preg_match( "/<details(.*?)<div>(.*?)<\/div><\/details>/si", trim( $content ), $matches );

	if ( ! empty( $matches ) && isset( $matches[1] ) && isset( $matches[2] ) ) {


		$text = str_replace( ['<p>', '</p>'], '', $matches[2] );

		$chat = new \Tavern\Template\Chat( $text );

		$transcript = $chat->get_transcript();

		if ( $transcript ) {
			return sprintf(
				'<details%s<div>%s</div></details>',
				$matches[1],
				$transcript
			);
		}

		//wp_die( var_dump( $chat->get_transcript() ) );

	}
	//var_dump( $matches );



	return $content;
}, 10, 2 );


/**
 * Adds error data for the 404 content template. Passes in the `ErrorPage` object
 * as the `$error` variable.
 *
 * @since  1.0.0
 * @access public
 * @param  \Hybrid\Tools\Collection  $data
 * @return \Hybrid\Tools\Collection
 */
add_filter( 'hybrid/view/content/data', function( $data ) {

	if ( is_404() ) {
		$data->add( 'error', new ErrorPage() );
	}

	return $data;

} );

/**
 * Filters the post states on the manage pages screen. Adds a "404 Page" state
 * to show users which page has been assigned as their 404 page.
 *
 * @since  1.0.0
 * @access public
 * @param  array    $states
 * @param  \WP_Post $post
 * @return array
 */
add_filter( 'display_post_states', function( $states, $post ) {

	//if ( 'page' === $post->post_type && $post->ID === absint( Options::get( 'error_page' ) ) ) {
	//	$states['tavern_error_404'] = __( '404 Page', 'tavern' );
	//}

	return $states;

}, 10, 2 );

/**
 * Filters the excerpt length.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
add_filter( 'excerpt_length', function() {
	return 20;
}, 5 );

/**
 * Filters the excerpt more link.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
add_filter( 'excerpt_more', function() {

	return sprintf(
		'&thinsp;&hellip;&thinsp;<a href="%s" class="entry__more-link screen-reader-text">%s</a>',
		esc_url( get_permalink() ),
		sprintf(
			// Translators: %s is the post title for screen readers.
			esc_html__( 'Continue reading&nbsp;%s&nbsp;&rarr;', 'tavern' ),
			the_title( '', '', false )
		)
	);
} );

/**
 * Adds social icon SVGs to the social menu.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $item_output
 * @param  object  $item
 * @param  int     $depth
 * @param  array   $args
 * @return string
 */
function nav_menu_social_icons( $item_output, $item, $depth, $args ) {

	if ( 'social' === $args->theme_location ) {

		foreach ( Config::get( 'social-icons' ) as $url => $icon ) {

			if ( false !== strpos( $item->url, $url ) ) {
				$item_output = str_replace(
					$args->link_before,
					Svg::render( $icon ) . $args->link_before,
					$item_output
				);
			}
		}
	}

	return $item_output;
}

add_filter( 'nav_menu_css_class', function( $classes, $items, $args, $depth ) {

	if ( 'primary' === $args->theme_location ) {
		$classes[] = 'md:inline';
	} elseif ( 'footer' === $args->theme_location ) {
		$classes[] = 'inline mx-4';
	} elseif ( 'social' === $args->theme_location ) {
		$classes[] = 'inline mx-2';
	}

	return $classes;

}, 15, 4 );

add_filter( 'nav_menu_link_attributes', function( $attr, $item, $args, $depth ) {

	if ( 'primary' === $args->theme_location ) {
		$attr['class'] .= ' block md:inline-block px-8 py-4 md:ml-8 md:px-0 md:py-0 md:h-full text-white md:text-red-500 no-underline hover:underline focus:underline';
	} elseif ( 'footer' === $args->theme_location ) {
		$attr['class'] .= ' no-underline hover:underline focus:underline';
	} elseif ( 'social' === $args->theme_location ) {
		$attr['class'] .= ' inline-flex';
	}

	return $attr;

}, 15, 4 );

add_filter( 'get_search_form', function( $form ) {

	$form = sprintf(
		'<form role="search" method="get" class="search-form hidden md:block w-full md:h-16 flex-grow md:flex md:items-center md:justify-end ml-auto pr-8" action="%s">
			<label class="w-full">
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field w-full px-4 border-gray-700 bg-gray-900 text-gray-300" placeholder="Search &hellip;" value="%s" name="s" />
			</label>
		</form>',
		esc_url( home_url( '/' ) ),
		get_search_query()
	);

	return $form;
} );

/**
 * Converts old page template slugs to the updated slug.
 *
 * @since  2.0.0
 * @access public
 * @return void
 */
add_action( 'template_redirect', function() {

	if ( is_singular() ) {
		$post_id = get_queried_object_id();

		if ( 'template-entry-content-only.php' === get_page_template_slug( $post_id ) ) {
			update_post_meta( $post_id, '_wp_page_template', 'template-canvas.php' );
		}
	}

}, ~PHP_INT_MAX );


/**
 * Changes the `<span>` wrapper for entry terms to a `<div>`.
 *
 * @since  2.1.0
 * @access public
 * @param  string  $html
 * @return string
 */
add_filter( 'hybrid/post/terms', function( $html ) {

	return str_replace(
		[ '<span', '</span>' ],
		[ '<div',  '</div>'  ],
		$html
	);

} );
