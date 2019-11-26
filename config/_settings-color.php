<?php
/**
 * Customize Colors Config.
 *
 * Defines the color options available in the WordPress customizer.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

return [
	'body-background' => [
		'color'       => 'ffffff',
		'label'       => __( 'Background Color', 'tavern' ),
		'description' => __( 'Background color used for body of the site.', 'tavern' ),
		'section'     => 'theme_body_background',
		'color'       => function() {
			return \Tavern\body_bg_color_compat();
		}
	],
	'content-background' => [
		'color'       => 'ffffff',
		'label'       => __( 'Background Color', 'tavern' ),
		'description' => __( 'Background color used for content of the site.', 'tavern' ),
		'section'     => 'theme_content_background'
	],
	'primary' => [
		'color'       => '2d3748',
		'label'       => __( 'Primary: Text', 'tavern' ),
		'description' => __( 'Color used for most text on the site.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'primary-link' => [
		'color'       => 'b11a21',
		'label'       => __( 'Primary: Link', 'tavern' ),
		'description' => __( 'Color used for links in primary text.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'primary-link-hover' => [
		'color'       => '222222',
		'label'       => __( 'Primary: Link Hover', 'tavern' ),
		'description' => __( 'Color used when hovering or focusing a link.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'secondary' => [
		'color'       => '718096',
		'label'       => __( 'Secondary: Text', 'tavern' ),
		'description' => __( 'Color used for secondary text.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'secondary-link' => [
		'color'           => 'C85F64',
		'label'           => __( 'Secondary: Link', 'tavern' ),
		'description'     => __( 'Color used for links in secondary text.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'secondary-link-hover' => [
		'color'           => '222222',
		'label'           => __( 'Secondary: Link Hover', 'tavern' ),
		'description'     => __( 'Color used when hovering or focusing a link.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'headings' => [
		'color'           => '22292f',
		'label'           => __( 'Headings', 'tavern' ),
		'description'     => __( 'Color used for text headings.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'border' => [
		'color'           => 'cbd5e0',
		'label'           => __( 'Border', 'tavern' ),
		'description'     => __( 'Color used for borders in general.', 'tavern' ),
		'section'         => 'theme_content_colors'
	],
	'pagination' => [
		'label'           => __( 'Pagination', 'tavern' ),
		'description'     => __( 'Color used for pagination links.', 'tavern' ),
		'section'         => 'theme_content_colors',
		'color'           => function() {
			$color = \Tavern\Tools\Mod::color( 'content-background' );
			return $color ?: 'ffffff';
		}
	],
	'pagination-hover' => [
		'label'           => __( 'Pagination Hover', 'tavern' ),
		'description'     => __( 'Color used when hovering or focusing a pagination link.', 'tavern' ),
		'section'         => 'theme_content_colors',
		'color'           => function() {
			$color = \Tavern\Tools\Mod::color( 'content-background' );
			return $color ?: 'ffffff';
		}
	],
	'pagination-background' => [
		'label'           => __( 'Pagination Background', 'tavern' ),
		'description'     => __( 'Background color used for pagination links.', 'tavern' ),
		'section'         => 'theme_content_colors',
		'color'           => function() {
			return \Tavern\Tools\Mod::color( 'primary-link' );
		}
	],
	'pagination-background-hover' => [
		'color'           => 'e1e1e1',
		'label'           => __( 'Pagination Background Hover', 'tavern' ),
		'description'     => __( 'Background color used when hovering or focusing a pagination link.', 'tavern' ),
		'section'         => 'theme_content_colors',
		'color'           => function() {
			return \Tavern\Tools\Mod::color( 'primary-link-hover' );
		}
	],


	'header-background' => [
		'color'           => 'ffffff',
		'label'           => __( 'Header: Background', 'tavern' ),
		'description'     => __( 'Background color for the entire header block.', 'tavern' ),
		'section'         => 'theme_header_background'
	],
	'header-border' => [
		'color'           => 'f1f0ee',
		'label'           => __( 'Header: Border', 'tavern' ),
		'description'     => __( 'Color used for borders in the header.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'branding-background' => [
		'color'           => '',
		'label'           => __( 'Header: Branding Background', 'tavern' ),
		'description'     => __( 'Background color for the branding area.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'header-title' => [
		'color'           => '2d3748',
		'label'           => __( 'Header: Title Text', 'tavern' ),
		'description'     => __( 'Color for the branding title text.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'header-title-hover' => [
		'color'           => '222222',
		'label'           => __( 'Header: Title Text Hover', 'tavern' ),
		'description'     => __( 'Color used when hovering or focusing a link.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'header-description' => [
		'color'           => '4a5568',
		'label'           => __( 'Header: Tagline Text', 'tavern' ),
		'description'     => __( 'Color used for the branding tagline text.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'menu-primary' => [
		'color'           => '718096',
		'label'           => __( 'Header: Menu Link', 'tavern' ),
		'description'     => __( 'Color for the primary menu links.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'menu-primary-hover' => [
		'color'           => '222222',
		'label'           => __( 'Header: Menu Link Hover', 'tavern' ),
		'description'     => __( 'Color used when hovering or focusing a link.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'menu-primary-background-hover' => [
		'color'           => '',
		'label'           => __( 'Menu Link Background Hover', 'tavern' ),
		'description'     => __( 'Background color used when hovering or focusing a link.', 'tavern' ),
		'section'         => 'theme_header_colors'
	],
	'menu-primary-toggle' => [
		'label'           => __( 'Mobile Menu Button', 'tavern' ),
		'description'     => __( 'Color for the mobile menu toggle button.', 'tavern' ),
		'color'           => function() {
			$color = \Tavern\Tools\Mod::color( 'header-background' );
			$color = $color ?: \Tavern\Tools\Mod::color( 'header-background' );
			$color = $color ?: get_background_color();
			return $color ?: 'ffffff';
		},
		'section'         => 'theme_header_colors'
	],
	'menu-primary-toggle-background' => [
		'label'           => __( 'Mobile Menu Button Background', 'tavern' ),
		'description'     => __( 'Background color for the mobile menu toggle button.', 'tavern' ),
		'color'           => function() {
			return \Tavern\Tools\Mod::color( 'header-title' );
		},
		'section'         => 'theme_header_colors'
	],
	'menu-primary-toggle-background-hover' => [
		'label'           => __( 'Mobile Menu Button Background Hover', 'tavern' ),
		'description'     => __( 'Background color for the mobile menu toggle button.', 'tavern' ),
		'color'           => function() {
			return \Tavern\Tools\Mod::color( 'header-title-hover' );
		},
		'section'         => 'theme_header_colors'
	],
	'footer-background' => [
		'label'           => __( 'Footer: Background', 'tavern' ),
		'description'     => __( 'Background color for the entire footer section.', 'tavern' ),
		'color'           => '22292f',
		'section'         => 'theme_footer_background'
	],
	'footer' => [
		'label'           => __( 'Footer: Text', 'tavern' ),
		'description'     => __( 'Color used for most text in the footer.', 'tavern' ),
		'color'           => 'cbd5e0',
		'section'         => 'theme_footer_colors'
	],
	'footer-border' => [
		'color'           => 'f3f3f3',
		'label'           => __( 'Footer: Border', 'tavern' ),
		'description'     => __( 'Color used for borders in the footer.', 'tavern' ),
		'section'         => 'theme_footer_colors'
	],
	'footer-link' => [
		'label'           => __( 'Footer: Link', 'tavern' ),
		'description'     => __( 'Color for the links in the footer.', 'tavern' ),
		'color'           => 'e2e8f0',
		'section'         => 'theme_footer_colors'
	],
	'footer-link-hover' => [
		'label'           => __( 'Footer: Link Hover', 'tavern' ),
		'description'     => __( 'Color used when hovering or focusing a link.', 'tavern' ),
		'color'           => 'ffffff',
		'section'         => 'theme_footer_colors'
	],
	'sidebar-footer-background' => [
		'label'           => __( 'Sidebar Footer: Background', 'tavern' ),
		'description'     => __( 'Background color for the entire footer section.', 'tavern' ),
		'color'           => 'fcfcfc',
		'section'         => 'theme_sidebar_footer_background'
	],
	'sidebar-footer' => [
		'label'           => __( 'Sidebar Footer: Text', 'tavern' ),
		'description'     => __( 'Color used for most text in the footer.', 'tavern' ),
		'color'           => '4a5568',
		'section'         => 'theme_footer_colors'
	],
	'sidebar-footer-headings' => [
		'label'           => __( 'Sidebar Footer: Headings', 'tavern' ),
		'description'     => __( 'Color used for most text in the footer.', 'tavern' ),
		'color'           => '2d3748',
		'section'         => 'theme_footer_colors'
	],
	'sidebar-footer-link' => [
		'label'           => __( 'Sidebar Footer: Link', 'tavern' ),
		'description'     => __( 'Color for the links in the footer.', 'tavern' ),
		'color'           => function() {
			return \Tavern\Tools\Mod::color( 'primary-link' );
		},
		'section'         => 'theme_footer_colors'
	],
	'sidebar-footer-link-hover' => [
		'label'           => __( 'Sidebar Footer: Link Hover', 'tavern' ),
		'description'     => __( 'Color used when hovering or focusing a link.', 'tavern' ),
		'color'           => function() {
			return \Tavern\Tools\Mod::color( 'primary-link-hover' );
		},
		'section'         => 'theme_footer_colors'
	]
];
