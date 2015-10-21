<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="spacerTop"></div>
  <div>
    <!-- Begin MAIN NAVIGATION -->
   <?php include("sitewide/navigation/leftNav.php"); ?>
    <!-- End MAIN NAVIGATION -->
    <div id="contentArea">
      <div>
  
<p><span class="font-h1">There are better solutions than incarceration to keep communities safe.</span> <span class="font-h2">Drawing upon 40 years of experience innovating programs for youth and adults with special needs in New York City's courts, CASES has helped thousands of individuals build productive, crime-free lives. Our programs allow judges to offer alternative sanctions that cost significantly less than incarceration and lead to better long-term outcomes for individuals and their communities.</span></p>	  
          <a href="/about/mission/index.php">Read More About CASES</a></p>
		  <div class="spacerTop">
      </div>
      <div id="columnLeft">
        <div class="topGrayLine"></div>
        <div class="spacerTop"></div>
        <div class="font-h3Div">NEWS</div>
        <div class="spacerTop"></div>
		<div class="ar">

		<?php if ( have_posts() ) : 
		$counter = 1;
			 while ( have_posts() ) : the_post(); 
			 if( $counter == 1 ) :?>
			 <span class="font-h1"><?php the_title(); ?></span><br />
              <br /><span class="font-h3">
			  <p><?php the_excerpt(); ?></p><br />
			 <a href="<?php the_permalink() ?>">Read More</a></p></span></div>
		<div class="spacerTop"></div>
		<div class="topGrayLine"></div>
		<div class="spacerTop"></div>
		
		<div id="column1">
		<?php elseif( $counter == 2) : ?>
		<p><span class="font-h1"><?php the_title(); ?></span><br><br>
		<?php the_excerpt(); ?><br><br>
		<a href="<?php the_permalink() ?>">Read More</a></p>
			   <div class="topGrayLine"></div>
		<?php elseif( $counter == 3) : ?>
		<div>
		      <p><span class="font-h1"><?php the_title(); ?></span><br><br>
			  <?php the_excerpt(); ?><br><br><a href="<?php the_permalink() ?>">Read More</a></p>
			   </div>
        </div>
		<?php elseif( $counter == 4 ) : ?>
		<div id="column2">
		  <div>
		  <p><span class="font-h1"><?php the_title(); ?></span><br><br>
		  <?php the_excerpt(); ?>
		  <br><br><a href="<?php the_permalink() ?>">Read More</a></p>
		  </div>
		  <?php else : ?>
		  <div class="topGrayLine"></div>
		 <div><p><span class="font-h1"><?php the_title(); ?></span><br><br>
		 <?php the_excerpt(); ?><br><br>
		 <a href="<?php the_permalink() ?>">Read More</a></p>
		  </div>
        </div>
      </div>
      <div id="columnRight2">
        <div style="padding-left:5px">JOSE'S STORY</div>
        <img src="../twentytwelve/images/josesstory.jpg" width="185">
        <div style="padding:5px">
<p>At the age of eighteen, Jose was given the opportunity to enter CASES' Court Employment Project (CEP) rather than serve a prison sentence. He is currently enrolled at Borough of Manhattan Community College and is thankful that he got a second chance. </p>
<a href="../twentytwelve/clientstories/jose.php">Read More</a></div>
	  </div>
		<?php endif; ?>
			<?php $counter++; ?>
			<?php endwhile; ?>

	  </div>

<?php else: ?>Whoops
<?php endif; ?>
<?php get_footer(); ?>