<!-- the featured image -->
<?php
  $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_fill,g_auto";
  $image_url = get_featured_image_url( get_the_ID(), 'full' );
  $image_id = get_post_thumbnail_id(get_the_ID());
  $image_alt = get_post_meta($img_id , '_wp_attachment_image_alt', true);
  /* build the urls for four sizes */
  $rect_small = $img_prefix . ",w_480,ar_3:2/" . $image_url;
  $rect_small_2x = $img_prefix . ",w_480,ar_3:2,dpr_2.0/" . $image_url;
  $rect_medium = $img_prefix . ",w_1024,ar_16:9/" . $image_url;
  $rect_large = $img_prefix . ",w_1440,ar_16:9/" . $image_url;
  $rect_huge = $img_prefix . ",w_1920,ar_16:9/" . $image_url;
  ?>

  <?php if( $image_url ) : ?>
    <img class="img-fluid" style="border: 1px solid #aaa;"
      sizes="(max-width: 575px) 100vw, 55vw"
      srcset="<?php echo $rect_small; ?> 480w,
        <?php echo $rect_medium; ?> 1024w,
        <?php echo $rect_large; ?> 1440w,
        <?php echo $rect_huge; ?> 1920w"
      src="<?php echo $rect_medium; ?>"
      <?php if ( $image_alt ) { echo ' alt="' . $image_alt . '" '; } ?>
    />
  <?php endif;
?>
<!-- /end featured image -->
