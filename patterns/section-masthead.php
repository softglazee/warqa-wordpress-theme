<?php
/**
 * Title: Masthead with heading
 * Slug: warqa/section-masthead
 * Categories: banner, featured, warqa-sections
 * Keywords: masthead, intro, heading, statement, title
 * Description: A banded masthead carrying the page heading, a kicker and a standfirst. Use it once per page so the page has a single top level heading.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Film, sound and production craft', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'The work behind the work.', 'warqa' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Reporting and criticism on how things are actually made, for the people making them. Long pieces, edited properly, with nothing in your way while you read.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
