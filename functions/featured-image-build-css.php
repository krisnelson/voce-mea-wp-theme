<?php function featured_image_build_css ( $img_prefix, $featured_image_url, $css_class,
        $darken_from = "rgba(85,74,69, 0.33)",
        $darken_to   = "rgba(85,74,69, 0.33)" ) {
  // note: relies on Cloudinary for resizing, though it can be called via a local NGINX
  // proxy of Cloudinary.
  // $darken_from and $darken_to are optional, but create linear gradients--default is above.
  ?>


<!-- ==== partials/featured-image-build-css.php: builds the styles for a featured jumbotron image ==== -->
<style>
 <?php

  if ( $img_prefix && $featured_image_url && $css_class )
  {
      /* build the urls for four sizes */
      $featured_small = $img_prefix . ",w_480,h_160/" . $featured_image_url;
      $featured_medium = $img_prefix . ",w_1024,h_380/" . $featured_image_url;
      $featured_large = $img_prefix . ",w_1440,h_440/" . $featured_image_url;
      $featured_huge = $img_prefix . ",w_1920,h_440/" . $featured_image_url;
  }
  else { echo "." . $css_class . " { display:none; }"; return; }
  ?>

     @media only screen {
       /* fallback defaults for all sizes when there's an image to show */
       .<?php echo $css_class ?> {
          height: 0; /* defaults to basically not showing at all on very small screens */
          width: 100%;
    			overflow: hidden;
    			background-repeat: no-repeat;
    			background-size: cover;
          /* background-position: 40% 28%; some images look better like this--how to choose? */
          /* css blur idea? from https://stackoverflow.com/questions/20039765/how-to-apply-a-css-3-blur-filter-to-a-background-image */
       }
     }
     @media only screen and (min-width: 320px) { /* small: 320x640, 375x667, 320x568, 320x534, 480x800 */
       .<?php echo $css_class ?> {
         height: 160px;
         background-image: linear-gradient(<?php echo $darken_from; ?>, <?php echo $darken_to; ?>),
          url('<?php echo $featured_small; ?>'); }
     }
     @media only screen and (min-width: 481px) { /* medium: (above 480w) 720x1280, 800x600, 1024x768 */
       .<?php echo $css_class ?> {
         height: 380px;
         background-image: linear-gradient(<?php echo $darken_from; ?>, <?php echo $darken_to; ?>),
          url('<?php echo $featured_medium; ?>'); }
     }
     @media only screen and (min-width: 1025px) { /* large: (above 1024w): 1366x768, 1280x800, 1440x900, 1600x900 */
       .<?php echo $css_class ?> {
         height: 440px;
         background-image: linear-gradient(<?php echo $darken_from; ?>, <?php echo $darken_to; ?>),
          url('<?php echo $featured_large; ?>'); }
     }
     @media only screen and (min-width: 1441px) { /* huge: (above 1440w): 1600x900, 1920x1080, and up */
       .<?php echo $css_class ?> {
         height: 440px;
         background-image: linear-gradient(<?php echo $darken_from; ?>, <?php echo $darken_to; ?>),
          url('<?php echo $featured_huge; ?>'); }
     }

</style>
<!-- ==== /end partials/featured-image.php ==== -->


<?php } // end of function ?>
