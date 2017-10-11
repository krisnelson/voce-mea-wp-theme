<header class="jumbotron jumbotron-fluid jumbotron-featured-image text-center">
  <div class="container">
    <?php //if ( function_exists( 'the_custom_logo' ) ) {
      //the_custom_logo();
    //} ?>

    <!-- the various kinds of archives we can be showing -->
    <?php if ( is_404() ) : ?>
      <h1 class="display-4">
        Uh oh. Someone&rsquo;s lost. :(
      </h1>
      <p class="small"><em><strong>Alert!</strong> Issuing a code 404! Send out the sled dogs!</em></p>

    <?php elseif ( is_search() ) : ?>
      <h1 class="display-4">
        <small><em>Results for</em></small>
        <span class="text-capitalize">&ldquo;<?php echo get_search_query(); ?>&rdquo;</span>
      </h1>
    <?php elseif (is_category()) : ?>
      <h1 class="display-4">
        <small><em>In re:</em></small>
        <span class="text-capitalize"><?php single_cat_title(''); ?></span>
      </h1>
      <?php //if ( $not_paged ) echo '<div class="archive-desc">'. category_description() .'</div>'; ?>
      <p class="lead">
        A topic in <span class="text-lowercase"><?php bloginfo( 'description' ); ?></span>
      </p>
    <?php elseif( is_tag() ) : ?>
      <h1><?php _e( 'Tag', 'basic' ); ?> &laquo;<?php single_tag_title(); ?>&raquo;</h1>
      <?php if ( $not_paged ) echo '<div class="archive-desc">'. tag_description() .'</div>'; ?>
    <?php elseif (is_day()) : ?>
      <h1><?php _e( 'Day archives:', 'basic' ); ?> <?php the_time('F jS, Y'); ?></h1>
    <?php elseif (is_month()) : ?>
      <h1><?php _e( 'Monthly archives:', 'basic' ); ?> <?php the_time('F, Y'); ?></h1>
    <?php elseif (is_year()) : ?>
      <h1><?php _e( 'Year archives:', 'basic' ); ?> <?php the_time('Y'); ?></h1>
    <?php elseif (is_author()) : ?>
      <h1><?php _e( 'Author archives', 'basic' ); ?></h1>
      <div class="archive-desc"><?php the_author_meta('description'); ?></div>
    <?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
      <h1 class="archivetitle"><?php _e( 'Archive', 'basic' ); ?></h1>
    <?php endif; ?>
    <!-- /end kinds of display categories -->

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
