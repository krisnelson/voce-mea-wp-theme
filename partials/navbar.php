<div class="collapse bg-inverse" id="navbarHeader">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 py-4">
        <a href="<?php bloginfo('url');?>">
          <h1 class="display-4 text-white">
		  <picture>
			  <source type="image/webp" srcset="https://images.inpropriapersona.com/f_auto,q_auto,w_168,h_168//https://inpropriapersona.com/wp-content/uploads/2017/01/ipp-logo-round.png" width="168" height="168" class="hidden-md-down float-left mr-4 mb-4" style="margin-left:-48px;" alt="">
			  <img src="https://images.inpropriapersona.com/q_auto,w_168,h_168//https://inpropriapersona.com/wp-content/uploads/2017/01/ipp-logo-round.png" width="168" height="168" class="hidden-md-down float-left mr-4 mb-4" style="margin-left:-48px;" alt="">
			</picture>
            <?php bloginfo('title');?>
          </h1>
        </a>
        <p class="text-muted">
          <?php bloginfo( 'description' ); ?>
        </p>
      </div>
      <div class="col-sm-4 py-4">
        <?php if ( has_nav_menu( 'Header' ) ) : ?>
          <h4 class="text-white">Connect</h4>
          <style>.connect-nav-menu a { color: #7f6f67; }</style>
          <?php wp_nav_menu( array( 'theme_location' => 'Header',
                                'fallback_cb' => false,
                                'menu_class' => 'list-unstyled connect-nav-menu',
                                'container' => ''
                              ) ); ?>
        <?php endif; ?>

        <div class="form-group">
          <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
           <label>
             <span class="screen-reader-text">Search for:</span>
             <input type="search" class="search-field form-control form-control-sm" type="search" placeholder="Search …" value="" name="s" title="Search for:" />
           </label>
           <input type="submit" class="search-submit btn btn-sm btn-secondary" value="Search" />
          </form>
        </div><!-- /.form-group -->
      </div><!-- /.col -->
    </div>
  </div>
</div>
<div class="navbar navbar-inverse bg-inverse">
  <div class="container d-flex justify-content-between">
      <style>
        a.navbar-brand:hover { background:rgba(127,111,103,0.1);text-decoration:underline;text-decoration-color:rgba(255,255,255,0.5); }
      </style>
      <a href="<?php bloginfo('url');?>" class="navbar-brand">
		<picture>
			  <source type="image/webp" srcset="https://images.inpropriapersona.com/f_auto,q_auto,w_96,h_96//https://inpropriapersona.com/wp-content/uploads/2017/01/ipp-logo-round.png"
			  width="96" height="96" class="" alt=""
			  style="position:absolute;left:-24px;top:5px;"
			  />	
			<img src="https://images.inpropriapersona.com/q_auto,w_96,h_96//https://inpropriapersona.com/wp-content/uploads/2017/01/ipp-logo-round.png"
			  width="96" height="96" class="" alt=""
			  style="position:absolute;left:-24px;top:5px;"
			  />		
		</picture>      
      

          <span class="pr-3" style="margin-left:72px;">
            <?php bloginfo('title');?>
          </span>
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</div>
