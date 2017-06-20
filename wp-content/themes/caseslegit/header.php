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
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42662515-1', 'auto');
  ga('send', 'pageview');

  </script>
  <div id="responsiveCheck"></div>

  <!-- the menu on scroll up -->
  <div id="masthead-fade" class="site-header" role="banner">
    <div class="both-row-fade">
      <div class="top-row-fade">
        <div class="nav-container-fade">
          <div class="site-branding-fade">
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cases-logo-white.png"
              alt="CASES logo"></a></h1>
            </div>

            <!-- .site-branding -->

            <button id="menu-toggle-traveler" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              <?php esc_html_e('', 'caseslegit'); ?>
              <i class="fa fa-bars"></i></button>

              <nav id="site-navigation-fade" class="main-navigation" role="navigation">

                <div class="total-navigation"><?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu-traveler')); ?>
                  <div class="social-media-menu-container"><a href="https://www.facebook.com/casesnyc/"  class="nopad" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="http://www.twitter.com/casesnyc/" class="nopad" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </div>
                  <a href="#search-container-fade" id="search-link-fade" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="search-container"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>

              </nav><!-- #site-navigation -->
            </div>
          </div>
          <div id="search-container-fade" class="search-box-wrapper collapse">
            <div class="search-box-wrapper2">
              <div class="search-box">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end traveler navbar -->


      <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'caseslegit'); ?></a>
        <header id="masthead" class="site-header" role="banner">
          <div class="nav-container">
            <div class="site-branding">
              <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/color-logo.png"
                srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/color-logo.png 1x,
                <?php echo get_stylesheet_directory_uri(); ?>/images/color-logo@2x.png"
                alt="CASES logo"></a></h1>
              </div><!-- .site-branding -->

              <button id="menu-toggle-main" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php esc_html_e('', 'caseslegit'); ?>
                <i class="fa fa-bars"></i></button>

                <nav id="site-navigation" class="main-navigation" role="navigation">

                  <div class="total-navigation"><?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                    <div class="social-media-menu-container"><a href="https://www.facebook.com/casesnyc/"  class="nopad" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="http://www.twitter.com/casesnyc/" class="nopad" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                    <a href="#search-container" id="search-link" class="collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="search-container"><i class="fa fa-search" aria-hidden="true"></i></a>
                  </div>

                </nav><!-- #site-navigation -->
                <div id="search-container" class="search-box-wrapper collapse">
                  <div class="search-box-wrapper2">
                    <div class="search-box">
                      <?php get_search_form(); ?>
                    </div> </div></div>
                  </div>

                </header><!-- #masthead -->

                <div id="content" class="site-content">
