<?php
/**
 * Title: Legal document
 * Slug: warqa/page-document
 * Categories: text, about
 * Keywords: privacy, cookies, terms, policy, legal, document
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A long form document layout for a privacy policy, cookie notice or terms page, with a last updated line and headed sections.
 *
 * @package Warqa
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--line);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Privacy notice', 'warqa' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Last updated: replace this date', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"large"} -->
<p class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'This notice explains what this site collects, why, and what you can ask us to do about it. Replace every section below with wording that matches how your own site actually behaves.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'What we collect', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Describe here what is stored when somebody reads a page, leaves a comment, or writes to you. Be specific about what is kept and for how long.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Cookies', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'List the cookies your site actually sets. A plain WordPress install sets cookies when somebody comments or signs in, and nothing else. If you add analytics or advertising later, say so here.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Who else sees it', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Name your host, and any service that processes data on your behalf. If nothing leaves your own server, say that plainly, because it is worth saying.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Your rights', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Explain how somebody asks for a copy of what you hold, asks for it to be corrected, or asks for it to be deleted, and how long you take to answer.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Questions about this notice go to the address on the contact page.', 'warqa' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
