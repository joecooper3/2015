<?php
/**
 * Template part for displaying single posts.
 *
 * @package CASES Legit
 */

?>
<header class="entry-header-single">
    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

    <div class="entry-meta">
        <?php caseslegit_posted_on(); ?>
    </div><!-- .entry-meta -->
</header><!-- .entry-header -->

<div class="article-container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content-single">
            <?php echo simone_the_responsive_thumbnail(get_the_ID()); ?>
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

