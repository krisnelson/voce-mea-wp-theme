<?php
function show_item( $post_id, $style = 'left-image' ) {
  global $post;
  if(!$post_id) { return; }

  $save_original_post = $post;
  $post = get_post( $post_id );
  setup_postdata( $post );

  $img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_thumb,g_auto";
  $featured_image_url = get_featured_image_url( $post_id, 'thumbnail' ); ?>

  <h5>
    <a class="" href="<?php the_permalink( ); ?>">
      <?php if($featured_image_url) : ?>
        <div class="float-left mr-3 mt-1 mb-5 bg-primary" style="max-width:168px;overflow:hidden;">
            <img class="img-responsive"
              style="max-width:168px;opacity:0.8;border:1px solid #efefef;"
              alt=""
              src="<?php echo $img_prefix . ",w_168,h_168/" . $featured_image_url; ?>"
              />
        </div>
      <?php endif; ?>
  		<?php the_title(); ?>
    </a>
  </h5>
	<div class="text-dimmed text-smaller hyphens">
    <?php the_excerpt( ); ?>
    <!-- <time datetime="2017-08-18T19:22:52" class="stamp" data-pubtime="20170818232252">&nbsp;</time> -->
    <!-- <time><?php the_date(); ?></time> -->
  </div>
  <br clear="all" />

<?php
  $post = $save_original_post;
} ?>
