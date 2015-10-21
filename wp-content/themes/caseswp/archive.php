<?php
/**
 Template Name: Archives
 */

get_header(); ?>

<div id="container">
	<div id="content" role="main">

		<?php
// List Pages by Month/Day
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
'paged' => $paged,
 'post_type' => 'post',
 'posts_per_page' => 30,
             );
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post();
  $this_dt = get_the_time('F Y',$post->post_date);
  if ($curr_dt != $this_dt) { ?>

<h4><?php echo $this_dt; ?></h4>

   <?php } ?>

  <ul>
  <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li><?php echo "</ul>"; 
 $curr_dt = $this_dt; endwhile; ?>
<div class="navigation">
  <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
  <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>
<?php else :
// Code here for no pages found
endif;
?>

	</div>
</div><!-- #container -->

<?php get_footer(); ?>
