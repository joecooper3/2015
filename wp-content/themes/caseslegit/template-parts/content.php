<?php
/**
 * Template part for displaying posts.
 *
 * @package CASES Legit
 */

?>

<?php
if ( $wp_query->current_post == 0 && !is_paged() & is_front_page() ): ?> 
<a href="<?php echo post_permalink(get_the_ID()); ?>"> 
    <?php echo simone_the_responsive_thumbnail(get_the_ID()); ?></a>
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