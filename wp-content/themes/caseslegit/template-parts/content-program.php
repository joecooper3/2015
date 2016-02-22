<?php
/**
 * The template used for displaying program pages.
 *
 * @package CASES Legit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' );
?>
    
<div class="entry-content-serv">
	<div class="entry-content-prog">
            <div class="leadimage-container4" style="background: url(<?php echo $src[0]; ?>); background-size: cover; background-position: center">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header --></div>
            <?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
        <div class="sidebar-about">Only one can win
</div>
</div>
    
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

