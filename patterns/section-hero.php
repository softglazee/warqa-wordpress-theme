<?php
/**
 * Title: Hero, full width
 * Slug: warqa/section-hero
 * Categories: banner, featured
 * Keywords: hero, cover, masthead, header, landing
 * Description: A full width hero with a kicker, a large headline and a standfirst. Add your own background image to the cover block.
 *
 * @package Warqa
 */

?>
<!-- wp:cover {"overlayColor":"contrast","dimRatio":40,"minHeight":72,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:72vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Replace this kicker', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"base","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-base-color has-text-color has-xx-large-font-size"><?php echo esc_html__( 'A headline that carries the whole page.', 'warqa' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"base","fontSize":"large"} -->
<p class="has-base-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Two lines of standfirst is usually enough. Select the cover block to add your own background image behind this text.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
