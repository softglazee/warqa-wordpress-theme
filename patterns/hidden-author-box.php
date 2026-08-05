<?php
/**
 * Title: Author box
 * Slug: warqa/hidden-author-box
 * Inserter: no
 *
 * @package Warqa
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"}}},"backgroundColor":"surface","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:avatar {"size":64,"style":{"border":{"radius":"50%"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Written by', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-author-biography {"textColor":"muted","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
