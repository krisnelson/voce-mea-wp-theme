<?php
function show_items_in_category( $category_name, $number_of_results = 4, $exclude_ids = '' ) {
  if(!$category_name) { return; }
  $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_thumb,g_auto";
  $featured_image_url = get_featured_image_url( $post_id, 'thumbnail' );

  echo '<ul style="list-style-type: none;" class="">';

  // the query
  $the_query = new WP_Query( array(
      'category_name' => $category_name,
      'meta_key' => '_thumbnail_id',
      'date_query' => array('before' => date('Y-m-d', strtotime('1 year')), 'after' => date('Y-m-d', strtotime('-4 years')) ),
      'orderby' => 'rand',
      'posts_per_page' => $number_of_results,
      'post__not_in' => $exclude_ids
    )
  );
  // The Loop
  if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
          $the_query->the_post();
              if ( has_post_thumbnail() ) {
                echo '<li>';
                echo '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
              } else {
                // if no featured image is found
                echo '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
              } // end check for thumbnail
            } // endwhile
  } // end Loop
  /* Restore original Post Data */
  wp_reset_postdata();


  echo '</ul>';

} ?>
