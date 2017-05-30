<?php
/**
 * Template part for displaying featured posts.
 *
 * @package CASES Legit
 */

?>
<?php $args2 = array(
    'category_name' => 'featured',
    'posts_per_page' => 1
);
$query2 = new WP_Query($args2);  
while ( $query2->have_posts() ) :
    $query2->the_post();
?>

<?php

if ( $query2->current_post === 0 && !is_paged() & is_front_page() ): ?> 

<a href="<?php echo post_permalink(get_the_ID()); ?>"> 
    <?php
$src_xs_f = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xs, false, '' );
$src_s_f = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_s, false, '' );
$src_m_f = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_m, false, '' );
$src_l_f = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_l, false, '' );
$src_xl_f = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xl, false, '' );
$news_m_f = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), news_m, false, '' );
?>
    <style type="text/css" media="screen">
        .featured-bgimage { 
         background: url(<?php echo $news_m_f[0]; ?>); 
         background-size: cover; 
         height: 200px;
         margin-bottom: 10px;
         background-position: center bottom; 
         
       }
        @media all and (max-width: 800px) {
            .featured-bgimage {
                background-image: url(<?php echo $src_s_f[0]; ?>);
        }
        @media all and (max-width: 400px) {
            .featured-bgimage {
                background-image: url(<?php echo $src_xs_f[0]; ?>);
        }
        }
    </style>
    <div class="featured-bgimage"></div>
</a>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>	
            <div class="entry-meta">
			<?php caseslegit_posted_on_front(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    <div class="entry-content">
		<?php the_excerpt(); ?>
        <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
</article>
<?php elseif ( 'post' == get_post_type() ) :?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php caseslegit_posted_on_front(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

            
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caseslegit' ),
				'after'  => '</div>',
			) );
		?>
	<!-- .entry-content -->

	<!-- <footer class="entry-footer"> -->
		<?php /* caseslegit_entry_footer(); */ ?>
<!--	</footer> <!-- .entry-footer --> 
</article><!-- #post-## -->
<?php endif; ?>
<?php endwhile;
wp_reset_postdata();
?>