<?php
/**
 * Title: Advertise with us
 * Slug: warqa/page-advertise
 * Categories: about, text
 * Keywords: advertise, media kit, sponsorship, rates, placements
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A media kit page describing the reserved placement areas, readership and rates. The placements are empty layout containers, so you add your own advertising block or plugin.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Media kit', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Advertise where people actually read.', 'warqa' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Two placements per page, both reserved in the layout so nothing jumps while the page loads. No pop ups, no interstitials, no autoplay.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"warqa/section-numbers"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'The placements', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html__( 'Below are the two reserved areas exactly as they appear on the site. They ship empty: drop in your own block, or a block from an advertising plugin, and the space is already held open.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Leaderboard, above the article', 'warqa' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"warqa/placement-leaderboard"} /-->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Sidebar, beside the article', 'warqa' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:pattern {"slug":"warqa/placement-sidebar"} /--></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"warqa/section-disclosure"} /-->

<!-- wp:pattern {"slug":"warqa/section-faq"} /-->

<!-- wp:pattern {"slug":"warqa/section-cta-split"} /-->
