<?php
/**
 * Title: 404 content
 * Slug: warqa/hidden-404
 * Inserter: no
 *
 * @package Warqa
 */

?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html__( 'Page not found', 'warqa' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html__( 'The page you asked for is not here. Try a search instead.', 'warqa' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'warqa' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'warqa' ); ?>","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /-->
