<?php get_header(); ?>
<!-- ==== single.php: renders a single page ==== -->
<?php // How shall we display our featured image?
  $imageArtDirection = "before title";
  ?>

<?php get_template_part( 'partials/navbar' ); ?>
<?php if ( have_posts() ) : the_post(); ?>
  <?php if($imageArtDirection == "under title") { get_template_part( 'partials/singular/image', 'under-title' ); }
        elseif($imageArtDirection == "before title") { get_template_part( 'partials/singular/image', 'before-title' ); }
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
  <!-- title of the post/page -->
  <header
    <?php
      switch ( $imageArtDirection ) {
        case 'under title':
          echo ' class="jumbotron jumbotron-fluid jumbotron-title jumbotron-featured-image pt-5 pb-1">';
          break;
        case 'before title':
          echo ' class="jumbotron jumbotron-fluid jumbotron-title pt-0 pb-1"';
          echo ' style="background-color: white;">';
          break;
        case 'after title':
          echo ' class="jumbotron jumbotron-fluid jumbotron-title pt-5 pb-1"';
          echo ' style="background-color: white;">';
          break;
        }
    ?>
\    <div class="container">
        <div id="title-and-byline" class="col-11 ml-4">
          <h2 class="h1"><strong><?php the_title(); ?></strong></h2>
          <?php if ( has_excerpt() ) : ?>
            <p class="lead">
              <div id="the_excerpt" class="lead hidden-md-down small">
                <?php the_excerpt(); ?>
              </div>
            </p>
          <?php endif; ?>
          <?php if ( !is_attachment() ) : ?>
            <p id="the_byline" class="small">
              <em>By</em> <a class="text-uppercase" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
              <em>in</em>
              <time class="date"><?php echo get_the_date('F'); ?> <em>of</em> <?php echo get_the_date('Y'); ?></time>
            </p>
            <a target="_blank" href="http://twitter.com/share?url=<?php echo urlencode( wp_get_shortlink() ); ?>&text=<?php echo urlencode( get_the_title() ) ?>" class="btn btn-sm text-white" style="opacity:0.8;background-color:#55acee;">Twitter</a>
            <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" class="btn btn-sm text-white" style="opacity:0.8;background-color:#3B5998;">Facebook</a>
          <?php endif; ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /.jumbotron -->
  <!-- /end title of the post/page -->

<?php if($imageArtDirection == "under title") : ?>
    <div class="featured-image-caption small text-muted text-right mr-4 mb-5"
          style="margin-top:-1.7rem;">&nbsp;
      <?php echo get_the_post_thumbnail_caption( get_the_ID() ); ?>
    </div>
<?php endif; ?>

<?php if($imageArtDirection == "before title") : ?>
  <hr class="mb-5" />
<?php endif; ?>

<?php if($imageArtDirection == "after title") : ?>
<!-- === featured image after the title === (note: structure mirrors #the_content, below)-->
<div id="featured-image-after-title" class="container pt-1 mt-1">
  <div class="row">
    <div class="col-sm-12 col-md-8 ml-4 mb-5">
			<?php get_template_part( 'partials/singular/image', 'after-title' ); ?>
      <?php $image_caption = get_the_post_thumbnail_caption( get_the_ID() );
        if( $image_caption ) : ?>
        <div class="featured-image-caption small text-muted text-right mr-4">
          <?php echo $image_caption; ?>
        </div>
      <?php endif; ?>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container -->
<!-- === /end featured image after the title === -->
<?php endif; ?>


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
      <?php if ( in_category('news') && (strtotime($post->post_date) < strtotime('-2 years')) ) : ?>
          <div class="alert alert-info" role="alert"><strong>Alert!</strong> This is a topical news article dated more than two years ago.</div>
      <?php elseif ( in_category('archived')||has_tag('archived') ) : ?>
          <div class="alert alert-info" role="alert"><strong>From our archives:</strong> This is article may contain out-of-date details.</div>
      <?php elseif ( in_category('to-be-revised')||
        has_tag('to-be-revised')||has_tag('to-be-updated') ) : ?>
          <div class="alert alert-warning" role="alert"><strong>Warning!</strong> This article has been marked for updating and revision. It may have incorrect or out-od-date information.</div>
      <?php endif ?>
      <?php the_content(); ?>
    </article>

  <?php if ( is_active_sidebar( 'sidebar-post' ) ) : ?>
    <div id="sidebar-post" class="sidebar sidebar-post widget-area hidden-sm-down col ml-5 pl-4 pr-0 mr-0"
          style="border-left: 1px solid rgba(85, 74, 69, 0.2);"
          role="complementary">
      <?php dynamic_sidebar( 'sidebar-post' ); ?>
    </div>
  <?php endif; ?>

  </div><!-- /row -->
</section> <!-- /container -->
<?php endif; ?>
<!-- ==== /end singular.php ==== -->
<?php get_footer(); ?>
