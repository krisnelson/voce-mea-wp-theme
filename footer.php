<!-- === footer.php == -->
<?php if ( is_active_sidebar( 'bottom-content-area' ) ) : ?>
  <div id="bottom-content-area" class="widget-area bottom-content-area card-group" role="complementary">
    <?php dynamic_sidebar( 'bottom-content-area' ); ?>
  </div>
<?php endif; ?>

<footer class="jumbotron jumbotron-fluid bg-primary mb-0">
  <div class="container">
    <h3>
  		<a class="text-white" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  		<small style="color:#eee;"><?php bloginfo('description'); ?></small>
  	</h3>

    <?php if ( has_nav_menu( 'Footer' ) ) : ?>
      <style>
      ul.additional-nav-menu  { list-style-type:none; margin-top:2rem; margin-bottom:3rem;}
      ul.additional-nav-menu li { opacity:0.5;display:inline;;padding:.5rem;line-height:2rem;}
      ul.additional-nav-menu li:hover { opacity: 1; background: #fff; }
      .additional-nav-menu a { color: #ccc;}
      .additional-nav-menu a:hover { color: #7f6f67; text-decoration:none; }
      </style>
      <?php wp_nav_menu( array( 'theme_location' => 'Footer',
                            'fallback_cb' => false,
                            'menu_class' => ' additional-nav-menu',
                            'container' => ''
                          ) ); ?>
      </div>
    <?php endif; ?>

    <?php if ( is_active_sidebar( 'footer-area' ) ) : ?>
      <style>
        #footer-area { font-size: 66%; }
        #footer-area a { color: #eee; }
        #footer-area .widget { opacity: 0.33; }
        #footer-area .widget:hover { opacity: 0.95; }
      </style>
      <div id="footer-area" class="widget-area footer-area card-group" role="complementary">
  			<?php dynamic_sidebar( 'footer-area' ); ?>
      </div>
  	<?php endif; ?>

    <style>
  	#Colophon {
  		margin-top: 5rem;
  		padding-bottom: 2rem;
  		font-size: .7rem;
  		color: rgba(255, 255, 255, 0.66);
  	}
  	#Colophon { text-align: center; margin-left: 10vw; margin-right: 10vw;}
  	#Colophon h4 { font-size: 1rem; }
  	#Colophon a { color: ; color: rgba(255, 255, 255, 0.75); }
  	</style>
  	<section id="Colophon" role="contentinfo">

  		<h4>Imprinted in California.</h4>

  		<p><em>Delivered by</em> <a href="http://cloudflare.com" rel="nofollow">CloudFlare</a>, <a href="http://www.nginx.com" rel="nofollow">NGINX</a>, <a href="http://easyengine.io" rel="nofollow">EasyEngine</a>, and <a href="http://debian.org" rel="nofollow">Debian</a>/<a href="http://www.ubuntu.com" rel="nofollow">Ubuntu</a>.
  		<em>Presented via</em> <a href="http://wordpress.org" rel="nofollow">WordPress</a>, <a href="http://php.net" rel="nofollow">PHP7</a>, HTML5, CSS3, SASS, <a href="//jquery.com" rel="nofollow">jQuery</a>, a modified <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a> 4 framework, and a highly customized theme based on <a href="http://underscores.me/" rel="nofollow"><em>_s</em></a>.
  		<em>Made possible thanks to</em> open-source technologies, good education, decent medical care,
  		post-graduate education, dissertation procrastination, and a brilliant spouse. <em>And</em> kittens. Of course.

  		<p><em>Design and development by</em><br/>
  		<a href="https://krisnelson.org">Kristopher A. Nelson</a>,<br/>
  		&copy; 2005&ndash;<?php echo date("Y"); ?>.</p>

  		<p><em>Remember,</em> I am not your lawyer,<br/>
  		this is not legal advice, <br/>
  		and I am not offering legal practice services.</p>

  	</section>

  </div><!-- /.container -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  <!-- Scripts for the entire site -->
  <script src="<?php bloginfo('template_url');?>/scripts.js?ver=208"></script>

  <?php wp_footer(); ?>

</footer>

</body>
</html>
