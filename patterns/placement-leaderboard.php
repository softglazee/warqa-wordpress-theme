<?php
/**
 * Title: Reserved placement, leaderboard
 * Slug: warqa/placement-leaderboard
 * Categories: banner
 * Description: A layout-stable reserved area above article content. Contains no third-party code. Drop your own block here.
 * Keywords: placement, banner, reserved
 * Inserter: true
 *
 * @package Warqa
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":"90px"}},"backgroundColor":"surface","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="min-height:90px;margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Reserved area. Replace this paragraph with your own content block.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
