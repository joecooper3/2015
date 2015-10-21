<?php
/**
 * CASES Legit functions and definitions
 *
 * @package CASES Legit
 */

if ( ! function_exists( 'caseslegit_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function caseslegit_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CASES Legit, use a find and replace
	 * to change 'caseslegit' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'caseslegit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
        add_image_size('mainfellow', 1200, 9999, true);
        add_image_size('large-thumb', 955, 585, true);
        add_image_size('medium-thumb', 800, 490);
        add_image_size('small-thumb', 400, 245);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'caseslegit' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'caseslegit_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // caseslegit_setup
add_action( 'after_setup_theme', 'caseslegit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function caseslegit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'caseslegit_content_width', 640 );
}
add_action( 'after_setup_theme', 'caseslegit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function caseslegit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'caseslegit' ),
		'id'            => 'sidebar-1',
		'description'   => 'Homepage',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'caseslegit' ),
		'id'            => 'sidebar-2',
		'description'   => 'Articles',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'caseslegit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function caseslegit_scripts() {
	wp_enqueue_style( 'caseslegit-style', get_stylesheet_uri() );
        
        wp_enqueue_style( 'caseslegit-hover', get_stylesheet_directory_uri() . '/hover.css' );
        
        wp_enqueue_style( 'caseslegit-icons', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	/* wp_enqueue_script( 'caseslegit-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true ); 

        wp_enqueue_script( 'caseslegit-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150623', true ); 
        
        wp_enqueue_script( 'caseslegit-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('caseslegit-superfish'), '20150623', true );
        
        wp_enqueue_script( 'caseslegit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true ); */

        wp_enqueue_script( 'caseslegit-mobile-nav', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20150624', true ); 
        
        wp_enqueue_script( 'caseslegit-mobile-nav', get_template_directory_uri() . '/js/mobilemenu.js', array('jquery'), '20150624', true ); 
        
        wp_enqueue_script( 'my-picturefill', get_template_directory_uri() . '/js/picturefill.min.js', '20150710', false);
        
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caseslegit_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/responsive-image.php';
