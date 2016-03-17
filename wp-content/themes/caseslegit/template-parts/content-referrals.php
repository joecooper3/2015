<?php
/**
 * The template used for displaying the referral page.
 *
 * @package CASES Legit
 */

?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="about-container">
    <div class="leadimage-container3">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">' ); ?></h1>
        </header><!-- .entry-header --></div>
	<div class="entry-content-referrals">
            
		
                <?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</div>
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

