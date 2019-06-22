<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package CASES Legit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="article-whole">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Sorry! That page cannot be found.', 'caseslegit' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
                                    <div class="article-container">
					<p><?php esc_html_e( 'It seems the page may have been deleted or moved to a new location. Try looking for it in the search box below, or check out our recent news stories. ' , 'caseslegit' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( caseslegit_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						
						
					</div><!-- .widget -->
					<?php endif; ?>


                                    </div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
