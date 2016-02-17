<?php
/**
 * The template used for displaying services pages.
 *
 * @package CASES Legit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("serv-container"); ?>>
    <?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' );
$src_xs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xs, false, '' );
$src_s = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_s, false, '' );
$src_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_m, false, '' );
$src_l = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_l, false, '' );
$src_xl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xl, false, '' );

?>
    <style type="text/css" media="screen">
        .serv-bgimage { 
         background: url(<?php echo $src[0]; ?>); 
         background-size: cover; 
         background-position: center;
        }
    </style>
    <div class="leadimage-container2 serv-bgimage">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">' ); ?> Services</h1>
        </header><!-- .entry-header --></div>
<?php if(function_exists('wp_print')) { print_link(); } ?>
	<div class="entry-content-serv">
         <div class="serv-body">
            <!-- <h2><?php echo $src_s[0] ?></h2>-->
             <div class="challenge bodybox"><h2>The Challenge</h2>
            <p><?php the_field('the_challenge') ?></p></div>
             <div class="challenge-infographic infogbox">
            <?php the_field('challenge_infographic') ?></div>
              <div class="approach bodybox"><h2>Our Approach</h2>
            <p><?php the_field('our_approach') ?></p></div>
             <div class="approach-infographic infogbox">
            <?php the_field('approach_infographic') ?></div>
             <div class="outcomes bodybox"><h2>Outcomes</h2>
            <p><?php the_field('outcomes') ?></p></div>
             <div class="outcomes-infographic infogbox">
            <?php the_field('outcomes_infographic') ?></div>	
         </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'caseslegit' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

