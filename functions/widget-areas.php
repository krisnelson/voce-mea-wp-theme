<?php
add_action( 'widgets_init', 'initialize_sidebar_widget_areas' );

function initialize_sidebar_widget_areas() {
	register_sidebar( array(
		'name'          => 'Post Sidebar',
		'id'            => 'sidebar-post',
		'description'   => 'Sidebar for posts',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Page Sidebar',
		'id'            => 'sidebar-page',
		'description'   => 'Sidebar for pages',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Lists Sidebar',
		'id'            => 'sidebar-list',
		'description'   => 'Sidebar for lists of posts (archives, categories, etc.)',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'sidebar-home',
		'description'   => 'A sidebar widget area on the home page only',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Top of Content',
		'id'            => 'top-content-area',
		'description'   => 'Widgets that show up above the content, but below the header',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Bottom of Content',
		'id'            => 'bottom-content-area',
		'description'   => 'Widgets that show up below the content, but above the footer',
		'before_widget' => '<div id="%1$s" class="card w-25 border-0 widget %2$s"><div class="card-block">',
		'after_widget'  => '</p></div></div>',
		'before_title'  => '<h4 class="card-title widget-title">',
		'after_title'   => '</h4><p class="card-text">',
	) );
	register_sidebar( array(
		'name'          => 'Footer Area',
		'id'            => 'footer-area',
		'description'   => 'Widgets that appear in the footer area',
		'before_widget' => '<div id="%1$s" class="card w-25 border-0 card-inverse card-primary widget %2$s"><div class="card-block">',
		'after_widget'  => '</p></div></div>',
		'before_title'  => '<h4 class="card-title widget-title">',
		'after_title'   => '</h4><p class="card-text">',
	) );
}

?>
