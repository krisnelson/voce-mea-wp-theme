<?php
// given a post id, return a list of related posts as ids (default of 10)

// uses the jetpack version
function get_related_post_ids( $post_id, $number_of_results = 10 ) {
	// see: https://jetpack.com/support/related-posts/customize-related-posts/#shortcode
	$related_post_ids = array();

  if ( class_exists( 'Jetpack_RelatedPosts' ) && method_exists( 'Jetpack_RelatedPosts', 'init_raw' ) ) {
    $related = Jetpack_RelatedPosts::init_raw()
      ->set_query_name( 'get_related_post_ids' ) // Optional, name can be anything
      ->get_for_post_id(
          $post_id,
          array( 'size' => $number_of_results )
      );
  }

  $related_post_ids = wp_list_pluck( $related, "id");
  //echo "<pre>" . var_dump($related_post_ids) . "</pre>";

  return $related_post_ids;


	//error_log( "jetpackme_custom_related: " . print_r($related, true) );  // DEBUG
  //if ( $related ) {
  //  foreach ( $related as $result ) {
  //     // Get the related post IDs
  //     $related_post_id = get_post( $result[ 'id' ] );
  //     $related_post_ids[] = $related_post_id;
  //     // From there you can do just about anything. Here we get the post titles
  //     //$posts_titles[] = $related_post->post_title;
  //   }
  // }

  // echo "<pre>" . var_dump($related_post_ids) . "</pre>";

  // return $related_post_ids;
}

// see: http://codeitdown.com/wordpress-related-posts/
function get_related_post_ids_mysql( $post_id, $number_of_results = 10 ) {
  global $wpdb;
  if(!$post_id) { return; }
  $post_tags = wp_get_post_tags( $post_id );
  if(!$post_tags) { return; }

  $tag_ids = wp_list_pluck( $post_tags, 'term_id' );


  $query = "
    SELECT ".$wpdb->posts.".ID, COUNT(".$wpdb->posts.".ID) as q
    FROM ".$wpdb->posts." INNER JOIN ".$wpdb->term_relationships."
    ON (".$wpdb->posts.".ID = ".$wpdb->term_relationships.".object_id)
    WHERE ".$wpdb->posts.".ID NOT IN (".$post_id.")
    AND ".$wpdb->term_relationships.".term_taxonomy_id IN (".implode(",",$tag_ids).")
    AND ".$wpdb->posts.".post_type = 'post'
    AND ".$wpdb->posts.".post_status = 'publish'
    GROUP BY ".$wpdb->posts.".ID
    ORDER BY q
    DESC LIMIT ".$number_of_results."";

    //echo "<pre>" . var_dump($query) . "</pre>";

    $related_post_results = $wpdb->get_results($query, OBJECT);
    //echo "<pre>" . var_dump($related_post_results) . "</pre>";
    wp_reset_query();

    $related_post_ids = wp_list_pluck( $related_post_results, "ID");
    //echo "<pre>" . var_dump($related_post_ids) . "</pre>";
    return $related_post_ids;
}
?>
