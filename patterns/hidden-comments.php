<?php
/**
 * Title: Comments
 * Slug: warqa/hidden-comments
 * Inserter: no
 *
 * @package Warqa
 */

?>
<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"}}}} -->
<div class="wp-block-comments" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--50)"><!-- wp:comments-title {"fontSize":"large"} /-->

<!-- wp:comment-template -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"48px"} -->
<div class="wp-block-column" style="flex-basis:48px"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:comment-date {"fontSize":"small","textColor":"muted"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"small"} /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->
<!-- wp:comments-pagination-numbers /-->
<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} /--></div>
<!-- /wp:comments -->
