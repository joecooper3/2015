<?php
/**
 * Template part for displaying single posts.
 *
 * @package CASES Legit
 */

?>
<?php
            $news_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), news_m, false, '' );
?>
<header class="entry-header-single">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

    <div class="entry-meta">
        <?php caseslegit_posted_on(); ?>
    </div><!-- .entry-meta -->
</header><!-- .entry-header -->
<div class="social-media-container">
            <div class="social-item"><?php if(function_exists('wp_print')) { print_link(); } ?></div>
            <div class="social-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook-square"></i></a></div>
            <div class="social-item"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>">
                    <i class="fa fa-twitter"></i></a></div>
        </div>
<div class="article-container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content-single">
            
            <img src="<?php echo $news_m[0]; ?>">
            
            <?php the_content(); ?>
            
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'caseslegit'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
           
        <footer class="entry-footer">
            <?php caseslegit_entry_footer(); ?>
        </footer><!-- .entry-footer -->

    </article>
<!-- #post-## -->

