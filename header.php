<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <title><?php

  /*
   * Internet Society WordPress Template 
   *
   * The template for the header of all pages.
   *
   */

	/*
	 * Print the <title> tag based on what is being viewed.
	 */

	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.

	bloginfo( 'name' );

	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";

	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'isoc-wp' ), max( $paged, $page ) );

	?></title>

    <!-- HTML5 form of the declaration of the character set encoding -->
    <meta charset="UTF-8">
    
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/html-reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/handheld.css" media="handheld"/>

	<!--[if IE]>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" media="screen"/>
    <![endif]-->
    
    <?php
    // Add JavaScript for threaded replies to single pages
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="headerutility"><?php wp_nav_menu( array( 'container_class' => 'utility', 'theme_location' => 'secondary' ) ); ?><div class="clear"></div></div> <!-- header utility -->

<header id="header">

  <?php get_search_form(); ?>

  <h1><a href="<?php echo get_option("tl_logo_link"); ?>" title=""><?php theme_logo(); ?></a></h1>

  <div class="clear"></div>

</header> <!-- #header -->

<nav id="nav">

	<?php 

	  wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); 


	?>

    <div class="clear"></div>

</nav><!-- #nav -->

<div id="columns">

 	<?php if (!is_front_page()):?><?php get_sidebar(); ?><section id="copy"><?php endif; ?>

	<?php

	// "Highlighted" Widget Area

	if ( is_active_sidebar( 'highlighted-widget-area' ) ) : ?>

		<?php dynamic_sidebar( 'highlighted-widget-area' ); ?>

	<?php endif; ?>
