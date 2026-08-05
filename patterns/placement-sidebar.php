<?php
/**
 * Title: Reserved placement, sidebar
 * Slug: warqa/placement-sidebar
 * Categories: banner
 * Description: A layout-stable reserved area in the sidebar. Contains no third-party code.
 * Keywords: placement, sidebar, reserved
 * Inserter: true
 *
 * @package Warqa
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":"250px"}},"backgroundColor":"surface","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="min-height:250px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Reserved area. Replace this paragraph with your own content block.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
