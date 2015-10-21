<?php
get_header(); ?>

<div class="sixteen columns">
<div class="pagetitle">About</div>
<div class="pagetitle-sub"><?php the_title(); ?> </div>
<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>

<div class="topimage"><img src="<?php echo $thumbnail['0']; ?>" class="scale-with-grid"/>
</div>
</div>

<div class="row"></div>

<div class="two-thirds column">

<div class="general">
<?php if (have_posts()) :
   while (have_posts()) : the_post(); ?>
	<?php the_content() ;?>
   </div>
	<?php endwhile;
	endif; ?>
</div>

<div class="one-third column">
<?php while ( have_posts() ) : the_post(); ?>
<?php 

if(get_field('box1')) {
echo'<div class="sideblurb">';
echo'<h4>';
the_field('box1_title');
echo'</h4>';
the_field('box1');
echo'</div>';
}

?>

<?php 

if(get_field('box2')) {
echo'<div class="sideblurb">';
echo'<h4>';
the_field('box2_title');
echo'</h4>';
the_field('box2');
echo'</div>';
}

?>

<?php endwhile; // end of the loop. ?>



</div>

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

<div class="bigrow"></div>

<?php get_footer(); ?>