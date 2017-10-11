<!-- the featured image -->
<?php
  $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_crop,g_auto";
  $featured_image_url = get_featured_image_url( get_the_ID(), 'full' );
  $featured_image_caption = get_the_post_thumbnail_caption( get_the_ID() );
  if( $featured_image_url ) {
    featured_image_build_css( $img_prefix, $featured_image_url, "jumbotron-featured-image",
      "rgba(85,74,69, 0.33)", "rgba(85,74,69, 0.33)" );
  }
?>
<div class="jumbotron jumbotron-fluid jumbotron-featured-image pt-0 pb-0"></div>

<div class="featured-image-caption small text-muted text-right mr-4 mb-5"
      style="margin-top:-1.7rem;">&nbsp;
  <?php echo get_the_post_thumbnail_caption( get_the_ID() ); ?>
</div>

<!-- /end featured image -->
