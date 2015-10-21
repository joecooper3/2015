<?php
get_header(); ?>

<div class="sixteen columns">
<div class="pagetitle">Search Results</div>
<div class="pagetitle-sub"><?php echo $s ?> </div>
<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>

<!-- <div class="topimage"><img src="<?php echo $thumbnail['0']; ?>" class="scale-with-grid"/>
</div> -->
</div>

<div class="row"></div>

<div class="two-thirds column">

<div class="general">
<?php if (have_posts()) : ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>
		
		<div class="clear"></div>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<p class="large nomargin"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p>
				<?php
				// Support for "Search Excerpt" plugin
				// http://fucoder.com/code/search-excerpt/
				if ( function_exists('the_excerpt') && is_search() ) {
					the_excerpt();
				} ?>
				<p class="small">
					<?php the_time('F jS, Y') ?> &nbsp;|&nbsp; 
					<!-- by <?php the_author() ?> -->
					Published in
					<?php the_category(', ');
						if($post->comment_count > 0) { 
								echo ' &nbsp;|&nbsp; ';
								comments_popup_link('', '1 Comment', '% Comments'); 
						}
					?>
				</p>
				
			</div>
			
			<hr>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous') ?></div>
			<div class="alignright"><?php previous_posts_link('Next &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>



</div>
<div class="one-third column"></div>
<script type="text/javascript">$(document).ready(function() {
        $('.help, .help2').click(function() {
                $('.tooltip').slideToggle("fast");
        });
    });</script>
	
<script type="text/javascript">$(document).ready(function() {
        $('.help3, .help4').click(function() {
                $('.tooltip2').slideToggle("fast");
        });
    });</script>
<script type="text/javascript">$(document).ready(function() {
        $('.mhelp, .mhelp2').click(function() {
                $('.mtooltip').slideToggle("fast");
        });
    });</script>
	
<script type="text/javascript">$(document).ready(function() {
        $('.mhelp3, .mhelp4').click(function() {
                $('.mtooltip2').slideToggle("fast");
        });
    });</script>
</div>
<div class="bigrow"></div>

<?php get_footer(); ?>