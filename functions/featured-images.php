<?php

// Return the actual URL of a "thumbnail" based on passed in $post_id
function get_featured_image_url( $post_id, $size ) {
  // for current post, call it with like $url = get_featured_image_url( get_the_ID(), 'full' );
  //$post_id = get_the_ID(); // try this just in case
  if (!$post_id) { return; } // bail if we still don't have a post_id
  if (!size) { $size = 'thumbnail'; } // default to the "thumbnail" sized image if we have no size specified

  if ( has_post_thumbnail( $post_id ) ) {
    $thumb_id = get_post_thumbnail_id($post_id);
    $thumbsrc = wp_get_attachment_image_src($thumb_id, $size);
    return $thumbsrc[0];
  }
  else { return; }
}

?>
