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
                    <a href="?page_id=684" class="locat-shade">
                            <span class="hvr-underline-from-center-before"></span>
                            <span class="hvr-underline-from-center">Courtroom</span>
                        </a>
                </div>
                <div class="locat-caption">
                    a new vision for justice
                </div>
            </div>
            <div class="locat-container">
                <div class="locat-square sq2">
                    
                        <a class="locat-shade" href="?page_id=1014">
                            <span class="hvr-underline-from-center-before"></span>
                            <span class="hvr-underline-from-center">Clinic</span>
                        </a>
                    </div>
                <div class="locat-caption">
                    an effective pathway to recovery
                </div>
            </div>
            <div class="locat-container">
                <div class="locat-square sq3"> <a href="?page_id=882" class="locat-shade">
                        <span class="hvr-underline-from-center-before"></span>
                        <span class="hvr-underline-from-center">Community</span></a>
                    </div>
                <div class="locat-caption">
                    a New York City<br/> safer for every citizen
                </div>
            </div>
        </div>
        
        <div id="bonusbuttons">
            <p><a href="?page_id=849"> Referrals <i class="fa fa-arrow-right"></i></a>
                <a href="?page_id=1014">The Nathaniel Clinic <i class="fa fa-arrow-right"></i></a></p>
        </div> </main>
    
    <div id="bigboycontainer">



        <div id="maininfo">
            <div id="submaininfo">
                <p>
                    <span class="emp">New York City’s Rikers Island jail is currently home to more than 9,000 people every day,
                    including large numbers 
                    of young people age 16-24 tried as adults and men and women with serious mental illness and other behavioral health 
                    conditions. </span></p>
                <p>Many of the people in these subpopulations have become involved in the criminal justice system as the result
                    of factors including poverty, challenging family situations, low education levels, lack of employment opportunities, 
                    homelessness, untreated mental illness, and addiction. Once involved in 
                    the criminal justice system these individuals face significant challenges 
                    if they are to overcome the experience of incarceration, the consequences of a 
                    criminal record, and the disruption of community networks and—for young people—the traditional course of youth development.
                 </p>
            
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#who" aria-controls="who" role="tab" data-toggle="tab">Who We Serve</a> </li>
                <li class="dot">&#8226;</li>
                <li> <a href="#what" aria-controls="what" role="tab" data-toggle="tab">The Challenge</a> </li>
                <li class="dot">&#8226;</li>
            <li> <a href="#outcomes" aria-controls="outcomes" role="tab" data-toggle="tab">Our Outcomes</a> </li></ul>
            
            <div role="tabpanel" class="tab-pane fade in active" id="who">
                <div class="infog-container">
                    <div class="infog-boxfp">
                    <img src="wp-content/themes/caseslegit/images/raceinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/raceinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/raceinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/raceinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/raceinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/raceinfo-xl.png 3800w"
                        alt="95% of prison sentences for 16- and 17-year olds are served by black and Hispanic youth."></div>
                    <div class="infog-link">
                        <p><a href="?page_id=691">Read more about CASES' youth programs <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    <div class="infog-boxfp">
                    <img src="wp-content/themes/caseslegit/images/mentalinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/mentalinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/mentalinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/mentalinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/mentalinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/mentalinfo-xl.png 3800w"
                        alt="37% of New York City's jail population suffers from mental illness."></div>
                    <div class="infog-link">
                        <p><a href="?page_id=675">Read more about CASES' behavioral health programs <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                
            </div> </div>
            
            <div role="tabpanel" class="tab-pane fade" id="what">
                <div class="infog-container">
                    <div class="infog-boxfp">
                    <img src="wp-content/themes/caseslegit/images/gradjail-m.png" 
                        srcset="wp-content/themes/caseslegit/images/gradjail-xs.png 400w, 
                        wp-content/themes/caseslegit/images/gradjail-s.png 660w,
                        wp-content/themes/caseslegit/images/gradjail-m.png 950w,
                        wp-content/themes/caseslegit/images/gradjail-l.png 1900w,
                        wp-content/themes/caseslegit/images/gradjail-xl.png 3800w"
                        alt="Low-income young people of color are more likely to me incarcerated than employed at any future
                        point of their lives."></div>
                    <div class="infog-link">
                        <p><a href="../youth/">Read more about CASES' youth services <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    <div class="infog-boxfp">
                    <img src="wp-content/themes/caseslegit/images/detained-m.png" 
                        srcset="wp-content/themes/caseslegit/images/detained-xs.png 400w, 
                        wp-content/themes/caseslegit/images/detained-s.png 660w,
                        wp-content/themes/caseslegit/images/detained-m.png 950w,
                        wp-content/themes/caseslegit/images/deetained-l.png 1900w,
                        wp-content/themes/caseslegit/images/detained-xl.png 3800w"
                        alt="People with mental illness are detained twice as long as people without mental illness
                        when all other factors are similar."></div>
                    <div class="infog-link">
                        <p><a href="../adult-behavioral-health/">Read more about CASES' adult behavioral health services <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    
                
            </div>  </div>
            <div role="tabpanel" class="tab-pane fade" id="outcomes">
                <div class="infog-container">
                    <div class="infog-boxfp">
                    <img src="wp-content/themes/caseslegit/images/youthrecid-m.png" 
                        srcset="wp-content/themes/caseslegit/images/youthrecid-xs.png 400w, 
                        wp-content/themes/caseslegit/images/youthrecid-s.png 660w,
                        wp-content/themes/caseslegit/images/youthrecid-m.png 950w,
                        wp-content/themes/caseslegit/images/youthrecid-l.png 1900w,
                        wp-content/themes/caseslegit/images/youthrecid-xl.png 3800w"
                        alt="Only 16% of CASES youth ATI participants have a new criminal conviction
                        after two years of completing services."></div>
                    <div class="infog-link">
                        <p><a href="../youth/">Read more about CASES youth programs <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    <div class="infog-boxfp">
                    <img src="wp-content/themes/caseslegit/images/moneyinfo-m.png" 
                        srcset="wp-content/themes/caseslegit/images/moneyinfo-xs.png 400w, 
                        wp-content/themes/caseslegit/images/moneyinfo-s.png 660w,
                        wp-content/themes/caseslegit/images/moneyinfo-m.png 950w,
                        wp-content/themes/caseslegit/images/moneyinfo-l.png 1900w,
                        wp-content/themes/caseslegit/images/moneyinfo-xl.png 3800w"
                        alt="Jail-diversion programs in New York City showed an average of $7,083
                        lower jail costs per person."></div>
                    <div class="infog-link">
                        <p><a href="#">Read more about the outcomes of CASES clients <i class="fa fa-arrow-right"></a></p></i>
                    </div>
                    
                
            </div>  </div>
            <!-- Text after infographics, if we want it -->
        </div> </div>
        <div id="newsstories">
            <div id='subnewsstories'><span class="latestnews">Latest News</span>
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

