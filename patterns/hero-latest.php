<?php
/**
 * Title: Hero, latest article
 * Slug: warqa/hero-latest
 * Categories: featured, banner
 * Description: A large featured article introduction for the top of a home page.
 * Keywords: hero, featured, intro
 * Inserter: true
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:0.08em"><?php echo esc_html__( 'Featured', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Write the headline that earns the click.', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php echo esc_html__( 'A short standfirst goes here. Two lines is usually enough to tell a reader whether the article is for them.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
