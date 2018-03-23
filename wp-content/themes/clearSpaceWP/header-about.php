<?php

/**

 * The header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package styl_s

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85355705-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85355705-1', 'auto');
  ga('send', 'pageview');

</script>

</head>



<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'styl_s' ); ?></a>



	<header id="masthead" class="site-header" role="banner" style="background-image:url('<?php the_field('header_image') ?>'); height:650px">



	<div class="logoAndNav headroom animated slideDown">

		<div class="site-branding">

			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		</div><!-- .site-branding -->



		<a href="javascript:void(0)" class="icon">

		    <div class="hamburger">

		    <div class="menui top-menu"></div>

		    <div class="menui mid-menu"></div>

		    <div class="menui bottom-menu"></div>

		    </div>

		  </a>



	<?php 

	$menu_style = get_field( 'menu_style' );

	$black_menu = '<nav id="black_menu" class="mobilenav" role="navigation">';

	$white_menu = '<nav id="white_menu" class="mobilenav" role="navigation">';

if ( $menu_style ) {

    echo $black_menu;

} else {

    echo $white_menu;

} ?>



				



				

				    <?php wp_nav_menu( array( "theme_location" => "primary", 'container' => '' ) ); ?>



<div class="socialIcons">	

<div class="behance">	<a href="https://www.behance.net/clearspace" target="_blank">Behance</a></div>

<div class="instagram">	<a href="https://www.instagram.com/clearspacedesign/" target="_blank">Instagram</a></div>

</div>

				   

				</nav><!-- #access --> 

		   

		</nav><!-- #access --> 



	</div> <!-- end .logoAndNav	 -->



		<h2><?php the_field('header_copy') ?></h2>

	</header><!-- #masthead -->



	<div id="content" class="site-content">

