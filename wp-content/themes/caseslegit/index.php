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
            <div class="locat-container">
                <div class="locat-square sq1">
                    <div class="locat-shade">
                        Courtroom</div>
                </div>
                <div class="locat-caption">
                    a new vision for justice
                </div>
            </div>
            <div class="locat-container">
                <div class="locat-square sq2">
                    <div class="locat-shade">Clinic
                    </div></div>
                <div class="locat-caption">
                    an effective pathway to recovery
                </div>
            </div>
            <div class="locat-container">
                <div class="locat-square sq3"> <div class="locat-shade">
                        Community</div>
                </div>
                <div class="locat-caption">
                    a New York City safer for every citizen
                </div>
            </div>
        </div>
        
        <div id="bonusbuttons">
            <p><a href="#"> Referrals <i class="fa fa-arrow-right"></i></a>
                <a href="#">The Nathaniel Clinic <i class="fa fa-arrow-right"></i></a></p>
        </div> </main>
    
    <div id="bigboycontainer">



        <div id="maininfo">
            <div id="submaininfo">
            <p><span class="emp">Everyone deserves a second chance.</span> At CASES, we believe in the power of people to 
                change&mdash;regardless of past choices, present struggles, or future obstacles.
                We specialize in providing alternatives to incarceration and re-entry services to New York City's
                most vulnerable populations, including at-risk youth and persons with behavioral health needs.</p>
            <p>You guys have any idea what's going on with Rikers right now? Check this infographic:</p>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#who" aria-controls="who" role="tab" data-toggle="tab">Who We Serve</a> </li>
                <li>&#8226;</li>
                <li> <a href="#what" aria-controls="what" role="tab" data-toggle="tab">The Challenge</a> </li>
                <li>&#8226;</li>
            <li> <a href="#outcomes" aria-controls="outcomes" role="tab" data-toggle="tab">Our Outcomes</a> </li></ul>
            
            <div role="tabpanel" class="tab-pane fade in active" id="who">
                <div class="infog-container">
                    <div class="infog-box">
                    <img src="wp-content/themes/caseslegit/images/raceinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/raceinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/raceinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/raceinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/raceinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/raceinfo-xl.png 3800w"
                        alt="I just want one night"></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about CASES' youth programs <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    <div class="infog-box">
                    <img src="wp-content/themes/caseslegit/images/mentalinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/mentalinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/mentalinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/mentalinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/mentalinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/mentalinfo-xl.png 3800w"
                        alt="I just want one night"></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about CASES' behavioral health programs <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                
            </div> </div>
            
            <div role="tabpanel" class="tab-pane fade" id="what">
                <div class="infog-container">
                    <div class="infog-box">
                    <img src="wp-content/themes/caseslegit/images/unempinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/unempinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/unempinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/unempinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/unempinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/unempinfo-xl.png 3800w"
                        alt="I just want one night"></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about CASES' employment services <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    <div class="infog-box">
                    <img src="wp-content/themes/caseslegit/images/gradinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/gradinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/gradinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/gradinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/gradinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/gradinfo-xl.png 3800w"
                        alt="I just want one night"></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about CASES' education services <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                
            </div>  </div>
            <div role="tabpanel" class="tab-pane fade" id="outcomes">
                <div class="infog-container">
                    <div class="infog-box">
                    <img src="wp-content/themes/caseslegit/images/moneyinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/moneyinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/moneyinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/moneyinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/moneyinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/moneyinfo-xl.png 3800w"
                        alt="I just want one night"></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about the outcomes of CASES clients <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    <div class="infog-box">
                    <img src="wp-content/themes/caseslegit/images/youthrecid-m.png" 
                        srcset="wp-content/themes/caseslegit/images/youthrecid-xs.png 400w, 
                        wp-content/themes/caseslegit/images/youthrecid-s.png 660w,
                        wp-content/themes/caseslegit/images/youthrecid-m.png 950w,
                        wp-content/themes/caseslegit/images/youthrecid-l.png 1900w,
                        wp-content/themes/caseslegit/images/youthrecid-xl.png 3800w"
                        alt="I just want one night"></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about how CASES keeps its participants in the community <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                
            </div>  </div>
            <p>Alright, so, as I said, sign up for our mailing list probably. Or donate. 
                Anything like that. Still filling space. I should maybe try to construct some longer sentences&mdash;I'm 
                sure we will not be quite as pithy with the final copy.
        </div> </div>
        <div id="newsstories">
            <div id='subnewsstories'>
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
            </div></div>
    </div>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

