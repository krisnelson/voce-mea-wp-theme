  <?php $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_thumb,g_auto";
        $featured_image_url = get_featured_image_url( get_the_ID(), 'full' ); ?>
  <?php if ( $featured_image_url ) : ?>
    <div class="bg-primary" style="max-width:328px;overflow:hidden;">
      <a href="<?php the_permalink(); ?>">
        <img class="img-responsive"
          style="max-width:328px;opacity:0.8;border:1px solid #efefef;"
          src="<?php echo $img_prefix . ",w_328,ar_1.6180339887/" . $featured_image_url; ?>"
          />
      </a>
    </div>
  <?php endif; ?>
  <h4 class="mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <div class="text-dimmed text-smaller hyphens">
    <?php the_excerpt(); ?>
    <?php
      $related_posts = get_related_post_ids( get_the_ID(), 1 );
      if( $related_posts ) : echo '<ul class="mt-0 pl-3" style="list-style-type:square;">'; foreach( $related_posts as $post_id ) : ?>
        <li><strong><a style="color:#2b2523;" href="<?php the_permalink( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a>
        </strong></li>
      <?php endforeach; echo '</ul>'; endif; ?>
  </div>
  <!-- <small class="text-muted">
    <?php echo get_the_category_list( ' &bull; ' ); ?>
  </small> -->
  <br/><br/>
