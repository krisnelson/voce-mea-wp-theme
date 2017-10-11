<?php get_header(); ?>
<!-- ==== home.php: called with no front-page.php and show "latest posts" set ==== -->
<?php get_template_part( 'partials/navbar' ); ?>

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
    <?php if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    } ?>
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

  <section id="main" class="container-fluid pt-5">
    <div class="row">
      <div <?php if ( is_active_sidebar( 'sidebar-lists' ) ) { echo 'class="col-9">'; } else { echo 'class="col-12">'; } ?>
        <?php if ( have_posts() ) :
              echo '<div class="container">';
                echo '<div class="row">';
                  while ( have_posts() ) : the_post();
                    get_template_part( 'partials/in-loop/excerpt', 'as-card' );
                  endwhile;
                echo '</div>'; // /.row
                echo '<div class="row justify-content-center"><div class="card" style="border:0;">';
                  bootstrap_pagination();
                echo '</div></div>';
              echo '</div>'; // /.container
            else :
              echo '<div class="card"><h4>Sorry, no posts matched your criteria.</h4></div>';
            endif; ?>
      </div><!-- /.col -->
      <?php if ( is_active_sidebar( 'sidebar-lists' ) ) : ?>
        <div class="col-3 hidden-md-down">
          <?php dynamic_sidebar( 'sidebar-lists' ); ?>
        </div>
      <?php endif; ?>
    </div><!-- /.row -->
  </section>

<!-- ==== /end home.php ==== -->
<?php get_footer(); ?>
