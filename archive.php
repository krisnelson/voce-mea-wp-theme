<?php get_header(); ?>
<!-- ==== archive.php: called with no front-page.php and show "latest posts" set ==== -->
<?php
  get_template_part( 'partials/navbar' );
  include( locate_template('partials/archive/select-featured-image.php') ); // b/c we want all vars back and forth
  get_template_part( 'partials/archive/header' );
?>
<!-- advert space -->
<div class="container advert" style="display:none;">
  <div class="row justify-content-md-center">
    <div class="col-12 mb-4">
      <!-- Responsive IPP -->
      <ins class="adsbygoogle"
           style="display:block;"
           data-ad-client="ca-pub-6005702050833777"
           data-ad-slot="2642524807"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </div>
</div>
<!-- /advert -->
<section id="main" class="container pt-1 mt-1">
  <div class="row">
    <div id="the_loop" class="col-sm-12 col-md-8 ml-4">
      <?php if ( is_active_sidebar( 'top-content-area' ) ) : ?>
        <style>
        #top-content-area { width: 100%; margin-bottom:2rem; margin-top:-2rem}
        </style>
        <div id="top-content-area" class="widget-area top-content-area" role="complementary">
          <?php dynamic_sidebar( 'top-content-area' ); ?>
        </div>
      <?php endif; ?>
      <?php if ( have_posts() ) :
            echo '<div class="container">';
              echo '<div class="row">';
                while ( have_posts() ) : the_post();
                  get_template_part( 'partials/in-loop/post-in-list' );
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

    <?php if ( is_active_sidebar( 'sidebar-list' ) ) : ?>
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
