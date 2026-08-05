<?php
/**
 * Title: Quotation band
 * Slug: warqa/section-quote
 * Categories: text, banner
 * Keywords: quote, pull quote, statement, band
 * Description: A full width band holding a single large quotation, for breaking up a long page.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"x-large","fontFamily":"heading"} -->
<p class="has-text-align-center has-heading-font-family has-x-large-font-size" style="font-style:italic;font-weight:400"><?php echo esc_html__( '“Replace this with a line worth stopping for. One sentence is usually enough.”', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--40);text-transform:uppercase"><?php echo esc_html__( 'Attribution', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
