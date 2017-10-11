<?php
function get_items_in_category( $category_name, $number_of_results = 4, $exclude_ids = '' ) {
  global $wpdb;
  if(!$category_name) { return; }
  $category_id = get_cat_ID($category_name);
  if(!$category_id) { return; }

  $results = array();
  $cat_query = new WP_Query( array(
      'category_name' => $category_name,
      'category__not_in' => array(1, 25, 193),
      'meta_key' => '_thumbnail_id',
      'date_query' => array('after' => date('Y-m-d', strtotime('-4 years')) ),
      'orderby' => 'rand',
      'posts_per_page' => $number_of_results,
      'post__not_in' => $exclude_ids
    )
  );
  if ( $cat_query->have_posts() ) {
      while ( $cat_query->have_posts() ) {
          $cat_query->the_post();
          $results[] = get_the_ID();
        }
      }
  wp_reset_postdata();
  return $results;



//////////////////////
  $results = $wpdb->get_col("SELECT ID
                              FROM $wpdb->posts
                              LEFT JOIN $wpdb->term_relationships as t
                              ON ID = t.object_id
                              WHERE post_type = 'post'
                              AND post_date BETWEEN '".date('Y-m-d', strtotime('-2 years'))."' AND '".date('Y-m-d')."'
                              AND post_status = 'publish'
                              AND t.term_taxonomy_id = " . $category_id . "
                              ORDER BY RAND() LIMIT " . $number_of_results
                            );

  //echo "<pre>" . var_dump($results) . "</pre>";
  return $results;


////////////////////////////////

  // the query
  $in_cat_query = new WP_Query( array(
      'category_name' => $category_name,
      'meta_key' => '_thumbnail_id',
      'date_query' => array('before' => date('Y-m-d', strtotime('1 year')), 'after' => date('Y-m-d', strtotime('-4 years')) ),
      'orderby' => 'rand',
      'posts_per_page' => $number_of_results,
      'post__not_in' => $exclude_ids
    )
  );

  if ( $in_cat_query->have_posts() ) {
    echo "<pre>" . var_dump($in_cat_query) . "</pre>";
    $resulting_post_ids[] = $in_cat_query->post->ID;
  }

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
