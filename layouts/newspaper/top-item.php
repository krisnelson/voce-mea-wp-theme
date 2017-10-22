<div class="top-item">
  <?php $img_prefix = "https://images.inpropriapersona.com/q_auto,c_thumb,g_auto";
        $featured_image_url = get_featured_image_url( get_the_ID(), 'full' ); ?>
  <?php if ( $featured_image_url ) : ?>
    <div class="bg-primary" style="overflow:hidden;">
      <a href="<?php the_permalink(); ?>">
        <img class="img-responsive" style="opacity:0.8;border:1px solid #efefef;"
          sizes="(min-width: 992px) 50vw, 100vw"
          src="https://images.inpropriapersona.com/w_540,ar_1.6180339887,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?>"
          srcset="https://images.inpropriapersona.com/w_720,ar_1.6180339887,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?> 720w,
                  https://images.inpropriapersona.com/w_960,ar_1.6180339887,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?> 960w,
                  https://images.inpropriapersona.com/w_1140,ar_1.6180339887,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?> 1140w"
          alt=""
        />
      </a>
    </div>
  <?php endif; ?>
  <style>.top-item > h4 { font-weight: bold; font-size: 2rem; }</style>
  <h4 class="mt-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <div class="small text-dimmed hyphens"><?php the_excerpt(); ?></div>
</div>
