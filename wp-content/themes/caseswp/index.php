<?php get_header(); ?>

<div class="two-thirds column">
<span class="bx-wrapper"><ul class="bxslider">

<?php if (have_posts()) :
   while (have_posts()) : the_post(); ?>
   <?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'your_thumb_handle' );
?>
	<li><img src="<?php echo $thumbnail['0'] ?>" class="scale-with-grid"><div class="bx-caption"><span class="bx-caption">
	<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	<p class="excerpt">
	
	<?php
  $myExcerpt = get_the_excerpt();
  $tags = array("<p>", "</p>");
  $myExcerpt = str_replace($tags, "", $myExcerpt);
  echo $myExcerpt;
  ?>
  
	<a href="<?php the_permalink(); ?>">Read more</a></p> </span> </div></li>
	<?php endwhile;
	endif; ?>
	</ul></span>
	</div>
<div class="one-third column"><span class="emphasis">There are better solutions than incarceration to keep communities 
safe.</span> <p class="blurb">
Drawing upon 40 years of experience innovating programs for youth and adults with special needs in New 
York City's courts, CASES has helped thousands of individuals build productive, crime-free lives. 
Our programs allow judges to offer alternative sanctions that cost significantly less than incarceration and lead to 
better long-term outcomes for individuals and their communities.</p>
<span class="social"><h4>Follow CASES</h4>
<a href="https://twitter.com/casesnyc"><img src="twitter.png" class="social"></a>
<a href="http://www.facebook.com/casesnyc"><img src="facebook.png" class="social"></a>
<a href="http://www.linkedin.com/companies/659695"><img src="linkedin.png" class="social"></a>
<a href="http://www.youtube.com/user/casesnyc/"><img src="youtube.png" class="social"></a></span></div>
<div class="row"></div>

<div class="one-third column"><h2>Headlines</h2>

<ul class="headlines">
<?php if (have_posts()) :
   while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile;
	endif; ?>
</ul>
</div>

<div class="one-third column"><h2>Donate to Us</h2>
<span class="profile">
<div class="video-container">
         <iframe src="http://www.youtube.com/embed/5i2CnGJWEx0" frameborder="0" width="560" height="315"></iframe>
</div>
<p>	 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum.</p></span>

<p align="center" style="padding-top:10px;"><button type="submit">Donate</button></p></div>

<div class="one-third column">
<h2>Meet Jose</h2>
<span class="profile">
<img src="images/jose3.jpg">
<p>At the age of eighteen, Jose was given the opportunity to enter CASES' Court Employment Project (CEP) rather 
than serve a prison sentence. He is currently enrolled at Borough of Manhattan Community College and is thankful that 
he got a second chance.</p>
<p><a href="#">Read More</a></p></span>

	</div>
<!-- <span class="socialalt"><div class="sixteen columns"><p>
	<a href="https://twitter.com/casesnyc"><img src="twitter.png"></a>
<a href="http://www.facebook.com/casesnyc"><img src="facebook.png"></a>
<a href="http://www.linkedin.com/companies/659695"><img src="linkedin.png"></a>
<a href="http://www.youtube.com/user/casesnyc/"><img src="youtube.png"></a></p>
	</div></span> -->
<div class="bigrow"></div>

<script type="text/javascript">
	$('.bxslider').bxSlider({
  mode: 'fade',
  auto: true,
  pause: 6000
});
</script>
<div class="sixteen columns" style="border-top:2.0px solid #002b55;margin:10px;padding:25px 10px 0 10px;">
	<span class="socialalt"><p>
	<a href="https://twitter.com/casesnyc"><img src="twitter.png"></a>
<a href="http://www.facebook.com/casesnyc"><img src="facebook.png"></a>
<a href="http://www.linkedin.com/companies/659695"><img src="linkedin.png"></a>
<a href="http://www.youtube.com/user/casesnyc/"><img src="youtube.png"></a></p>
	</span>
<p align="center"><a href="http://ati-ny.org/"><img src="http://www.cases.org/images/ATI-Logo-w-Motto.gif"></a>
<a href="#"><img src="images/amazonsmile.jpg"></a>
</p>
</div>
<?php get_footer(); ?>