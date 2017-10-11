<!-- ==== layouts/newspaper.php ==== -->
<?php get_template_part( 'partials/navbar' ); ?>
<style>
  .jumbotron-featured-image { max-height: 240px; }
  .text-dimmed { opacity: 0.66; }
  .text-smaller { font-size: 0.72rem;}
  .hyphens { hyphens:auto; }
</style>
<?php //// push all the post IDs in The Loop into an array to avoid duplicates ?>
<?php $shownPosts = array(); ?>
<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); $shownPosts[] = get_the_ID(); } rewind_posts(); }?>
<?php //// end push ?>

<section id="main" class="container-fluid mt-5">
  <div class="row"><!-- header row -->
    <div class="hidden-md-down col-lg-2 flex-last">
      <h4 class="col-heading">Trending</h4>
    </div>
    <div class="col-md-12 col-lg-6 flex-first"></div>
    <div class="col-md-6 col-lg-4 flex-unordered"></div>
  </div>
  <!-- first row of posts -->
  <div class="row">
    <div class="hidden-md-down col-lg-2 flex-last" style="border-left: 1px solid rgba(85, 74, 69, 0.2);">
      <?php get_template_part( 'layouts/newspaper/popular-posts' ); ?>

      <?php if ( is_active_sidebar( 'sidebar-home' ) ) : ?>
        <style>.twitter-timeline { margin-left:-10px; }
          div .latest-tweets { overflow: hidden; }
          div .latest-tweets ul { list-style: none;margin: 0;padding: 0; }
          div .latest-tweets ul li { margin-bottom: 1rem; border-bottom: 1px solid rgba(85, 74, 69, 0.1) }
          div .latest-tweets p.tweet-details { font-size: 80%; }
        </style>
      	<div id="sidebar-home" class=" sidebar-home widget-area mt-5" role="complementary">
      		<?php dynamic_sidebar( 'sidebar-home' ); ?>
      	</div><!-- /#sidebar-home -->
      <?php endif; ?>

    </div>
    <?php $postNumber = 1; ?>
    <?php if (  have_posts() ) : while ( have_posts() ) { the_post(); ?>
      <?php if ($postNumber == 1) : ?>
        <!-- latest article -->
        <div class="pl-5 pr-5 col-md-12 col-lg-6 flex-first">
          <?php get_template_part( 'layouts/newspaper/top-item' ); ?>
          <!-- <hr class="mt-4 mb-4" /> -->
          <div class="hidden-md-down mb-5">
            <h4 class="col-heading">Related</h4>
            <?php
              $related_posts = get_related_post_ids( get_the_ID(), 5 );
              if( $related_posts ) : echo '<ul class="mt-0 pl-3 text-dimmed text-smaller" style="list-style-type:square;">'; foreach( $related_posts as $post_id ) : ?>
                <li><strong><a style="color:#2b2523;" href="<?php the_permalink( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a>
                </strong></li>
              <?php endforeach; echo '</ul>'; endif; ?>
          </div>
          <a href="/category/history/"><h4 class="col-heading">History</h4></a>
            <?php $items_in_cat = get_items_in_category( 'history', 2, $shownPosts ); ?>
            <?php foreach($items_in_cat as $post_id) { show_item( $post_id ); $shownPosts[] = $post_id; } ?>
          <a href="/category/law/"><h4 class="col-heading">Law</h4></a>
            <?php $items_in_cat = get_items_in_category( 'law', 2, $shownPosts ); ?>
            <?php foreach($items_in_cat as $post_id) { show_item( $post_id ); $shownPosts[] = $post_id; } ?>
          <a href="/category/technology/"><h4 class="col-heading">Technology &amp; Science Studies</h4></a>
            <?php $items_in_cat = get_items_in_category( 'technology', 2, $shownPosts ); ?>
            <?php foreach($items_in_cat as $post_id) { show_item( $post_id ); $shownPosts[] = $post_id; } ?>

        </div><!-- /.col -->
        <!-- /end latest article+categories (== 1) -->
      <?php elseif ($postNumber == 2) : ?>
        <div class="pl-5 col-md-6 col-lg-4 flex-unordered" style="border-left: 1px solid rgba(85, 74, 69, 0.2);">
          <?php get_template_part( 'layouts/newspaper/compact-item' ); ?>
      <?php elseif ($postNumber == 3 || $postNumber == 4) : ?>
          <?php get_template_part( 'layouts/newspaper/compact-item' ); ?>
      <?php elseif ($postNumber == 5) : ?>
          <?php get_template_part( 'layouts/newspaper/compact-item' ); ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <hr class="mt-5 mb-5" />
      <div class="row">
      <?php else : ?>
        <div class="col-md-6 col-lg-3">
          <?php get_template_part( 'layouts/newspaper/compact-item' ); ?>
        </div>
      <?php endif; ?>
    <?php
      $postNumber++;
    } ?>
    <?php endif; ?>
  </div><!-- /.row -->

  <div class="row mb-5">
    <div class="col align-self-start">
      &nbsp;
    </div>
    <div class="col align-self-center">
      <?php bootstrap_pagination(); ?>
    </div>
    <div class="col align-self-end">
      &nbsp;
    </div>
  </div>


</section>

<!-- ==== /end layouts/newspaper.php ==== -->
