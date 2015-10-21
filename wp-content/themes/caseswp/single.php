<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage CASES
 * @since CASES 2013
 */

get_header(); ?>


<div class="sixteen columns">
<div class="pagetitle">News</div>
<div class="pagetitle-sub"><?php the_title(); ?> </div>
<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>

<div class="topimage"><img src="<?php echo $thumbnail['0']; ?>" class="scale-with-grid"/>
</div>
</div>

<div class="row"></div>

<div class="two-thirds column">


<?php if (have_posts()) :
   while (have_posts()) : the_post(); ?>
   
   <div class="date">Posted on <?php echo the_date('l, F j, Y'); ?></div>  
   <div class="general">
 
	<?php the_content() ;?>
   </div>
	<?php endwhile;
	endif; ?>
</div>

<!-- Start of side blurbs -->

<div class="one-third column">
<div class="sideblurb">
<h4>
Headlines
</h4>
<p>
<ul>
<?php $the_query = new WP_Query( 'showposts=5' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile;?>
</ul>
</a></li>
</ul>
</p>

</div>

</div>

<div class="bigrow"></div>

<?php get_footer(); ?>