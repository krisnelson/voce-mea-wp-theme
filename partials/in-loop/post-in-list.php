<!-- ==== post-in-list.php: simple post item as part of a basic list ==== -->
<article id="post-<?php the_ID(); ?>" <?php post_class('list'); ?> >

	<?php if ( has_post_thumbnail() ) : ?>
    <span class="float-right ml-2"><small class="text-muted"><?php the_date('F Y'); ?></small></span>
		<a href="<?php the_permalink(); ?>">
			<?php //the_post_thumbnail( 'thumbnail', array('class' => 'thumbnail') ); ?>
			<img
  				src="https://images.inpropriapersona.com/h_600/h_180,w_150,q_auto,c_thumb,g_auto:faces/<?php the_post_thumbnail_url('full'); ?>"
  				class="img-thumbnail rounded float-left mb-5 mr-5"
  				height="180" width="150"
  				alt=""
				/>
	<?php endif; //end has_post_thumbnail ?>
	<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
	<div class="categories"><?php echo get_the_category_list( ' &bull; ' ); ?></div>
	<small><?php the_excerpt(); ?></small>

</article><!-- #post-##  -->
<!-- === /end post-in-list.php === -->
