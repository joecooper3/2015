<?php
/**
* The template for displaying all single posts.
*
* @package CASES Legit
*/

get_header(); ?>

<main id="main" class="site-main" role="main">
  <div class="article-whole">

    <?php while (have_posts()) : the_post(); ?>


      <?php get_template_part('template-parts/content', 'single'); ?>
      <?php if(function_exists('wp_print')) { print_link(); } ?>
      <?php if(get_field('citations')) : ?>
        <div class="news-citations-bottom-container">
          <div class="news-citations-bottom">
            <h2>References</h2>
            <?php the_field('citations'); ?>
          </div>
        </div>
      <?php endif; ?>
      <?php the_post_navigation(); ?>

      <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;
      ?>

    <?php endwhile; // End of the loop. ?>
  </div>
  <?php get_sidebar('article'); ?>
</div>
</main><!-- #main -->


<?php get_footer(); ?>
