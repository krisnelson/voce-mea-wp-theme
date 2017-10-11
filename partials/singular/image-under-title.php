<!-- the featured image -->
<?php
  if( is_page() ) { $img_prefix = 'https://images.inpropriapersona.com/e_blur:150,q_auto,f_auto,c_fill'; }
  else { $img_prefix = "https://images.inpropriapersona.com/e_blur:200,q_auto,f_auto,c_crop,g_auto"; }
  $featured_image_url = get_featured_image_url( get_the_ID(), 'full' );
  $featured_image_caption = get_the_post_thumbnail_caption( get_the_ID() );
  if( $featured_image_url ) {
    if( is_page() ) { featured_image_build_css( $img_prefix, $featured_image_url, "jumbotron-featured-image",
                        "rgba(57, 47, 41, 0.2)", "rgba(57, 47, 41, 0.2)" );  }
    else { featured_image_build_css( $img_prefix, $featured_image_url, "jumbotron-featured-image",
            "rgba(57, 47, 41, 0.7)", "rgba(57, 47, 41, 0.7)" ); }
  }
?>
<!-- /end featured image -->
