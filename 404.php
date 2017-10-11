<?php get_header(); ?>
<!-- ==== archive.php: called with no front-page.php and show "latest posts" set ==== -->
<?php
  get_template_part( 'partials/navbar' );
  include( locate_template('partials/archive/select-featured-image.php') ); // b/c we want all vars back and forth
  get_template_part( 'partials/archive/header' );
?>

<section id="main" class="container pt-1 mt-1">
  <div class="row">
    <div id="404" class="col-sm-12 col-md-8 ml-4">
      <h3>
        Sorry
        <small class="text-muted">we couldn't find what you were looking for.</small>
      </h3>
      <hr class="mt-4 mb-3"/>

      <h5>You could send out a search party...</h5><br/>
      <?php get_search_form(); ?>
      <hr class="mt-4 mb-3"/>

      <span class="float-left">
        <h4>Or you might try:</h4>
        <ul>
          <li><a href="/">Going to the home page</a></li>
          <li><a href="/about">Learning more about the site</a></li>
          <li><a href="/contact">Contacting the editor</a></li>
        </ul>
      </span>
      <span class="float-right">
        <?php if (!empty($abj404connector)) {$abj404connector->suggestions(); } ?>
      </span>
      <br clear="all" />



    </div><!-- /.col -->

    <?php if ( is_active_sidebar( 'sidebar-list' ) ) : ?>
      <style>
      .sidebar .widget { opacity: 1 !important; } /* override the general side-wide rule */
      </style>
      <div id="sidebar-list" class="sidebar sidebar-list widget-area hidden-sm-down col ml-4 pl-4 pr-0 mr-0"
            style="border-left: 1px solid rgba(85, 74, 69, 0.2);"
            role="complementary">
        <?php dynamic_sidebar( 'sidebar-list' ); ?>
      </div>
    <?php endif; ?>

  </div><!-- /.row -->
</section>

<!-- ==== /end archive.php ==== -->
<?php get_footer(); ?>
