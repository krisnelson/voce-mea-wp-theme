  <?php $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_thumb,g_auto";
        $featured_image_url = get_featured_image_url( get_the_ID(), 'full' ); ?>
  <?php if ( $featured_image_url ) : ?>
    <div class="bg-primary" style="max-width:256px;overflow:hidden;">
      <a href="<?php the_permalink(); ?>">
        <img class="" alt="img-responsive" style="max-width:256px;opacity:0.66;"
          src="<?php echo $img_prefix . ",w_256,ar_1.6180339887/" . $featured_image_url; ?>"
          />
      </a>
    </div>
  <?php endif; ?>
  <h5 class="mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
  <!-- <small class="text-muted">
    <?php echo get_the_category_list( ' &bull; ' ); ?>
  </small> -->
  <br/><br/>
