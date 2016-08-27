<?php
/**
 * The template used for displaying program pages.
 *
 * @package CASES Legit
 */

?>
<script type="text/javascript">
    jQuery(function($){
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    });
</script>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' );
$src_xs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xs, false, '' );
$src_s = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_s, false, '' );
$src_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_m, false, '' );
$src_l = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_l, false, '' );
$src_xl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xl, false, '' );
?>
    
    <style type="text/css" media="screen">
        .leadimage-container4 { 
            background: url(<?php echo $src[0]; ?>); 
            background-size: cover; 
            background-position: center; 
            <?php if( get_field('background-position_attribute') ): ?>
            background-position: <?php the_field('background-position_attribute') ?>;
            <?php endif; ?>
        }
        @media all and (max-width: 1800px) {
            .leadimage-container4 {
                background-image: url(<?php echo $src_l[0]; ?>);
            }
        }
        @media all and (max-width: 1200px) {
            .leadimage-container4 {
                background-image: url(<?php echo $src_m[0]; ?>);
            }
        }
        @media all and (max-width: 800px) {
            .leadimage-container4 {
                background-image: url(<?php echo $src_s[0]; ?>);
            }
        }
        @media all and (max-width: 400px) {
            .leadimage-container4 {
                background-image: url(<?php echo $src_xs[0]; ?>);
            }
        }
    </style>
<div class="entry-content-serv">
	<div class="entry-content-prog">
            <div class="leadimage-container4">
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
            <?php if( get_field('box1') ): ?>
            <aside>
                <span class="asidetitle"><?php the_field('box1_title') ?></span>
            <?php the_field('box1') ?>
                <?php if( get_field('referral_form_shortcode') ): ?>
                <?php $dotheref = get_field("referral_form_shortcode"); ?>
            <?php echo do_shortcode($dotheref); ?>
            </aside>
            <?php endif; ?>
                <?php endif; ?>
            <?php if( get_field('box2') ): ?>
            <aside>
                <span class="asidetitle"><?php the_field('box2_title') ?></span>
                <p align="center">
    <a href="<?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>.pdf" target="_blank">
    <img srcset="<?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>1x.png 1x,
         <?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>2x.png 2x"
         src="<?php echo get_template_directory_uri ()?>/images/proglit/<?php the_field('box2img') ?>1x.jpg" 
         alt="<?php the_title(); ?> <?php the_field('box2_title') ?>"></p>
    <p align="center"> <?php the_field('box2') ?></a></p></aside>
            <?php endif; ?>
            <?php if( get_field('box3') ): ?>
            <aside><span class="asidetitle"> <?php the_field('box3_title') ?></span>
            <?php the_field('box3') ?></aside>
            <?php endif; ?>
</div>
        <?php if( get_field('citations') ): ?>
        <div class="prog-citations-bottom-container">
            <div class="prog-citations-bottom"><h2>References</h2>
                <?php the_field('citations') ?></div>  
            <div class="prog-citations-bottom-spacer"></div>
        </div>
        <?php endif; ?>
</div>
    
	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

