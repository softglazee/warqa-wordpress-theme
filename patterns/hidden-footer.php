<?php
/**
 * Title: Footer content
 * Slug: warqa/hidden-footer
 * Inserter: no
 *
 * @package Warqa
 */

?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"34%"} -->
<div class="wp-block-column" style="flex-basis:34%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":140} /-->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'A journal about how the work actually gets made. Independent, reader funded, and edited by people who have done the job. Replace this with your own description.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#14161a","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"bluesky"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"rss"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Sections', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"displayAsDropdown":true,"showPostCounts":false,"fontSize":"small"} /-->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Choose a section to browse the archive.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Publication', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Search the archive', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'warqa' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'warqa' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">©</p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"level":0,"isLink":true,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Set in Newsreader and Inter. No trackers on this page.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
