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
        <div class="sidebar-about sidebar-program">
            <aside>
                <?php if( get_field('box1') ): ?>
                <span class="asidetitle"><?php the_field('box1_title') ?></span>
            <?php the_field('box1') ?></aside>
                <?php endif; ?>
            <?php if( get_field('box2') ): ?>
            <aside>
                <span class="asidetitle"><?php the_field('box2_title') ?></span>
                <p align="center">
    <a href="<?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>.pdf">
    <img srcset="<?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>1x.jpg 1x,
         <?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>2x.jpg 2x"
         src="<?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>1x.jpg" 
         alt="<?php the_title(); ?> <?php the_field('box2_title') ?>"></p>
    <p align="center"> <?php the_field('box2') ?></a></p></aside>
            <?php endif; ?>
            <?php if( get_field('box3') ): ?>
            <aside><span class="asidetitle"> <?php the_field('box3_title') ?></span>
            <?php the_field('box3') ?></aside>
            <?php endif; ?>
</div>
</div>
    
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

