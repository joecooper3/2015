<?php
/**
Template Name: Sitemap
 */

get_header(); ?>


<div class="sixteen columns">
<div class="pagetitle">Sitemap</div>



</div>

<div class="row"></div>


<?php if (have_posts()) :
   while (have_posts()) : the_post(); ?>
    
 
	<?php the_content() ;?>
   </div>
	<?php endwhile;
	endif; ?>
</div>

<!-- Start of side blurbs -->



<div class="row"></div>

<?php get_footer(); ?>