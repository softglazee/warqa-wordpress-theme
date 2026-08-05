<?php
/**
 * Title: Sidebar content
 * Slug: warqa/hidden-sidebar
 * Inserter: no
 *
 * @package Warqa
 */

?>
<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Latest', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true} /-->

<!-- wp:heading {"level":2,"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'Topics', 'warqa' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true} /-->

<!-- wp:pattern {"slug":"warqa/placement-sidebar"} /-->
