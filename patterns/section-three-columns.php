<?php
/**
 * Title: Three column text
 * Slug: warqa/section-three-columns
 * Categories: text
 * Keywords: columns, text, three, essay
 * Description: Three columns of running text under a shared heading, in the style of a newspaper leader.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":2,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'What we believe', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Craft reporting is worth doing properly. That means talking to the people holding the tools rather than reading the press release, and printing what they actually said.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Kit is not the story, but it is never nothing either. What a tool makes easy shapes what gets made, and that is worth writing about honestly.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'A reader who finishes one piece is worth more than ten who bounce. Replace these three columns with your own position.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
