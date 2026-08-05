<?php
/**
 * Warqa functions and definitions.
 *
 * @package Warqa
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'warqa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function warqa_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'style', 'script' ) );

		load_theme_textdomain( 'warqa', get_template_directory() . '/languages' );
	}
endif;
add_action( 'after_setup_theme', 'warqa_setup' );

/**
 * Enqueues the theme stylesheet.
 *
 * @since 1.0.0
 * @return void
 */
function warqa_enqueue_styles() {
	wp_enqueue_style(
		'warqa-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'warqa_enqueue_styles' );

/**
 * Registers the block style variations used by the theme's patterns.
 *
 * Styles are declared here rather than in theme.json so that each one carries
 * a translatable label in the editor.
 *
 * @since 1.0.0
 * @return void
 */
function warqa_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'warqa-rule-top',
			'label' => esc_html__( 'Rule above', 'warqa' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'warqa-kicker',
			'label' => esc_html__( 'Kicker', 'warqa' ),
		)
	);

	register_block_style(
		'core/quote',
		array(
			'name'  => 'warqa-pull',
			'label' => esc_html__( 'Pull quote', 'warqa' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'warqa-framed',
			'label' => esc_html__( 'Framed', 'warqa' ),
		)
	);

	register_block_style(
		'core/categories',
		array(
			'name'  => 'warqa-chips',
			'label' => esc_html__( 'Chips', 'warqa' ),
		)
	);
}
add_action( 'init', 'warqa_register_block_styles' );

/**
 * Registers the pattern category used by the theme's own patterns.
 *
 * Patterns themselves are registered automatically from the /patterns
 * directory; this adds the grouping they are listed under.
 *
 * @since 1.0.0
 * @return void
 */
function warqa_register_pattern_category() {
	register_block_pattern_category(
		'warqa-sections',
		array(
			'label'       => esc_html__( 'Warqa sections', 'warqa' ),
			'description' => esc_html__( 'Full width sections for building a front page.', 'warqa' ),
		)
	);
}
add_action( 'init', 'warqa_register_pattern_category' );
