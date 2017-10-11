<?php // leverage Jetpack's popular post stats for ourselves: https://engineering.growella.com/jetpack-popular-posts-wp-query/
  //$save_prev_query = $wp_query; // save the old query object
  $popular_posts = stats_get_csv( 'postviews', array(
    'days'  => 7,
    'limit' => 6,
  ) );
  //echo '<pre>' . var_dump($popular_posts) . '</pre>';
  //$posts = wp_list_pluck( $popular_posts, 'post_id' );
  //$custom_query = new WP_Query( array(
  //  'post__in' => $posts,
  //  'orderby'  => 'post__in',
  //  'order'    => 'ASC',
  //) );
  //while($custom_query->have_posts()) : $custom_query->the_post(); ?>
<?php $popular_posts = wp_list_pluck( $popular_posts, 'post_id' ); ?>
<style>
.bold-numbers {
  margin: 0;
  padding: 0;
  list-style-type: none;
  opacity:0.9;
}
.bold-numbers li {
  counter-increment: step-counter;
  margin-bottom: 1rem;
}
.bold-numbers li::before {
  content: counter(step-counter);
  float:right;
  border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 25px;
    text-align: center;
    border: 1px solid rgba(85, 74, 69, 0.2);
    color: rgba(85, 74, 69, 0.4);
    font-weight: bold;
}
.bold-numbers a { color:#2b2523; }
</style>
<ol class="bold-numbers">
<?php foreach( $popular_posts as $post_id ) : ?>
  <?php if (!$post_id) { continue; } ?>
  <?php $featured_image_url = get_featured_image_url( $post_id, 'thumbnail' ); ?>
  <?php //if( !$featured_image_url ) { continue; } // skip anything other than posts with images ?>
  <?php $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_thumb,g_auto"; ?>
        <!-- <strong><?php echo $featured_image_url; ?></strong><br/> -->
  <li>
      <h5><a class="" href="<?php the_permalink( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a>
      </h5>
  </li>
<?php endforeach; ?>
</ol>
