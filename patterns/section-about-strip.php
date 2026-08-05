<?php
/**
 * Title: About strip
 * Slug: warqa/section-about-strip
 * Categories: about, text
 * Keywords: about, mission, statement, intro
 * Description: A two column statement introducing the publication, with a short label beside a longer paragraph.
 *
 * @package Warqa
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Who we are', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'We are a small desk covering how film and sound actually get made. No sponsored posts, no affiliate links, and no reviews written from a press release.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"muted"} -->
<p class="has-muted-color has-text-color" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Everything is edited before it goes out, corrections are printed on the piece itself, and the archive stays free. Replace this text with your own.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
