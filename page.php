<?php get_header(); ?>
<!-- ==== page.php: renders a single post or page ==== -->
<?php get_template_part( 'partials/navbar' ); ?>
<?php if ( have_posts() ) : the_post();
  get_template_part( 'partials/singular/image', 'under-title' ); ?>
  <!-- title of the page -->
  <header class="jumbotron jumbotron-fluid jumbotron-title jumbotron-featured-image pt-5 pb-1">
    <div class="container">
      <div class="row ">
        <div class="col-11 ml-4 text-center">
          <h2 class="display-4 jumbotron-heading"><strong><?php the_title(); ?></strong></h2>
          <?php if ( has_excerpt() ) : ?>
            <p class="lead text-faded">
              <?php the_excerpt(); ?>
            </p>
          <?php endif; ?>
          <?php if (is_page() ) : ?>
          <p>
            <?php $category_id = get_cat_ID( 'History' ); $category_link = get_category_link( $category_id ); ?>
            <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-sm btn-secondary">History</a>
            <?php $category_id = get_cat_ID( 'Law' ); $category_link = get_category_link( $category_id ); ?>
            <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-sm btn-secondary">Law</a>
            <?php $category_id = get_cat_ID( 'Technology' ); $category_link = get_category_link( $category_id ); ?>
            <a href="<?php echo esc_url( $category_link ); ?>" class="btn btn-sm btn-secondary">Technology</a>
          </p>
          <?php endif; ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /.jumbotron -->
  <!-- /end title of the post/page -->

  <div class="featured-image-caption small text-muted text-right mr-4 mb-5"
        style="margin-top:-1.7rem;">&nbsp;
    <?php echo get_the_post_thumbnail_caption( get_the_ID() ); ?>
  </div>

<style>
p { hyphens: auto; }
article > p:first-of-type {
  font-size: 1.25em;
  font-weight: 300;
}
article blockquote { padding-left: 2rem; line-height: 1.33;  }
article aside {
  float: right;
  width: 50%;
  color: rgba(85,74,69,1);
  background: rgba(85,74,69,.2);
  border: 1px solid rgba(85,74,69,.2);
  padding: 1rem;
  margin: 1rem 1rem 1rem 1rem;
}
</style>
<section id="main" class="container pt-1 mt-1">
  <div class="row">
    <article id="post-<?php the_ID(); ?>" <?php post_class("col-sm-12 col-md-8 ml-4 pr-5"); ?>>
      <?php if ( is_active_sidebar( 'top-content-area' ) ) : ?>
        <style>
        #top-content-area { width: 100%; margin-bottom:2rem; margin-top:-2rem}
        </style>
        <div id="top-content-area" class="widget-area top-content-area" role="complementary">
          <?php dynamic_sidebar( 'top-content-area' ); ?>
        </div>
      <?php endif; ?>
      <?php the_content(); ?>
    </article>

    <?php if ( is_active_sidebar( 'sidebar-page' ) ) : ?>
      <div id="sidebar-page" class="sidebar sidebar-page widget-area hidden-sm-down col ml-4 pl-4 pr-0 mr-0"
            style="border-left: 1px solid rgba(85, 74, 69, 0.2);"
            role="complementary">
        <?php dynamic_sidebar( 'sidebar-page' ); ?>
      </div>
    <?php endif; ?>

  </div><!-- /row -->
</section> <!-- /container -->
<?php endif; ?>
<!-- ==== /end singular.php ==== -->
<?php get_footer(); ?>
