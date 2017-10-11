<!-- ==== partials/in-loop/excerpt-as-card.php ==== -->
<?php
// note: relies on being called from within The Loop; autoresizes thumbnails
$img_prefix = "https://images.inpropriapersona.com/q_auto,f_auto,c_thumb,g_auto";
$featured_image_url = get_featured_image_url( get_the_ID(), 'full' ); ?>
 <div class="col-sm-12 col-md-6 col-lg-4 pb-5">
   <div class="card">
     <div class="card-header text-primary"><small><?php the_date('F Y'); ?></small></div>
     <?php if ( $featured_image_url ) : ?>
       <div class="bg-primary" style="max-height:250px;overflow:hidden;">
         <a href="<?php the_permalink(); ?>">
           <img class="card-img-top" alt="" style="width:100%;opacity:0.66;"
             src="<?php echo $img_prefix . ",w_466,h_266/" . $featured_image_url; ?>"
             />
         </a>
       </div>
     <?php else: ?>
       <?php // <img class="card-img-top" width="350" height="200" alt=""
         //src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
         // /> ?>
     <?php endif; ?>
     <div class="card-block">
       <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
       <p class="card-text"><?php the_excerpt(); ?></p>
     </div>
     <div class="card-footer">
       <small class="text-muted">
         <?php the_category( '&nbsp;/ ' ); ?>
       </small>
     </div>
   </div><!-- /.card -->
 </div><!-- /.col -->
<!-- ==== /end of partials/in-loop/excerpt-as-card.php ==== -->
