<?php
  $img_prefix = 'https://res.cloudinary.com/krisnelson/image/upload/e_blur:150,q_auto,f_auto,c_fill';
  $featured_image_url = "v1502401591/unsplash/ehud-neuhaus-191867.jpg";
  $featured_image_caption = "Photo by Ehud Neuhaus on Unsplash.";
  //$template = locate_template('partials/featured-image-build-css.php');
  if( $featured_image_url ) { // && $template ) {
    //include_once( $template ); // so we don't define the function twice during Loops
    featured_image_build_css($img_prefix, $featured_image_url, "jumbotron-featured-image");
  }
?>
<header class="jumbotron jumbotron-fluid jumbotron-featured-image text-center">
  <div class="container">
    <?php //if ( function_exists( 'the_custom_logo' ) ) {
      //the_custom_logo();
    //} ?>
    <h1 class="display-3 jumbotron-heading"><?php bloginfo('title');?></h1>
    <p class="lead">
      <?php bloginfo( 'description' ); ?>
    </p>
    <p>
      <?php $category_id = get_cat_ID( 'History' ); $category_link = get_category_link( $category_id ); ?>
      <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-sm btn-secondary">History</a>
      <?php $category_id = get_cat_ID( 'Law' ); $category_link = get_category_link( $category_id ); ?>
      <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-sm btn-secondary">Law</a>
      <?php $category_id = get_cat_ID( 'Technology' ); $category_link = get_category_link( $category_id ); ?>
      <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-sm btn-secondary">Technology</a>
    </p>
  </div>
</header>
<?php if( $featured_image_caption ) {
    echo '<div class="featured-image-caption small text-muted text-right mr-4 mb-5" style="margin-top:-1.7rem;">';
    echo $featured_image_caption;
    echo '</div>'; } ?>
