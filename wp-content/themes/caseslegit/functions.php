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
        add_image_size('serv_xs', 400, 200, true);
        add_image_size('serv_s', 800, 350, true);
        add_image_size('serv_m', 1280, 350, true);
        add_image_size('serv_l', 1800, 700, true);
        add_image_size('serv_xl', 2400, 1050, true);
        add_image_size('news_m', 700, 525, true);
        add_image_size('news_l', 1400, 1050, true);
        add_image_size('news_xl', 2100, 1575, true);
       
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

/* Thank you for bring a friend, Steven Slack
 * http://s2webpress.com/responsive-featured-image-function-in-wordpress-themes/
 */

function responsive_background() {
     // call the global post variable
    global $post;
 
    if ( has_post_thumbnail( $post->ID ) ) : // checks whether the post has the featured image set
 
    // get the post thumbnail ID for the page or post
    $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
 
    // store the image sizes in an array. You can also add your own image sizes with the add_image_size function
    $img_sizes = array( 'serv-xs', 'serv-s', 'serv-m', 'serv-l', 'serv-xl' );

    foreach ( $img_sizes as $img_size ) {
        ${ 'img_' . $img_size } = wp_get_attachment_image_src( $post_thumbnail_id, $img_size );
    }
    endif;
} // end the function
add_action( 'wp_head', 'responsive_background' );

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
        register_sidebar( array(
		'name'          => esc_html__( 'SidebarAbout', 'caseslegit' ),
		'id'            => 'sidebar-3',
		'description'   => 'About',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'caseslegit_widgets_init' );


/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

/**
 * Enqueue scripts and styles.
 */
function caseslegit_scripts() {
	wp_enqueue_style( 'caseslegit-style', get_stylesheet_uri() );
        
        wp_enqueue_style( 'caseslegit-icons', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	/* wp_enqueue_script( 'caseslegit-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true ); 

        wp_enqueue_script( 'caseslegit-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150623', true ); 
        
        wp_enqueue_script( 'caseslegit-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('caseslegit-superfish'), '20150623', true );
        
        wp_enqueue_script( 'caseslegit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true ); */

        wp_enqueue_script( 'caseslegit-mobile-nav', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20150624', true ); 
        
        wp_enqueue_script( 'caseslegit-mobile-nav2', get_template_directory_uri() . '/js/mobilemenu.js', array('jquery'), '20150624', true ); 
        
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
