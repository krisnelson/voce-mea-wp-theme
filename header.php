<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/favicon.ico" />

    <title><?php bloginfo('title'); ?> <?php wp_title();?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css?ver=1124"/>
    <!-- styles.css for the entire theme -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=407"/>
    <!-- UA-1537365-4 -->
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?> >
<!-- === /end header.php == -->
