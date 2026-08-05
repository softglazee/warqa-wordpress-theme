<?php
/**
 * Title: Funding disclosure
 * Slug: warqa/section-disclosure
 * Categories: about, text
 * Keywords: disclosure, funding, transparency, ethics, advertising
 * Description: A short transparency notice explaining how the publication is funded and how advertising is handled.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'How this is funded', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Readers pay for most of what you see here. Where a page carries advertising it is marked, it is never written by us, and it never decides what gets covered.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Replace this with your own funding and advertising policy, and link to it from the footer.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
