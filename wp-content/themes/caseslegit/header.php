<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CASES Legit
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="responsiveCheck"></div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'caseslegit' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="images/logo.png"></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->
                
                <div id="socialMedia">
                    <a href="https://twitter.com/casesnyc"><i class="fa fa-twitter-square"></i></a>
                    <a href="http://www.facebook.com/casesnyc"><i class="fa fa-facebook-square"></i></a>
                    <a href="http://www.linkedin.com/companies/659695"><i class="fa fa-linkedin-square"></i></a>
                    <a href="http://www.youtube.com/user/casesnyc/"><i class="fa fa-youtube-square"></i></a>
                </div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'caseslegit' ); ?>
                        <i class="fa fa-bars"></i></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
                <div id="search-container" class="search-box-wrapper">
                    <div class="search-box">
            <?php get_search_form(); ?>
                </div>
</div> 
	</header><!-- #masthead -->

	<div id="content" class="site-content">
