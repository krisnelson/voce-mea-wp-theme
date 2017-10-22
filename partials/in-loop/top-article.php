<?php if ( has_post_thumbnail() ) : ?>
	<div class="top-article-image">
		<a href="<?php the_permalink(); ?>">
			<img class="img-responsive img-thumbnail"
        sizes="(min-width: 800px) 50vw, 100vw"
        src="https://images.inpropriapersona.com/w_480,ar_4:3,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?>"
        srcset="https://images.inpropriapersona.com/w_800,ar_4:3,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?> 800w,
                https://images.inpropriapersona.com/w_1200,ar_4:3,q_auto,c_fill/<?php the_post_thumbnail_url('full'); ?> 1200w"
        alt=""
			/>
		</a>
	</div>
<?php endif; ?>
<div class="article-category">
	<?php //displayPostCategories($post->ID); ?>
  <?php echo get_the_category_list( ' &bull; ' ); ?>
</div>
<h4 class="highlighted-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<p class="byline">By <a class="" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
		<!-- &bull;
		<?php  //$content = strip_tags( get_the_content('', true) );
		//echo getEstimatedReadingTime( $content ); ?> min read
    -->
</p>
