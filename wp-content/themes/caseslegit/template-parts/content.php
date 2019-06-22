<?php
/**
 * Template part for displaying posts.
 *
 * @package CASES Legit
 */

?>
<?php $args = array(
    'category_name' => 'news',
    'posts_per_page' => 5
);
$query = new WP_Query($args);  
while ( $query->have_posts() ) :
    $query->the_post();
?>

<?php

if ( $query->current_post === 0 && !is_paged() & is_front_page() ): ?> 

<a href="<?php echo post_permalink(get_the_ID()); ?>"> 
    <?php
$src_xs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xs, false, '' );
$src_s = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_s, false, '' );
$src_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_m, false, '' );
$src_l = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_l, false, '' );
$src_xl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xl, false, '' );
$news_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), news_m, false, '' );
?>
    <style type="text/css" media="screen">
        .news-bgimage { 
         background: url(<?php echo $news_m[0]; ?>); 
         background-size: cover; 
         height: 150px;
         margin-bottom: 10px;
         background-position: center; 
         
       }
        @media all and (max-width: 800px) {
            .news-bgimage {
                background-image: url(<?php echo $src_s[0]; ?>);
        }
        @media all and (max-width: 400px) {
            .news-bgimage {
                background-image: url(<?php echo $src_xs[0]; ?>);
        }
        }
    </style>
    <div class="news-bgimage"></div>
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