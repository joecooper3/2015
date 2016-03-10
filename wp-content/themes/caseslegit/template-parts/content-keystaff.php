<?php
/**
 * The template used for displaying the key staff page.
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
    </style>
<div class="about-container">
    <div class="leadimage-container3">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">Our ' ); ?></h1>
        </header><!-- .entry-header --></div>
	<div class="entry-content-keystaff">
            <div class="keystaff-grid">
                <div class="keystaff-item joel"><a href="#joel" aria-controls="joel" role="tab" data-toggle="tab">
                        <div class="keystaff-shade">Joel Copperman,<br/>CEO</div></a>
                    </div>
               <div class="keystaff-item joe"><a href="#joe" aria-controls="joe" role="tab" data-toggle="tab">
                        <div class="keystaff-shade">Joe Cooper,<br/>I'M ONLY TESTING, I KNOW I'M NOT KEY STAFF</div></a>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
                <div class="keystaff-item joel"><div class="keystaff-shade">Joel Copperman</div>
                    </div>
               </div>
                  <div class="keystaff-words">                              
		<?php the_content(); ?>
                  </div>
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

