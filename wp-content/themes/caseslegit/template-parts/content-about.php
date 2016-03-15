<?php
/**
 * The template used for displaying the about pages.
 *
 * @package CASES Legit
 */

?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <style type="text/css" media="screen">
        .serv-bgimage { 
         background: url(<?php echo $src[0]; ?>); 
         background-size: cover; 
         background-position: center; 
       }
        @media all and (max-width: 800px) {
            .serv-bgimage {
                background-image: url(<?php echo $src_s[0]; ?>);
        }
        }
        @media all and (max-width: 400px) {
            .serv-bgimage {
                background-image: url(<?php echo $src_xs[0]; ?>);
        }
        }
    </style>
<div class="about-container">
    <div class="leadimage-container3">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">Our ' ); ?></h1>
        </header><!-- .entry-header --></div><div class="social-media-container">
            <div class="social-item"><?php if(function_exists('wp_print')) { print_link(); } ?></div>
            <div class="social-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook-square"></i></a></div>
            <div class="social-item"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>">
                    <i class="fa fa-twitter"></i></a></div>
        </div>
	<div class="entry-content-about">
            <?php the_post_thumbnail('serv_xl'); ?>
            
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
        <div class="sidebar-about"><?php get_sidebar('about'); ?>
</div>
</div>
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

