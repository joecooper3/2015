<?php
/**
 * The template is for the uh social sharing
 *
 * @package CASES Legit
 */

?>

<div class="social-media-container">
            <div class="social-item"><?php if(function_exists('wp_print')) { print_link(); } ?></div>
            <div class="social-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook-square"></i></a></div>
            <div class="social-item"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>">
                    <i class="fa fa-twitter"></i></a></div>
        </div>
