<?php
// Functions used by Voce Mea

// Stop some default WP behavior
add_filter( 'style_loader_src', function($href) {
	if(strpos($href, "//fonts.googleapis.com/") === false) {
		return $href;
	}
	return false; // kill all Google Fonts added via this method
}); // see: https://stackoverflow.com/a/45633445

// Global WordPress options we want to set
add_theme_support( 'custom-logo' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

// Pages get excerpts too
add_post_type_support( 'page', 'excerpt' );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'Header' => 'Header',
	'Footer' => 'Footer',
) );

// Load all my custom theme functions located in functions/
//see https://wordpress.stackexchange.com/a/68137
//namespace Voce-Mea; // not gonna bother for now--KISS
$files = new \FilesystemIterator( __DIR__ . '/functions', \FilesystemIterator::SKIP_DOTS );
foreach ( $files as $file )
{
		/** @noinspection PhpIncludeInspection */
		! $files->isDir() and include $files->getRealPath();
}




?>
