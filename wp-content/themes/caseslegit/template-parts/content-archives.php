<?php
/**
 * The template used for displaying the archives page.
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
	<div class="entry-content-archives">
            <?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<?php
    // Get years that have posts
    $years = $wpdb->get_results( "SELECT YEAR(post_date) AS year FROM wp_posts WHERE post_type = 'post' AND post_status = 'publish' GROUP BY year DESC" );

    //  For each year, do the following
    foreach ( $years as $year ) {

        // Get all posts for the year
        $posts_this_year = $wpdb->get_results( "SELECT ID, post_title FROM wp_posts WHERE post_type = 'post' AND post_status = 'publish' AND YEAR(post_date) = '" . $year->year . "'" );

        // Display the year as a header
        echo '<h2>' . $year->year . '</h2>';

        // Start an unorder list
        echo '</ul>';

        // For each post for that year, do the following
        foreach ( $posts_this_year as $post ) {
            // Display the title as a hyperlinked list item
            echo '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a></li>';
        }

        // End the unordered list
        echo '</ul>';
    }
?>
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

