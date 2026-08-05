<?php
/**
 * Title: Search band
 * Slug: warqa/section-search-band
 * Categories: text, warqa-sections
 * Keywords: search, find, archive, filter, bar
 * Description: A centred search bar on a surface band, for the top of an archive or blog page.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"},"bottom":{"color":"var:preset|color|line","width":"1px"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Looking for something?', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'The whole archive is open and free to read.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'warqa' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search the archive', 'search form placeholder', 'warqa' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'warqa' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
