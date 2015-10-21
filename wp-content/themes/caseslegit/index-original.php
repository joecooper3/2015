<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CASES Legit
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div id="leadimage-container"> <!-- Too many containers in this world,
            swear to man -->
            <div id="leadimage">
                &nbsp;
            </div>
            <div id="mission">
                <h3>A new vision of justice</h3>
                <p>CASES treats the individual in an environment best suited 
                    for his or her success&mdash;the community.</p>
                </p></div>
        </div>
        <div id="bonusbuttons">
            <p><a href="#"> Referrals <i class="fa fa-arrow-right"></i></a>
                <a href="#">The Nathaniel Clinic <i class="fa fa-arrow-right"></i></a></p>
        </div></main>
    <div id="bigboycontainer">
        <div id="newsstories">
            <?php if (have_posts()) : ?>

                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>

                    <?php
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/content', get_post_format());
                    ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?> 
        </div>

        
        <div id="maininfo">
            <p><span class="emp">Everyone deserves a second chance.</span> At CASES, we believe in the power of people to 
                change&mdash;regardless of past choices, present struggles, or future obstacles.
                We specialize in providing alternatives to incarceration and re-entry services to New York City's
                most vulnerable populations, including at-risk youth and persons with behavioral health needs.</p>
            <p>You guys have any idea what's going on with Rikers right now? Check this infographic:</p>
            <ul class="nav nav-tabs">
        <li class="active">
            <a href="#who" aria-controls="who" role="tab" data-toggle="tab">Who We Serve</a> </li>
        <li> <a href="#what" aria-controls="what" role="tab" data-toggle="tab">What's Goin On</a> </li></ul>
            
            <div role="tabpanel" class="tab-pane fade in active" id="who"><picture>
                <img srcset="wp-content/themes/caseslegit/images/fakegraph1x.png, wp-content/themes/caseslegit/images/fakegraph2.png 2x" alt="Teacher helping student">
                </picture></div> 
            <div role="tabpanel" class="tab-pane fade" id="what"><img src="images/fakeassgraphic.png" alt="The stat is f'real, tho."/></div>
            <p>Alright, so, as I said, sign up for our mailing list probably. Or donate. 
                Anything like that. Still filling space. I should maybe try to construct some longer sentences&mdash;I'm 
                sure we will not be quite as pithy with the final copy.
        </div>
    </div>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

