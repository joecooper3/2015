<?php
/*
 * WordPress Plugin: WP-Print
 * Copyright (c) 2012 Lester "GaMerZ" Chan
 *
 * File Written By:
 * - Lester "GaMerZ" Chan
 * - http://lesterchan.net
 *
 * File Information:
 * - Printer Friendly Post/Page Template
 * - wp-content/plugins/wp-print/print-posts.php
 */

global $text_direction;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="Robots" content="noindex, nofollow" />
	<?php if(@file_exists(get_stylesheet_directory().'/print-css.css')): ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/print-css.css" type="text/css" media="screen, print" />
	<?php else: ?>
		<link rel="stylesheet" href="<?php echo plugins_url('wp-print/print-css.css'); ?>" type="text/css" media="screen, print" />
	<?php endif; ?>
	<?php if('rtl' == $text_direction): ?>
		<?php if(@file_exists(get_stylesheet_directory().'/print-css-rtl.css')): ?>
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/print-css-rtl.css" type="text/css" media="screen, print" />
		<?php else: ?>
			<link rel="stylesheet" href="<?php echo plugins_url('wp-print/print-css-rtl.css'); ?>" type="text/css" media="screen, print" />
		<?php endif; ?>
	<?php endif; ?>
	<link rel="canonical" href="<?php the_permalink(); ?>" />
</head>
<body><?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_original, false, '' );
$src_xs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xs, false, '' );
$src_s = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_s, false, '' );
$src_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_m, false, '' );
$src_l = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_l, false, '' );
$src_xl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), serv_xl, false, '' );

?>
    <style type="text/css" media="screen">
        .serv-bgimage { 
         background: url(<?php echo $src_m; ?>); 
         background-size: cover; 
         background-position: center;
         width: 600px;
         height: 300px;
         margin: 0 auto;
        }
    </style>

<main role="main" class="center">

	<?php if (have_posts()): ?>

		<header class="entry-header">

			<span class="hat">
				<strong>
                                    <span dir="ltr"><img src="http://www.cases.org/wp-content/themes/caseslegit/images/logo-m.png" width="400px"/> 
                        </span> 
				</strong>
			</span>
			
			<?php while (have_posts()): the_post(); ?>

			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
			
		</header>	

		<div class="entry-content">
			<?php print_content(); ?>

		</div>
    <div class="print-image"><img src="<?php echo $src_xs[0]; ?>" /></div>
                    <?php if( get_field('the_challenge') ): ?>
<div class="entry-content-serv">
    
         <div class="serv-body">
            <!-- <h2><?php echo $src_s[0] ?></h2>-->
             <div class="challenge bodybox"><h2>The Challenge</h2>
            <p><?php the_field('the_challenge') ?></p></div>
             <div class="challenge-infographic infogbox">
            <?php the_field('challenge_infographic') ?></div>
              <div class="approach bodybox"><h2>Our Approach</h2>
            <p><?php the_field('our_approach') ?></p></div>
             <div class="approach-infographic infogbox">
            <?php the_field('approach_infographic') ?></div>
             <div class="outcomes bodybox"><h2>Outcomes</h2>
            <p><?php the_field('outcomes') ?></p></div>
             <div class="outcomes-infographic infogbox">
            <?php the_field('outcomes_infographic') ?></div>	
         </div></div>
    <?php endif; ?>

	<?php endwhile; ?>
	
	<div class="comments">
		<?php if(print_can('comments')): ?>
			<?php comments_template(); ?>
		<?php endif; ?>
	</div>
	
	<footer class="footer">
		<p>
			<?php _e('Article printed from', 'wp-print'); ?> 
			<?php bloginfo('name'); ?>: 

			<strong dir="ltr">
				<?php bloginfo('url'); ?>
			</strong>
		</p>

		<p>
			<?php _e('URL to article', 'wp-print'); ?>: 
			<strong dir="ltr">
				<?php the_permalink(); ?>
			</strong>
		</p>
		
		<?php if(print_can('links')): ?>
			<p><?php print_links(); ?></p>
		<?php endif; ?>

		<p style="text-align: <?php echo ('rtl' == $text_direction) ? 'left' : 'right'; ?>;" id="print-link">
			<a href="#Print" onclick="window.print(); return false;" title="<?php _e('Click here to print.', 'wp-print'); ?>">
				<?php _e('Click', 'wp-print'); ?> 
				<?php _e('here', 'wp-print'); ?>
				<?php _e('to print.', 'wp-print'); ?>
			</a> 
		</p>

		<?php else: ?>
			<p>
				<?php _e('No posts matched your criteria.', 'wp-print'); ?>
			</p>
		<?php endif; ?>
                        
		<p style="text-align: center;">
			<?php echo stripslashes($print_options['disclaimer']); ?>
		</p>
                
	</footer>

</main>


</body>
</html>
